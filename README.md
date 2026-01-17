# Temple Seva Portal

A WordPress Full Site Editing (FSE) block theme designed for temple seva portals. This theme leverages the latest WordPress features to provide a flexible, block-based editing experience.

## Features

- **Full Site Editing**: Customize every aspect of your site using the WordPress block editor.
- **Block Styles**: Enhanced styling for core blocks like buttons, quotes, navigation, and search.
- **Responsive Design**: Optimized for all devices with mobile-first approach.
- **Custom Patterns**: Pre-designed block patterns for common layouts.
- **Theme Variations**: Multiple style variations available.
- **Performance Optimized**: Minified CSS and efficient asset loading.

## Requirements

- WordPress 6.3 or higher
- PHP 7.4 or higher
- No build tools required for basic usage

## Installation

1. Download or clone this theme into your WordPress themes directory (`wp-content/themes/`).
2. Activate the theme from the WordPress admin dashboard under **Appearance > Themes**.
3. Use the Site Editor (**Appearance > Editor**) to customize your site.

## Development

### Tooling

This theme includes optional development tools. Requires Node.js 14.15.0+ and npm.

Install dependencies:
```bash
npm install
composer install
```

### CSS Development

- Edit human-readable CSS files in `assets/css/`.
- Run `gulp` to minify CSS files.

### Folder Structure

- `assets/`: Images, JavaScript, and CSS files.
- `inc/`: Filters, block variations, registered block styles.
- `parts/`: HTML template parts.
- `patterns/`: Block pattern examples.
- `styles/`: Global style variations.
- `templates/`: HTML block templates.

## License

GPL v2 or later - see [license.txt](license.txt) for details.

## Author

S P Pramodh
