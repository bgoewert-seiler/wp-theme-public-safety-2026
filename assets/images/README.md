# Placeholder Images

This directory is intended for theme images and assets.

## Required Images

To complete the theme, add the following images to this directory:

### Hero Backgrounds (1920x800px)
- `hero-1.jpg` - First hero slide background
- `hero-2.jpg` - Second hero slide background
- `hero-3.jpg` - Third hero slide background

Suggested content: Public safety vehicles, emergency response teams, training scenarios, technology in action

### Industry Card Images (600x400px)
- `emergency-response.jpg`
- `law-enforcement.jpg`
- `fire-services.jpg`
- `forensics.jpg`
- `incident-management.jpg`
- `communications.jpg`
- `training.jpg`
- `dispatch.jpg`

Suggested content: Action shots of each respective service area

### Feature Icons (80x80px, SVG preferred)
- `icon-trusted-partner.svg` - Checkmark or badge icon
- `icon-complete-support.svg` - Star or support icon
- `icon-customer-focused.svg` - Heart or person icon

These can be created in any graphic design tool or sourced from icon libraries like:
- Font Awesome
- Heroicons
- Material Icons
- Feather Icons

### Partner Logos (300x150px, PNG with transparency)
- `partner-1.png` through `partner-8.png`

Use actual partner logos or generic placeholder logos until real logos are available.

### CTA Banner Backgrounds (1920x600px)
- `cta-background.jpg` - Background for promotional banners

### Screenshot (1200x900px)
- `screenshot.png` - Theme preview image showing homepage design

This appears in **Appearance → Themes** in WordPress admin.

## Image Optimization

Before uploading images to WordPress:

1. **Compress images** - Use tools like:
   - TinyPNG (https://tinypng.com)
   - ImageOptim (Mac)
   - Squoosh (https://squoosh.app)

2. **Use appropriate formats:**
   - JPG for photos
   - PNG for images with transparency
   - SVG for icons and logos
   - WebP for modern browsers (with fallbacks)

3. **Resize to exact dimensions** - Oversized images waste bandwidth

4. **Use descriptive filenames** - `emergency-response-team.jpg` not `IMG_1234.jpg`

5. **Add alt text** - Always include descriptive alt text for accessibility

## Current Image Usage

The theme patterns currently use placeholder images from placehold.co:

```
https://placehold.co/[width]x[height]/[bgcolor]/[textcolor]?text=[text]
```

### To replace placeholders:

1. Upload your images to WordPress Media Library
2. Edit the pattern files in `/patterns/`
3. Replace placeholder URLs with your image URLs from Media Library
4. Or edit patterns directly in the WordPress block editor after inserting them

## WordPress Image Sizes

WordPress automatically creates multiple sizes of uploaded images:

- **Thumbnail** - 150x150px (cropped)
- **Medium** - 300x300px (max)
- **Large** - 1024x1024px (max)
- **Full** - Original size

You can define custom image sizes in `functions.php`:

```php
add_image_size( 'hero-image', 1920, 800, true );
add_image_size( 'industry-card', 600, 400, true );
```

## Tips

- Use high-quality images that represent your brand
- Maintain consistent styling across all images
- Consider using a professional photographer for key images
- Stock photos can be sourced from:
  - Unsplash (https://unsplash.com)
  - Pexels (https://pexels.com)
  - Pixabay (https://pixabay.com)

## Notes

All patterns are designed to work with or without custom images. Placeholder URLs will display until replaced with your own images.
