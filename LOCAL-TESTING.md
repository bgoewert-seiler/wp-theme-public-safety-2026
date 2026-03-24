# Local Testing with wp-env

This theme includes a wp-env configuration for easy local testing.

## Prerequisites

- **Node.js** 20+ and npm
- **Docker Desktop** running
- **Local Gutenberg** at `~/projects/gutenberg` (for HTTPS support in wp-env)

## Quick Start

### 1. Add Hostname to /etc/hosts

Before starting, add the custom hostname to your hosts file:

**Option A: Use Helper Script (Linux/Mac/WSL)**
```bash
sudo ./add-hosts-entry.sh
```

The script checks if the entry already exists before adding it.

**Option B: Manual Entry**

**Linux/Mac:**
```bash
sudo nano /etc/hosts
```

**Windows (run Notepad as Administrator):**
```
notepad C:\Windows\System32\drivers\etc\hosts
```

Add this line:
```
127.0.0.1 publicsafety.local
```

Save and close the file.

### 2. Install Dependencies

```bash
npm install
```

This will link to the local Gutenberg `@wordpress/env` package (which includes HTTPS support).

**Note:** The `package.json` uses `"@wordpress/env": "file:../gutenberg/packages/env"` to use your local Gutenberg installation instead of the npm registry version, since the local version has newer features like the `https` configuration option.

### 3. Start WordPress Environment

```bash
npm run env:start
```

This will:
- Download and start WordPress in Docker
- Install the theme automatically
- Install Contact Form 7 and WooCommerce plugins
- Activate the theme
- Set up pretty permalinks

**First start takes 2-5 minutes** while Docker downloads WordPress images.

### 3. Access Your Site

**Local Site:**
- URL: http://publicsafety.local:8890
- Username: `admin`
- Password: `password`

**Admin Dashboard:**
- URL: http://publicsafety.local:8890/wp-admin

**Accept the self-signed SSL certificate warning** in your browser (this is normal for local development).

## Available Commands

### Environment Management

```bash
# Start the environment
npm run env:start

# Stop the environment (keeps data)
npm run env:stop

# Restart and update WordPress/plugins
npm run env:restart

# Destroy environment (removes all data)
npm run env:destroy

# Clean all volumes and reset completely
npm run env:clean

# Full reset (destroy + start fresh)
npm run env:reset
```

### Cache Management

```bash
# Clear WordPress cache and permalinks
npm run env:cache:clear
```

### Log Files

```bash
# View debug log (live tail)
npm run env:log

# View last 100 lines of debug log
npm run env:log:tail

# Clear debug log
npm run env:log:clear
```

### Theme Commands

```bash
# Activate the theme
npm run theme:activate

# Get theme information
npm run theme:info

# Run theme check (requires Theme Check plugin)
npm run theme:check
```

### Homepage Setup

```bash
# Create and set homepage (all in one)
npm run setup:homepage

# Or do it manually:
npm run setup:create-homepage  # Creates "Home" page
npm run setup:set-homepage     # Sets it as front page
```

### WP-CLI Commands

```bash
# Run any WP-CLI command
npm run wp:cli -- <command>

# Examples:
npm run wp:cli -- post list
npm run wp:cli -- plugin list
npm run wp:cli -- theme list
npm run wp:cli -- user list
npm run wp:cli -- db export

# Open bash shell in WordPress container
npm run wp:shell
```

## Configuration Details

### Ports

- **Development Site:** http://publicsafety.local:8890
- **HTTP:** http://localhost:8888
- **HTTPS:** http://publicsafety.local:8890
- **Tests (if used):** https://localhost:8444

If these ports conflict with other services, you can change them in `.wp-env.json`.

### Pre-installed Plugins

The environment comes with:
- Contact Form 7 (for contact forms)
- WooCommerce (for e-commerce testing)

### Theme Auto-activation

The theme is automatically activated after the environment starts via the `lifecycleScripts.afterStart` hook in `.wp-env.json`.

