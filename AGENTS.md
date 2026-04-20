# AGENTS.md

## Purpose
This document provides AI coding assistants with essential project context, standards, and workflows to ensure consistent, high-quality contributions.

## Project Overview
**Project Name:** Seiler 2026 WordPress Theme  
**Description:** Division-agnostic WordPress FSE block theme for Seiler Instrument & Mfg. Co., Inc. Features full site editing, custom block patterns, WooCommerce integration, and Splide Carousel for dynamic content.  
**Tech Stack:** WordPress (6.4+, FSE), PHP 8.0+, Bun/Node, @wordpress/scripts, @seilerinstrument/wp-build-tools, Playwright, wp-env  
**Primary Language(s):** PHP, JavaScript, CSS

## Development Workflow

### Git Branching Model (TBD)
We follow the **Trunk-Based Development (TBD)** model:

- **Main Branch (`main`)**: Production-ready code. All commits must be deployable.
- **Feature Branches**: Branches off `main` for new features or fixes
  - Naming convention: `feature/description`, `fix/description`, `chore/description`
  - Merge directly to `main` after testing
  - Branches remain active as long as needed
- **Small Team Workflow**: Direct commits to `main` acceptable for minor changes; use feature branches for larger work

### Git Worktree for Parallel Work
When multiple agent sessions or developers need to work on different branches simultaneously on the same machine, use `git worktree`:

```bash
# Create a new worktree for a feature branch
git worktree add ../project-feature-name feature/feature-name

# Or create worktree and new branch in one command
git worktree add -b feature/new-feature ../project-new-feature

# List all worktrees
git worktree list

# Remove a worktree when done
git worktree remove ../project-feature-name
```

**Benefits:**
- Work on multiple branches without switching contexts or stashing changes
- Each worktree has its own working directory but shares the same `.git` repository
- Avoid conflicts when multiple AI agents or developers work simultaneously
- Test different features side-by-side

### Commit Guidelines
- Use clear, descriptive commit messages following conventional commits format:
  - `feat: add user authentication`
  - `fix: resolve database connection timeout`
  - `docs: update API documentation`
  - `refactor: simplify validation logic`
- Keep commits atomic and focused on a single concern
- Reference issue numbers when applicable: `fix: resolve #123`

### CRITICAL: Git Safety for AI Agents

**⚠️ NEVER use these commands without explicit user approval:**
- `git reset --hard` - **DESTROYS uncommitted work** - FORBIDDEN without user confirmation
- `git clean -fd` - Deletes untracked files - FORBIDDEN without user confirmation
- `git checkout -- .` - Discards changes - FORBIDDEN without user confirmation

