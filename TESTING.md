# Testing & Verification Checklist

Comprehensive testing checklist for the Public Safety 2026 WordPress theme.

## Pre-Installation Checks

- [ ] All required theme files are present:
  - [ ] `style.css` with complete theme header
  - [ ] `functions.php` with theme setup
  - [ ] `theme.json` with valid JSON syntax
  - [ ] `README.md` with documentation
  - [ ] All template files in `/templates/`
  - [ ] All template parts in `/parts/`
  - [ ] All patterns in `/patterns/`
  - [ ] Asset files in `/assets/`

- [ ] File permissions are correct:
  - [ ] Files: 644
  - [ ] Directories: 755

- [ ] No syntax errors in PHP files
- [ ] JSON files validate (theme.json)

## Installation Testing

### Fresh WordPress Installation (Recommended)

- [ ] WordPress 6.1+ installed
- [ ] PHP 7.4+ confirmed
- [ ] Theme uploaded to `/wp-content/themes/`
- [ ] Theme appears in **Appearance → Themes**
- [ ] Theme activates without errors
- [ ] No PHP errors in debug log
- [ ] Admin notice for Splide Carousel appears
- [ ] Admin notice can be dismissed

### Activation Checks

- [ ] Site doesn't show errors or warnings
- [ ] WordPress admin remains accessible
- [ ] Default WordPress blocks work
- [ ] Block editor loads correctly
- [ ] Site Editor opens (**Appearance → Editor**)

## Template Testing

### Front Page (Homepage)

- [ ] `front-page.html` template loads
- [ ] Header displays correctly
- [ ] Footer displays correctly
- [ ] Content area renders properly
- [ ] Can insert patterns without errors

### Index Template

- [ ] `index.html` displays post loop
- [ ] Post excerpts show correctly
- [ ] Featured images display
- [ ] Pagination works
- [ ] No posts message appears when appropriate

### Page Template

- [ ] `page.html` displays page title
- [ ] Page content renders
- [ ] Full-width blocks work
- [ ] Sidebar-free layout confirmed

### Single Post Template

- [ ] `single.html` displays correctly
- [ ] Featured image shows (if set)
- [ ] Post meta displays (date, author)
- [ ] Post content renders properly
- [ ] Tags and categories show
- [ ] Post navigation (prev/next) works
- [ ] Comments section displays
- [ ] Comment form works

### Archive Template

- [ ] `archive.html` displays archive title
- [ ] Term description shows (if set)
- [ ] Post list displays correctly
- [ ] Category/tag archives work
- [ ] Date archives work
- [ ] Author archives work

### Custom Templates

- [ ] `blank.html` shows content only (no header/footer)
- [ ] `full-width.html` displays full-width content
- [ ] Both templates are selectable in page editor

## Template Parts Testing

### Header

- [ ] Site logo displays
- [ ] Logo links to homepage
- [ ] Primary navigation renders
- [ ] Navigation items are editable
- [ ] Submenu dropdowns work (if used)
- [ ] Utility buttons display
- [ ] Mobile menu toggle appears on small screens
- [ ] Mobile menu opens/closes correctly
- [ ] Header is sticky on scroll
- [ ] Shopping cart icon (WooCommerce - if active)

### Footer

- [ ] Logo displays
- [ ] Company info text renders
- [ ] Social media links work
- [ ] Social icons display correctly
- [ ] Quick Links column displays
- [ ] Legal links column displays
- [ ] Contact information column displays
- [ ] All footer links are editable
- [ ] Separator line appears
- [ ] Copyright notice displays
- [ ] Footer background color correct

## Block Pattern Testing

### Hero Slider Pattern

- [ ] Pattern appears in inserter under "Public Safety - Hero Sections"
- [ ] Inserts without errors
- [ ] Cover block displays background image
- [ ] Heading text is visible
- [ ] Paragraph text is visible
- [ ] Both buttons render correctly
- [ ] Button links are editable
- [ ] Slider note displays below
- [ ] Pattern is mobile-responsive