## Testing Workflow

### 1. Initial Setup

```bash
npm install
npm run env:start
```

Wait for startup, then visit http://publicsafety.local:8890

### 2. Create Homepage

```bash
npm run setup:homepage
```

Or manually:
1. Go to http://publicsafety.local:8890/wp-admin
2. Pages → Add New
3. Title: "Home"
4. Add block patterns
5. Publish
6. Settings → Reading → Set as homepage

### 3. Development

Make changes to theme files, then:

```bash
npm run env:cache:clear
```

Refresh browser to see changes (CSS/JS changes may need hard refresh: Ctrl+Shift+R).

### 4. View Logs

```bash
npm run env:log:tail
```

Check for PHP errors or warnings.

### 5. Test Features

- Test all block patterns
- Test responsive design (browser DevTools)
- Test navigation
- Test forms (Contact Form 7)
- Test WooCommerce (optional)
- Check accessibility

### 6. Stop Environment

```bash
npm run env:stop
```

## Troubleshooting

### Environment won't start

**Check Docker is running:**
```bash
docker ps
```

**Reset environment:**
```bash
npm run env:reset
```

### Theme not showing up

**Check theme is installed:**
```bash
npm run wp:cli -- theme list
```

**Manually activate:**
```bash
npm run theme:activate
```

### Changes not showing

**Clear cache:**
```bash
npm run env:cache:clear
```

**Hard refresh browser:** Ctrl+Shift+R (or Cmd+Shift+R on Mac)

### SSL Certificate Warning

This is normal for local development. Click "Advanced" and "Proceed to localhost" in your browser.

### Port conflicts

Edit `.wp-env.json` and change the port numbers:

```json
{
  "port": 8890,
  "httpsPort": 8445
}
```

### Can't access admin

Default credentials:
- Username: `admin`
- Password: `password`

### Database issues

Reset the database:
```bash
npm run env:clean
npm run env:start
```

## Advanced Configuration

### Custom wp-env Config

Create `.wp-env.override.json` for personal settings (not tracked by git):

```json
{
  "port": 9000,
  "themes": [
    "."
  ]
}
```

### Add More Plugins

Edit `.wp-env.json`:

```json
{
  "plugins": [
    "https://downloads.wordpress.org/plugin/your-plugin.latest-stable.zip"
  ]
}
```

### PHP Version

Change PHP version in `.wp-env.json`:

```json
{
  "phpVersion": "8.0"
}
```

### WordPress Version

Specify WordPress version:

```json
{
  "core": "WordPress/WordPress#6.4.0"
}
```

## Testing Checklist

Use this environment to test:

- [ ] Theme activates without errors
- [ ] All templates render correctly
- [ ] All block patterns insert and display
- [ ] Header and footer display
- [ ] Navigation works
- [ ] Mobile responsive design
- [ ] Contact forms work (Contact Form 7)
- [ ] WooCommerce pages display (if using)
- [ ] No PHP errors in logs
- [ ] No JavaScript errors in console
- [ ] Accessibility (keyboard navigation, screen reader)
- [ ] Performance (check query count: npm run wp:cli -- query-monitor)

## Cleanup

When done testing:

```bash
# Stop but keep data
npm run env:stop

# Or completely remove
npm run env:destroy
```

Docker volumes will be removed and disk space freed.

## Resources

- **wp-env Documentation:** https://developer.wordpress.org/block-editor/reference-guides/packages/packages-env/
- **WP-CLI Commands:** https://developer.wordpress.org/cli/commands/
- **Docker Desktop:** https://www.docker.com/products/docker-desktop

## Tips

1. **Start/stop instead of destroy** - Keeps your data between sessions
2. **Use log:tail** - Quick way to check for errors
3. **Cache:clear after changes** - Ensures you see updates
4. **env:reset for fresh start** - When things get weird
5. **Check Docker memory** - Increase if WordPress is slow (Docker → Settings → Resources)

---

**Happy Testing!** 🚀
