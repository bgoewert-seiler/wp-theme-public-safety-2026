# Using Bun with Public Safety 2026 Theme

Bun is a fast JavaScript runtime and package manager that's fully compatible with this project.

## Quick Start

```bash
# Install dependencies (faster than npm)
bun install

# Start WordPress environment
bun run env:start

# Open site in browser
bun run browser:open
```

## Running Tests

```bash
# Install Playwright browsers (one time)
bun run test:install

# Run all E2E tests
bun run test:e2e

# Run tests with visible browser
bun run test:e2e:headed

# Run tests with Playwright UI (best for debugging)
bun run test:e2e:ui

# Run only header tests
bun run test:header
```

## All Available Scripts

### WordPress Environment
- `bun run env:start` - Start wp-env
- `bun run env:stop` - Stop wp-env
- `bun run env:restart` - Restart and update
- `bun run env:reset` - Destroy and recreate
- `bun run env:cache:clear` - Clear WordPress cache

### Development
- `bun run browser:open` - Open site in default browser
- `bun run wp:cli` - Run WP-CLI commands
- `bun run wp:shell` - Open bash shell in container

### Testing
- `bun run test:e2e` - Run all E2E tests
- `bun run test:e2e:headed` - Run with visible browser
- `bun run test:e2e:ui` - Open Playwright UI
- `bun run test:header` - Run header tests only

### Theme Management
- `bun run theme:activate` - Activate theme
- `bun run theme:check` - Check theme for errors
- `bun run theme:info` - Get theme information

## Why Bun?

- **Faster installs**: 2-3x faster than npm
- **Faster script execution**: Built-in speed optimizations
- **Better DX**: Cleaner output, better error messages
- **Full compatibility**: Works with all npm packages

## Compatibility

All scripts work exactly the same with Bun:
- ✅ @wordpress/env
- ✅ @playwright/test
- ✅ All npm scripts
- ✅ Node.js modules

## Switching Between npm and Bun

You can use both interchangeably:

```bash
# These are equivalent
npm install          → bun install
npm run test:e2e     → bun run test:e2e
npm run env:start    → bun run env:start
```

The project will work with either npm or Bun - choose whichever you prefer!
