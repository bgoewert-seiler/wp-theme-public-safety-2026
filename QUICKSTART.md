# Quick Start Guide

Get your Public Safety 2026 theme up and running in 5 minutes.

## Step 1: Install the Theme (2 minutes)

### Option A: Upload as ZIP
1. Compress the entire `public-safety-2026` folder into a ZIP file
2. In WordPress admin, go to **Appearance → Themes → Add New**
3. Click **Upload Theme**
4. Choose your ZIP file and click **Install Now**
5. Click **Activate**

### Option B: FTP/File Manager
1. Upload the entire `public-safety-2026` folder to `/wp-content/themes/`
2. In WordPress admin, go to **Appearance → Themes**
3. Find "Public Safety 2026" and click **Activate**

## Step 2: Install Recommended Plugin (1 minute)

You'll see an admin notice recommending Splide Carousel:

1. Click the link in the notice
2. Search for "Splide Carousel"
3. Click **Install Now**, then **Activate**
4. (Optional: Dismiss the notice if you prefer)

## Step 3: Create Your Homepage (2 minutes)

1. Go to **Pages → Add New**
2. Title it "Home"
3. In the editor, click the **+** (Add Block) button
4. Switch to the **Patterns** tab
5. Insert these patterns in order:
   - Hero Slider (from "Public Safety - Hero Sections")
   - Three Feature Columns (from "Public Safety - Features")
   - Industries Grid (from "Public Safety - Content Sections")
   - Call to Action Banner (from "Public Safety - Call to Action")
   - Testimonials (from "Public Safety - Testimonials")
   - Partner Logos (from "Public Safety - Content Sections")
   - Contact Section (from "Public Safety - Content Sections")
6. Click **Publish**

## Step 4: Set as Homepage

1. Go to **Settings → Reading**
2. Select "A static page" under "Your homepage displays"
3. Choose "Home" from the dropdown
4. Click **Save Changes**

## Step 5: Customize Basic Settings

1. Go to **Appearance → Editor**
2. Click **Styles** (top right)
3. Adjust colors if desired
4. Click **Save**

## You're Done!

Visit your site to see the homepage with all patterns.

---

## Next Steps (Optional)

### Replace Placeholder Content

1. Edit your homepage
2. Click on any text to edit it
3. Replace sample text with your content
4. Update button links
5. Click **Update**

### Add Your Logo

1. Go to **Appearance → Editor**
2. Click on **Header** in the template parts
3. Click on the logo area
4. Upload your logo image
5. Click **Save**

### Customize Navigation

1. In the Site Editor, click **Navigation**
2. Edit menu items:
   - Click on any item to edit
   - Use **+** to add new items
   - Drag to reorder
3. Click **Save**

### Add Real Images

1. Upload images to **Media Library**
2. Edit your homepage
3. Click on placeholder images
4. Click **Replace**
5. Choose your image
6. Click **Update**

### Install Contact Form Plugin

1. Install **Contact Form 7** or **WPForms**
2. Create a new form
3. Copy the shortcode
4. Edit the Contact Section pattern
5. Replace the placeholder with your shortcode

---

## Common First-Time Tasks

### Change Site Colors

**Appearance → Editor → Styles → Colors**

The theme uses:
- Primary Blue (#0066B3) - Main brand color
- Secondary Orange (#FF8C00) - Accent color
- Accent Gold (#FFB800) - Highlights

Click any color to change it.

### Change Fonts

**Appearance → Editor → Styles → Typography**

Choose from:
- Open Sans (default)
- Roboto
- System Font

### Add More Pages

1. **Pages → Add New**
2. Create: About, Services, Contact, etc.
3. Add to navigation menu

### Create a Blog

Your blog is automatically at `/blog/` or wherever you set "Posts page" in **Settings → Reading**.

### Set Up Footer

1. **Appearance → Editor**
2. Click **Template Parts → Footer**
3. Edit text, links, and contact info
4. Add your social media URLs
5. Click **Save**

---

## Troubleshooting

**Patterns not showing?**
- Check that all files in `/patterns/` directory are present
- Make sure you're looking in the correct pattern categories

**Styles not applying?**
- Clear browser cache (Ctrl+Shift+R or Cmd+Shift+R)
- Clear WordPress cache if using a caching plugin
- Check that `/assets/css/theme.css` file exists

**Mobile menu not working?**
- Check browser console for JavaScript errors
- Make sure `/assets/js/theme.js` is loading
- Try deactivating other plugins to check for conflicts

**Theme looks broken?**
- Make sure you're using WordPress 6.1 or higher
- Verify PHP version is 7.4 or higher
- Check for PHP errors in **Tools → Site Health**

---

## Getting Help

- Read the full **README.md** for detailed documentation
- Check **TESTING.md** for comprehensive testing procedures
- See **SCREENSHOT-INSTRUCTIONS.md** for theme preview image
- Review pattern descriptions in the block inserter

---

## Pro Tips

1. **Work in the Site Editor** for global changes (colors, fonts, layout)
2. **Edit individual pages** for content-specific changes
3. **Use patterns** as starting points - you can customize them after inserting
4. **Save custom templates** if you create variations you like
5. **Test on mobile** frequently - use browser DevTools device emulation
6. **Install an SEO plugin** early (Yoast, Rank Math, etc.)
7. **Set up caching** for better performance (WP Super Cache, W3 Total Cache)
8. **Optimize images** before uploading (TinyPNG, Squoosh)

---

**Estimated Time to Full Site:** 1-2 hours with content ready

Good luck! 🚀
