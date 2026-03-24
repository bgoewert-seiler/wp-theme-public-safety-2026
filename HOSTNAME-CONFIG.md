# Custom Hostname Configuration

The wp-env setup uses a custom hostname instead of `localhost` for a more professional local development experience.

## Configuration

**Hostname:** `publicsafety.local`
**URL:** `http://publicsafety.local:8890`

## How It Works

### 1. WordPress Configuration
The `.wp-env.json` file sets WordPress constants:

```json
"config": {
  "WP_HOME": "http://publicsafety.local:8890",
  "WP_SITEURL": "http://publicsafety.local:8890"
}
```

### 2. Database Settings
The `lifecycleScripts.afterStart` hook updates the database:

```bash
wp option update home 'http://publicsafety.local:8890'
wp option update siteurl 'http://publicsafety.local:8890'
```

This ensures both the WordPress constants AND database values use the custom hostname.

### 3. Hosts File Entry
Your system's hosts file maps the hostname to localhost:

```
127.0.0.1 publicsafety.local
```

## Setup

### Quick Setup (Linux/Mac/WSL)

Run the helper script:
```bash
sudo ./add-hosts-entry.sh
```

The script:
- ✅ Checks if the entry already exists (exact match: `^127\.0\.0\.1[[:space:]]+publicsafety\.local`)
- ✅ Only adds the entry if it's not found
- ✅ Prevents duplicate entries
- ✅ Provides clear feedback

### Manual Setup

**Linux/Mac:**
```bash
echo "127.0.0.1 publicsafety.local" | sudo tee -a /etc/hosts
```

**Windows (PowerShell as Administrator):**
```powershell
Add-Content -Path C:\Windows\System32\drivers\etc\hosts -Value "127.0.0.1 publicsafety.local"
```

**Windows (Manual):**
1. Right-click Notepad → Run as Administrator
2. Open: `C:\Windows\System32\drivers\etc\hosts`
3. Add line: `127.0.0.1 publicsafety.local`
4. Save

## Verification

After adding the hosts entry, test it:

```bash
ping publicsafety.local
```

You should see responses from `127.0.0.1`.

## Benefits of Custom Hostname

1. **More Professional** - Better than `localhost` for demos
2. **Consistent URLs** - Matches production-style URLs
3. **Multiple Projects** - Different hostnames for different projects
4. **Cookie Isolation** - Separate cookies from other localhost projects
5. **Better Testing** - Test features that might behave differently on localhost

## Changing the Hostname

To use a different hostname:

### 1. Update .wp-env.json

```json
"config": {
  "WP_HOME": "https://your-custom-name.local:8443",
  "WP_SITEURL": "https://your-custom-name.local:8443"
}
```

### 2. Update lifecycle script

```json
"lifecycleScripts": {
  "afterStart": "... && wp-env run cli wp option update home 'https://your-custom-name.local:8443' && wp-env run cli wp option update siteurl 'https://your-custom-name.local:8443'"
}
```

### 3. Update hosts file

```
127.0.0.1 your-custom-name.local
```

### 4. Update add-hosts-entry.sh

```bash
HOSTNAME="your-custom-name.local"
```

### 5. Restart environment

```bash
npm run env:restart
```

## Troubleshooting

### "Cannot resolve hostname"

**Problem:** Browser says it can't find publicsafety.local

**Solution:**
1. Check hosts file has the entry:
   ```bash
   cat /etc/hosts | grep publicsafety
   ```
2. Verify entry format is correct (no typos)
3. Try flushing DNS cache:
   - **Linux:** `sudo systemd-resolve --flush-caches`
   - **Mac:** `sudo dscacheutil -flushcache`
   - **Windows:** `ipconfig /flushdns`

### "Redirects to localhost"

**Problem:** Site redirects from publicsafety.local to localhost

**Solution:**
1. Check database values:
   ```bash
   npm run wp:cli -- option get home
   npm run wp:cli -- option get siteurl
   ```
2. Both should show `http://publicsafety.local:8890`
3. If not, update them:
   ```bash
   npm run wp:cli -- option update home 'http://publicsafety.local:8890'
   npm run wp:cli -- option update siteurl 'http://publicsafety.local:8890'
   ```

### "SSL Certificate Error"

**Problem:** Browser shows SSL/TLS certificate warning

**Solution:** This is expected with wp-env's self-signed certificate. Click "Advanced" → "Proceed to publicsafety.local" (exact wording varies by browser).

### "Works on one browser, not another"

**Problem:** One browser can access the site, another can't

**Solution:**
1. Clear DNS cache (see above)
2. Close all browser windows and reopen
3. Try incognito/private mode
4. Check browser isn't forcing HTTPS redirects for .local domains

## Advanced: Multiple Hostnames

You can configure multiple hostnames for the same site:

**hosts file:**
```
127.0.0.1 publicsafety.local
127.0.0.1 ps2026.local
127.0.0.1 theme-dev.local
```

Then access via any:
- http://publicsafety.local:8890
- https://ps2026.local:8443
- https://theme-dev.local:8443

WordPress will use the hostname from the `WP_HOME` constant as the primary URL.

## Production Note

This hostname configuration is **for local development only**. When deploying to production:

1. The hosting provider sets the actual domain
2. WordPress automatically uses that domain
3. No hosts file needed
4. Real SSL certificate provided by host or Let's Encrypt

---

**Current Setup Summary:**

- ✅ Hostname: `publicsafety.local`
- ✅ Port: `8443` (HTTPS)
- ✅ Full URL: `http://publicsafety.local:8890`
- ✅ Auto-configured on `npm run env:start`
- ✅ Helper script provided for hosts file
- ✅ Duplicate-check in place