**✅ REQUIRED workflow when making changes:**
1. Make changes incrementally (don't try to do everything at once)
2. **COMMIT AFTER EACH LOGICAL UNIT OF WORK** - Do not batch multiple changes into one commit
3. Test after each commit
4. If something breaks, you can safely reset to last commit
5. If you need to try different approaches, use `git stash` or create a temporary branch

**Example of CORRECT workflow:**
```bash
# 1. Rename files
git mv old.py new.py
git commit -m "refactor: Rename old.py to new.py"

# 2. Update code
# ... make changes to new.py ...
git add new.py
git commit -m "feat: Add new functionality to new.py"

# 3. Update docs
# ... make changes to README.md ...
git add README.md
git commit -m "docs: Update README with new script name"
```

**Example of INCORRECT workflow (causes data loss):**
```bash
# DO NOT DO THIS!
git mv old.py new.py
# ... make extensive changes to multiple files ...
# ... encounter an issue ...
git reset --hard HEAD  # ❌ DESTROYS ALL UNCOMMITTED WORK!
```

**If you need to experiment or try different approaches:**
- Create a feature branch: `git checkout -b feature/experiment`
- Or use git stash: `git stash push -m "WIP: trying different approach"`
- Later retrieve: `git stash pop`

**Commit frequency:**
- Commit EARLY and commit OFTEN
- Each commit should be one logical change
- Better to have 10 small commits than 1 giant commit
- If you're editing 3+ files for different purposes, that's 3 commits minimum

## Documentation Standards

Markdown should follow the [markdownlint rules](https://github.com/DavidAnson/markdownlint/blob/main/README.md#rules--aliases)

### README.md
Maintain a comprehensive README.md with the following sections:

- **Project Overview**: Brief description and purpose
- **Prerequisites**: Required software, versions, and system requirements
- **Installation**: Step-by-step setup instructions
- **Configuration**: Environment variables and configuration options
- **Usage**: How to run the project locally and in production
- **Architecture**: High-level system architecture (if applicable)

Update README.md whenever:
- Adding new features that affect setup or usage
- Changing prerequisites or dependencies
- Modifying configuration requirements
- Adding new commands or scripts

### CONTRIBUTING.md
Create a CONTRIBUTING.md file with guidelines for contributors:

- **Code of Conduct**: Expected behavior and community standards
- **How to Contribute**: Steps for submitting contributions
- **Branch Naming**: Feature branch conventions
- **Commit Message Format**: Conventional commits format and examples
- **Pull Request Process**: If applicable for the project
- **Testing Requirements**: How to run tests and coverage expectations
- **Code Review Process**: What to expect during review

### LICENSE
Include a LICENSE file in the project root:

- Choose an appropriate license for your project (MIT, Apache 2.0, GPL, proprietary, etc.)
- Include full license text in the LICENSE file
- Reference the license in README.md

### CHANGELOG.md
We follow the Common Changelog specification: https://common-changelog.org/

**Format:**
- File MUST be named `CHANGELOG.md` and start with `# Changelog`
- Releases use: `## X.Y.Z - YYYY-MM-DD` (latest first)
- Do NOT use an `[Unreleased]` section

**Categories:**
- Each release groups changes under these headings (in order):
  - `### Changed`
  - `### Added`
  - `### Removed`
  - `### Fixed`

**Entries:**
- One line per change
- Imperative mood (start with a verb: Add, Fix, Remove, etc.)
- Include a reference (PR, issue, or commit link)
- Format:
  - `- <Change> (<reference>)`

**Rules:**
- Breaking changes first (prefix with `**Breaking:**`)
- Focus on user-visible impact
- Keep entries concise and consistent

### Code Documentation
- Document all public APIs, functions, and complex logic
- Keep inline comments clear and purposeful
- Use JSDoc, PHPDoc, docstrings, or language-appropriate documentation formats
- Update documentation when adding features or changing functionality

## Code Standards

### Style Guide
- **Linter/Formatter (PHP):** PHPCS via `@seilerinstrument/wp-build-tools` (`bunx seiler-phpcs src`, auto-fix with `bunx seiler-phpcbf`)
- **Linter/Formatter (JS/CSS):** `@wordpress/scripts` ESLint config
- **Configuration:** See `.phpcs.xml.dist` (when present), `package.json` `seiler.wpBuildTools` block
- Pre-commit git hook (installed via `seiler-install-hooks`) runs PHP syntax + PHPCS on staged files
- Auto-fix: `bunx seiler-phpcbf`

### Testing Requirements
- **Unit/integration:** PHPUnit via `bunx seiler-phpunit` (not yet configured for this theme — `seiler-phpunit-setup` available when needed)
- **E2E:** Playwright in `tests/` — run with `bun run test`
- **CI runs:** PHP syntax check, PHPCS (non-blocking), PHPUnit (when configured), `seiler-validate-build`, Playwright (when `tests/**/*.test.js` present)
- Pre-push git hook runs PHPUnit (when configured) + build validation

## Security Standards

All code must follow OWASP security principles and guidelines. Review these resources during development:

### Core Security References
- **[OWASP Top 10](https://owasp.org/www-project-top-ten/)**: Critical security risks to web applications
- **[OWASP Proactive Controls](https://top10proactive.owasp.org/)**: Essential security techniques for developers
- **[Secure Product Design](https://cheatsheetseries.owasp.org/cheatsheets/Secure_Product_Design_Cheat_Sheet.html)**: Design principles including least privilege and defense-in-depth
- **[Infrastructure as Code Security](https://cheatsheetseries.owasp.org/cheatsheets/Infrastructure_as_Code_Security_Cheat_Sheet.html)**: Security practices for IaC
- **[Error Handling](https://cheatsheetseries.owasp.org/cheatsheets/Error_Handling_Cheat_Sheet.html)**: Secure error handling practices
- **[Secure Coding Practices](https://devguide.owasp.org/en/12-appendices/01-implementation-dos-donts/02-secure-coding)**: Implementation dos and don'ts
- **[Cryptographic Practices](https://devguide.owasp.org/en/12-appendices/01-implementation-dos-donts/03-cryptographic-practices/)**: Proper use of cryptography

### Security Practices

**Dependency Management:**
- Check for package vulnerabilities regularly using tools appropriate for your stack:
  - **Node.js**: `npm audit`, `yarn audit`, or Snyk
  - **PHP**: `composer audit` (Composer 2.4+) or roave/security-advisories
  - **Python**: `pip-audit`, Safety, or Snyk
  - **Java**: OWASP Dependency-Check, Snyk
  - **.NET**: `dotnet list package --vulnerable`
- Address critical and high-severity vulnerabilities immediately
- Keep dependencies up to date with security patches
- Review dependency licenses and maintenance status

**Code Security:**
- Apply principle of least privilege for all access controls
- Implement defense-in-depth with multiple security layers
- Validate and sanitize all input data
- Use parameterized queries to prevent SQL injection
- Implement proper authentication and authorization
- Never hardcode secrets, credentials, or API keys
- Use environment variables or secure secret management systems
- Handle errors securely without exposing sensitive information
- Log security events appropriately (see OWASP Error Handling guide)

**Infrastructure & Deployment:**
- Use secure defaults for all configurations
- Encrypt data in transit (HTTPS/TLS) and at rest
- Implement proper session management
- Configure security headers (CSP, HSTS, X-Frame-Options, etc.)
- Disable unnecessary services and features
- Keep all systems and containers updated with security patches
- Scan container images for vulnerabilities before deployment
- Implement rate limiting and DDoS protection where appropriate

**Development Process:**
- Perform threat modeling for new features and architecture changes
- Conduct security reviews for code handling authentication, authorization, or sensitive data
- Use static analysis security testing (SAST) tools in your development workflow
- Test for OWASP Top 10 vulnerabilities
- Never commit sensitive data to version control
- Use `.gitignore` to exclude secrets, credentials, and environment files

## Environment Setup

### Installation
```bash
# Node/JS dependencies (workspace root)
bun install

# PHP dependencies (theme)
composer install -d src/

# Git hooks (pre-commit + pre-push via wp-build-tools)
bunx seiler-install-hooks
```

### Environment Variables
This project uses `.wp-env.json` for local WordPress environment configuration (wp-env). There is no `.env` file; WordPress config is set in `.wp-env.json`'s `config` block.

- `.wp-env.json` — committed, tracked config (shared defaults)
- `.wp-env.override.json` — gitignored, per-developer override
- `.wp-env.home.json` — gitignored, per-developer home-dir override

GitHub Actions uses the repo secret `SEILER_CLASSIC_PAT` (classic PAT with `read:packages` scope) to install `@seilerinstrument/wp-build-tools` from GitHub Packages.

### Running Locally
```bash
# Start the wp-env WordPress container
bun run env:start

# Build block assets (webpack)
bun run build:blocks

# Open the local site in your browser
bun run browser:open

# Run E2E tests
bun run test
```

Local URL: `https://localhost:8443` (test env on 8444). See `bun run env:url` for current URLs.

## AI Assistant Guidelines

When working on this project, AI assistants should follow these practices:

**Testing & Validation:**
- Build and run all tests to catch errors before committing
- Ensure automated testing covers security best practices
- Run the project locally to identify runtime errors
- Test integration points when changes affect multiple components
- If you cannot test locally, clearly document what needs to be tested
- Do not POST or otherwise publish anything to a production or public instance

**Development Approach:**
- Ask for clarification when requirements are ambiguous or incomplete
- Use standardized project structure and naming conventions
- Follow semantic versioning (MAJOR.MINOR.PATCH) as documented at [semver.org](https://semver.org)
- If uncommitted changes become large (500+ lines or multiple files), ask about breaking into smaller, atomic commits

**Code Quality:**
- Write clear, self-documenting code with meaningful variable and function names
- Add comments only when the "why" isn't obvious from the code itself
- Ensure code is consistent with existing project patterns and style

## Project Constraints & Standards

**Browser/Platform Compatibility:**
- Support all modern, evergreen browsers (Chrome, Firefox, Safari, Edge)
- Reference [Can I Use](https://caniuse.com/usage-table) for browser usage statistics and feature support
- Specify any legacy browser requirements in project-specific documentation

**Accessibility:**
- Adhere to WCAG 2.1 Level AA standards for web applications where applicable
- Use semantic HTML, proper ARIA labels, and keyboard navigation
- Test with screen readers when implementing UI components

**Performance & Scalability:**
- Render-blocking stylesheet count should be monitored — WP Core + WooCommerce + Events Calendar plugins contribute 20+ render-blocking CSS files on typical pages
- Fluid typography is enabled in `theme.json` (`"fluid": true`) — prefer adjusting font-size presets over hand-coded clamps

**Database Migrations:**
- N/A for a theme. Theme activation hooks (`after_switch_theme`) in `src/functions.php` handle one-time setup (default navigation menus, default logo).

## Decision Documentation

**Architecture Decision Records (ADR):**
For significant architectural decisions, consider documenting them using ADRs following the format at [Architecture Decision Record](https://github.com/joelparkerhenderson/architecture-decision-record). This is recommended for:
- Major technology choices (frameworks, databases, services)
- Significant changes to system architecture or design patterns
- Security-related decisions
- Integration approaches with external systems

ADRs are optional and most valuable for medium-to-large projects or teams. Store ADRs in an `adr/` directory with descriptive names like `choose-database.md` or `implement-authentication.md`.

**Technical Debt:**
- Tracked in GitHub Issues on the repo
- Tag issues with `tech-debt`, `bug`, `enhancement`, or `security` labels

**Task Management:**
- GitHub Issues for the repository
- Reference issue numbers in commit messages: `fix: resolve header overflow (#12)`

## Resources
- **Repository:** https://github.com/bgoewert-seiler/wp-theme-seiler-2026
- **Issue Tracker:** https://github.com/bgoewert-seiler/wp-theme-seiler-2026/issues
- **CI/CD:** https://github.com/bgoewert-seiler/wp-theme-seiler-2026/actions
- **Releases:** https://github.com/bgoewert-seiler/wp-theme-seiler-2026/releases
- **Build tools:** [@seilerinstrument/wp-build-tools](https://github.com/SeilerInstrument/wp-build-tools) (GitHub Packages)

## Contact
- **Maintainer:** Brennan Goewert &lt;bgoewert@seilerinst.com&gt;
- **Designer:** Garry Dennison
- **Organization:** Seiler Instrument & Mfg. Co., Inc.