### Three Feature Columns Pattern

- [ ] Pattern appears under "Public Safety - Features"
- [ ] Inserts without errors
- [ ] Blue background displays
- [ ] Three columns render equally
- [ ] Icons display (placeholder images)
- [ ] All three headings display
- [ ] All three descriptions display
- [ ] Text is white on blue background
- [ ] Columns stack on mobile

### Industries Grid Pattern

- [ ] Pattern appears under "Public Safety - Content Sections"
- [ ] Inserts without errors
- [ ] Section heading displays
- [ ] 8 industry cards display (4x2 grid)
- [ ] Each card shows image background
- [ ] Each card shows overlay heading
- [ ] Hover effects work on cards
- [ ] Grid becomes 2x4 on tablet
- [ ] Grid becomes 1x8 on mobile

### CTA Banner Pattern

- [ ] Pattern appears under "Public Safety - Call to Action"
- [ ] Inserts without errors
- [ ] Full-width background displays
- [ ] Main heading displays prominently
- [ ] Description text is readable
- [ ] Both CTA buttons display
- [ ] Orange/gold accent colors show
- [ ] Section has appropriate padding

### Partner Logos Pattern

- [ ] Pattern appears under "Public Safety - Content Sections"
- [ ] Inserts without errors
- [ ] Section heading displays
- [ ] Description text appears
- [ ] 8 logo placeholders display (2 rows × 4 columns)
- [ ] Logos are grayscale by default
- [ ] Logos turn color on hover
- [ ] Slider note displays
- [ ] Grid adapts to smaller screens

### Testimonials Pattern

- [ ] Pattern appears under "Public Safety - Testimonials"
- [ ] Inserts without errors
- [ ] Section heading displays
- [ ] Three testimonial cards display
- [ ] Quote text is readable
- [ ] Customer names display
- [ ] Company/title displays
- [ ] Light gray card backgrounds show
- [ ] Cards have proper spacing
- [ ] Cards stack on mobile
- [ ] Slider note displays

### Contact Section Pattern

- [ ] Pattern appears under "Public Safety - Content Sections"
- [ ] Inserts without errors
- [ ] Dark background displays
- [ ] Left column (60%) displays form placeholder
- [ ] Right column (40%) displays quick links
- [ ] White text on dark background is readable
- [ ] Form placeholder box has white background
- [ ] Quick links are editable
- [ ] Subscribe button displays
- [ ] Section is mobile-responsive

## Site Editor Testing

### Global Styles

- [ ] Can access **Styles** panel
- [ ] Color palette displays all 8 theme colors
- [ ] Can change colors and see updates
- [ ] Typography settings work
- [ ] Font size presets display correctly
- [ ] Can adjust spacing values
- [ ] Layout settings (content/wide width) work
- [ ] Changes apply globally across site

### Navigation Editor

- [ ] Can edit header navigation
- [ ] Can add/remove menu items
- [ ] Can create submenus
- [ ] Changes save correctly
- [ ] Navigation updates on front-end

### Template Customization

- [ ] Can edit any template
- [ ] Changes save without errors
- [ ] Can revert to default
- [ ] Custom edits persist after save

## Responsive Design Testing

Test at these breakpoints:

### Desktop (1920px, 1440px, 1280px)

- [ ] All content displays correctly
- [ ] No horizontal scrolling
- [ ] Images scale appropriately
- [ ] Typography is readable
- [ ] Spacing looks balanced
- [ ] Navigation fits in header
- [ ] Columns maintain layout

### Tablet (1024px, 768px)

- [ ] Content adapts gracefully
- [ ] Images resize appropriately
- [ ] Typography remains readable
- [ ] Utility buttons may wrap
- [ ] Some columns become 2-column
- [ ] Navigation may collapse
- [ ] Touch targets are adequate

### Mobile (414px, 375px, 360px)

