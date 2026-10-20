# Clean Slate

A minimal block theme (Full Site Editing) for WordPress 6.6+. Use it as a starting point for custom themes.

## Structure

```
clean-slate/
├── style.css          # Theme header + optional custom CSS
├── theme.json         # Design tokens: layout, colors, typography, spacing
├── functions.php      # Minimal setup + asset enqueue
├── templates/         # index, single, page, archive, search, 404
├── parts/             # header, footer
├── patterns/          # Add block patterns here
└── assets/            # css/ and js/ for custom files
```

## Starting a new theme from this

1. Copy/clone this repo into a new folder.
2. Rename the folder, then search and replace:
   - `clean-slate` → `your-theme-slug` (text domain, handles)
   - `clean_slate_` → `your_theme_` (PHP function prefix)
   - `CLEAN_SLATE_` → `YOUR_THEME_` (constant)
   - `Clean Slate` → `Your Theme Name`
3. Update the header in `style.css`.
4. Add a `screenshot.png` (1200×900) for the theme preview.

## Install

Zip the theme folder (the folder itself should be at the root of the zip) and upload via **Appearance → Themes → Add New → Upload Theme**, or drop the folder into `wp-content/themes/`.

## License

GPL-2.0-or-later
