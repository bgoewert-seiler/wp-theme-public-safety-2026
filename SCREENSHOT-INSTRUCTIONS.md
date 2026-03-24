# Screenshot Instructions

## Required File: screenshot.png

WordPress requires a theme screenshot to display in the **Appearance → Themes** admin panel.

### Specifications

- **Filename:** `screenshot.png` (must be exactly this name)
- **Location:** Root directory of the theme
- **Dimensions:** 1200px wide × 900px tall
- **Format:** PNG (recommended) or JPG
- **File size:** Keep under 1MB for faster loading

### What to Include

The screenshot should show a composite view of your homepage design, featuring:

1. **Header** with logo and navigation
2. **Hero section** with main headline
3. **Feature boxes** (the three-column blue section)
4. **Industries grid** or another prominent section

### How to Create

#### Option 1: Screenshot Your Actual Homepage
1. Set up your homepage with all patterns
2. Use a browser screenshot tool to capture the full page
3. Crop to 1200x900px showing the best parts of the design
4. Save as `screenshot.png` in the theme root directory

#### Option 2: Create a Mockup
1. Use a design tool like Figma, Photoshop, or Canva
2. Create a 1200x900px canvas
3. Add representative sections from your theme
4. Export as `screenshot.png`

#### Option 3: Use a Screenshot Tool
Recommended tools:
- **Firefox DevTools** - Built-in screenshot feature (Shift+F2, then type `screenshot --fullpage`)
- **Chrome Extensions** - Full Page Screen Capture, Awesome Screenshot
- **Desktop Apps** - Snagit, Greenshot, ShareX

### Tips

- Show the most visually appealing parts of your theme
- Make sure text is readable
- Include distinctive design elements
- Use actual content, not lorem ipsum if possible
- Ensure colors are vibrant and true to your design

### Temporary Solution

If you need to launch without a custom screenshot, you can:

1. Create a simple 1200x900px PNG with your theme name
2. Use a solid color background with white text
3. Add the theme name "Public Safety 2026" in a large font

### Example Creation with ImageMagick (if installed):

```bash
convert -size 1200x900 xc:#0066B3 \
  -font Arial -pointsize 72 -fill white \
  -gravity center -annotate +0+0 "Public Safety 2026\nWordPress Theme" \
  screenshot.png
```

### Example Creation with PHP GD:

```php
<?php
$image = imagecreatetruecolor(1200, 900);
$blue = imagecolorallocate($image, 0, 102, 179);
$white = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $blue);

$font = 5; // Built-in font
imagestring($image, $font, 450, 430, "Public Safety 2026", $white);
imagestring($image, $font, 450, 450, "WordPress Theme", $white);

imagepng($image, 'screenshot.png');
imagedestroy($image);
?>
```

## Important Notes

- WordPress will not display the theme properly in the admin without this file
- The screenshot is user-facing - make it look professional
- Update the screenshot whenever you make significant design changes
- The screenshot doesn't affect front-end functionality, only admin appearance

## Placeholder Message

Until you create a proper screenshot, visitors to **Appearance → Themes** will see a gray placeholder box. The theme will still function perfectly - this is purely cosmetic for the admin panel.

---

**Priority:** Medium - The theme works without it, but it should be added before releasing to others.