- [ ] Mobile menu toggle appears
- [ ] Mobile menu opens/closes
- [ ] Content is single column
- [ ] Text is readable (not too small)
- [ ] Images don't overflow
- [ ] Buttons are tappable (44px+ target)
- [ ] Spacing is appropriate
- [ ] No horizontal scroll

### Small Mobile (320px)

- [ ] Everything still functional
- [ ] Text doesn't break layout
- [ ] Images scale down
- [ ] Buttons remain usable

## Browser Testing

Test in these browsers:

- [ ] **Chrome** (latest) - Desktop
- [ ] **Chrome** - Mobile (iOS/Android)
- [ ] **Firefox** (latest) - Desktop
- [ ] **Safari** (latest) - Desktop
- [ ] **Safari** - Mobile (iOS)
- [ ] **Edge** (latest) - Desktop
- [ ] **Samsung Internet** - Mobile (optional)

Check for:
- [ ] Consistent appearance across browsers
- [ ] CSS features work (Grid, Flexbox, CSS Variables)
- [ ] Transitions and animations work
- [ ] No JavaScript errors in console

## Accessibility Testing

### Keyboard Navigation

- [ ] Can tab through all links
- [ ] Can tab through navigation
- [ ] Can activate buttons with Enter/Space
- [ ] Focus indicators are visible
- [ ] Focus order is logical
- [ ] Can close mobile menu with Esc key
- [ ] No keyboard traps

### Screen Reader Testing

Test with NVDA (Windows) or VoiceOver (Mac):

- [ ] Headings are announced correctly
- [ ] Navigation landmarks are present
- [ ] Images have alt text
- [ ] Buttons have descriptive labels
- [ ] Form fields have labels
- [ ] Skip to content link works

### Color Contrast

- [ ] Text on white background meets 4.5:1 ratio
- [ ] Text on blue background meets 4.5:1 ratio
- [ ] Text on dark gray background meets 4.5:1 ratio
- [ ] Button text is readable
- [ ] Link colors have sufficient contrast

Use tools:
- [ ] WAVE browser extension
- [ ] axe DevTools
- [ ] Lighthouse accessibility audit

### ARIA and Semantics

- [ ] Proper heading hierarchy (h1, h2, h3)
- [ ] No duplicate h1 tags on page
- [ ] Semantic HTML5 elements used
- [ ] ARIA labels where appropriate
- [ ] No ARIA abuse/overuse

## Plugin Integration Testing

### Splide Carousel

- [ ] Install Splide Carousel plugin
- [ ] Plugin activates without conflicts
- [ ] Can create carousel from patterns
- [ ] Hero slider works
- [ ] Partner logos carousel works
- [ ] Testimonials slider works
- [ ] Carousel controls are accessible

### Contact Form 7

- [ ] Install Contact Form 7
- [ ] Create contact form
- [ ] Insert form shortcode in Contact Section pattern
- [ ] Form displays correctly
- [ ] Form submits successfully
- [ ] Form validation works
- [ ] Success message displays
- [ ] Emails are received

### WooCommerce (Optional)

- [ ] Install WooCommerce
- [ ] Run WooCommerce setup wizard
- [ ] Theme styles apply to WooCommerce pages
- [ ] Product pages display correctly
- [ ] Cart page works
- [ ] Checkout page works
- [ ] Shop page displays products
- [ ] Cart icon appears in header (if implemented)

## Performance Testing

### Page Speed

- [ ] Homepage loads in under 3 seconds
- [ ] Other pages load quickly
- [ ] No render-blocking resources (or minimal)
- [ ] Images are optimized
- [ ] CSS/JS files are minified (in production)

Use tools:
- [ ] Google PageSpeed Insights (score 80+)
- [ ] GTmetrix (Grade A/B)
- [ ] WebPageTest

### Resource Loading

- [ ] CSS loads correctly
- [ ] JavaScript loads correctly
- [ ] Fonts load without FOIT (Flash of Invisible Text)
- [ ] Images lazy-load (if implemented)
- [ ] No 404 errors in console
- [ ] No unnecessary HTTP requests

## SEO Testing

- [ ] Page titles display correctly
- [ ] Meta descriptions can be set (via plugin)
- [ ] Heading hierarchy is correct
- [ ] Images have alt attributes
- [ ] Links have descriptive text
- [ ] Schema markup is valid (if implemented)
- [ ] Sitemap generates correctly
- [ ] Robots.txt is configured

## Standards Compliance Testing

### Theme Check Plugin

- [ ] Install Theme Check plugin
- [ ] Run Theme Check on theme
- [ ] No REQUIRED errors
- [ ] Address RECOMMENDED warnings
- [ ] Address INFO notices

### WordPress Coding Standards

- [ ] PHP files follow WordPress coding standards
- [ ] Functions are properly prefixed
- [ ] No deprecated functions used
- [ ] All text is translatable
- [ ] Proper escaping and sanitization

### Validation

- [ ] HTML validates (W3C Validator)
- [ ] CSS validates (W3C CSS Validator)
- [ ] JSON files are valid (theme.json)

## Security Testing

- [ ] No PHP errors or warnings
- [ ] No SQL injection vulnerabilities
- [ ] All user inputs are sanitized
- [ ] All outputs are escaped
- [ ] No XSS vulnerabilities
- [ ] File uploads are validated (if applicable)
- [ ] No exposed sensitive information

## Content Testing

### Text Content

- [ ] No lorem ipsum in production
- [ ] All placeholder text makes sense
- [ ] Grammar and spelling checked
- [ ] Links go to correct destinations
- [ ] Email addresses are valid
- [ ] Phone numbers are formatted correctly

### Images

- [ ] Placeholder images noted in documentation
- [ ] Instructions provided for replacing images
- [ ] Image dimensions specified
- [ ] Alt text guidance provided

## Documentation Review

- [ ] README.md is complete
- [ ] Installation instructions are clear
- [ ] Pattern descriptions are accurate
- [ ] Customization guide is helpful
- [ ] File structure is documented
- [ ] Credits and license included
- [ ] Changelog is up to date

## Final Checks

- [ ] All tasks in task list completed
- [ ] No console errors on any page
- [ ] No PHP errors in debug log
- [ ] Theme info displays correctly in admin
- [ ] Screenshot.png created (or instructions provided)
- [ ] All patterns work as intended
- [ ] Responsive design verified
- [ ] Accessibility standards met
- [ ] Performance is acceptable
- [ ] Documentation is complete

## Post-Launch Monitoring

After deploying to production:

- [ ] Monitor error logs for issues
- [ ] Check Google Search Console for errors
- [ ] Verify forms are receiving submissions
- [ ] Test on actual user devices
- [ ] Gather user feedback
- [ ] Monitor page load times
- [ ] Check mobile usability in GSC

## Known Issues / Limitations

Document any known issues or planned enhancements:

1. **Screenshot.png** - Not included, instructions provided
2. **Placeholder images** - Using placehold.co URLs, need replacement
3. **Splide Carousel integration** - Requires manual setup per documentation
4. **Contact forms** - Require third-party plugin installation

## Testing Sign-Off

- **Tester Name:** ___________________________
- **Test Date:** ___________________________
- **WordPress Version:** ___________________________
- **PHP Version:** ___________________________
- **Theme Version:** 1.0.0
- **Result:** Pass ☐ | Fail ☐ | Needs Work ☐

**Notes:**

---

**Testing Recommendations:**

1. Test on a staging site before production
2. Use a fresh WordPress installation for initial testing
3. Test with default WordPress content (sample posts)
4. Test with real content before launch
5. Have multiple people test on different devices
6. Use automated testing tools to supplement manual testing
7. Keep a log of all issues found and resolved

**Priority Testing:**

If time is limited, prioritize:

1. Installation and activation
2. Homepage display with patterns
3. Mobile responsiveness
4. Accessibility basics
5. Browser compatibility
6. Standards compliance (Theme Check)
