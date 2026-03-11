# Inkbridge Theme — AI Agent Guide

**IMPORTANT: This is a PARENT theme. NEVER edit these files for site-specific changes.**
Create a child theme for each site. See "Child Theme Usage" section below.
If no child theme exists yet for your site, create one before making any changes.

## File Map

```
inkbridge-theme/
├── style.css        → Theme metadata + raw HTML content CSS rules
├── theme.json       → Design system: colors, fonts, spacing, layout, block styles
├── functions.php    → Enqueues style.css. Do not add complexity here.
├── AGENTS.md        → This file
├── templates/
│   ├── index.html       → Blog listing (uses hidden-query-loop pattern)
│   ├── front-page.html  → Static front page (renders page content full-width)
│   ├── page.html        → Generic page (constrained width)
│   ├── single.html      → Single post (optimized for AI-generated content)
│   ├── archive.html     → Category/tag/date archives
│   ├── search.html      → Search results
│   └── 404.html         → Not found page
├── parts/
│   ├── header.html      → Site header (site title + navigation)
│   └── footer.html      → Site footer (site title + tagline, dark background)
└── patterns/
    ├── hidden-404.php           → 404 page content
    ├── hidden-query-loop.php    → Post listing with pagination
    └── hidden-visual-reference.php → Element showcase (screenshot this for visual context)
```

## How to Rebrand

Edit `theme.json` → `settings.color.palette`. There are 8 color slots:

| Slug | Purpose | Default |
|------|---------|---------|
| `base` | Page background | `#FFFFFF` |
| `contrast` | Primary text | `#0F172A` |
| `accent-1` | Links, buttons, primary accent | `#4F46E5` |
| `accent-2` | Secondary accent | `#06B6D4` |
| `accent-3` | Alt background / surfaces | `#F8FAFC` |
| `accent-4` | Muted text / captions | `#64748B` |
| `accent-5` | Dark sections / footer bg | `#1E293B` |
| `accent-6` | Borders / separators | `#E2E8F0` |

Change the `color` values. All templates and style.css reference these via `var:preset|color|<slug>`.

**Important:** Also update the button hover color in `styles.elements.button.:hover.color.background` and `styles.elements.link.:hover.color.text` — these are hardcoded hex values.

## How to Change Fonts

Edit `theme.json` → `settings.typography.fontFamilies`. Two font slots:

| Slug | Purpose | Default |
|------|---------|---------|
| `body` | All body text, headings | System UI stack |
| `mono` | Code blocks, preformatted | System mono stack |

**To use a system font:** Replace the `fontFamily` string.

**To use a custom web font:**
1. Create `assets/fonts/<font-name>/` directory
2. Place `.woff2` file(s) there
3. Add a `fontFace` array to the font family entry:
```json
{
    "fontFamily": "\"Inter\", system-ui, sans-serif",
    "name": "Body",
    "slug": "body",
    "fontFace": [
        {
            "fontFamily": "Inter",
            "fontWeight": "300 800",
            "fontStyle": "normal",
            "fontDisplay": "swap",
            "src": ["file:./assets/fonts/inter/Inter-Variable.woff2"]
        }
    ]
}
```

## Font Size Scale

| Slug | Size | Use |
|------|------|-----|
| `small` | 0.875rem (14px) | Captions, metadata, fine print |
| `medium` | 1rem–1.125rem | Body text (default) |
| `large` | 1.125rem–1.375rem | h4, large body |
| `x-large` | 1.5rem–2rem | h3 |
| `xx-large` | 2rem–3rem | h2, post titles |
| `xxx-large` | 2.5rem–4rem | h1, hero headlines |

Sizes with ranges are fluid (responsive via `clamp()`).

## Spacing Scale

| Slug | Size | Name |
|------|------|------|
| `10` | 4px | 3XS |
| `20` | 8px | 2XS |
| `30` | 16px | XS |
| `40` | 24px | S |
| `50` | clamp(24px, 4vw, 40px) | M |
| `60` | clamp(32px, 6vw, 64px) | L |
| `70` | clamp(48px, 8vw, 96px) | XL |
| `80` | clamp(64px, 10vw, 128px) | 2XL |

Reference in templates: `var:preset|spacing|50`
Reference in CSS: `var(--wp--preset--spacing--50)`

## Layout Widths

- `contentSize`: 720px — main content column (posts, pages)
- `wideSize`: 1200px — wide alignment max width

## Visual Reference Page

A showcase page exists at `patterns/hidden-visual-reference.php` containing every styled element. To use it:
1. Create a WordPress page
2. Use the pattern slug `inkbridge-theme/hidden-visual-reference` or import via the helper in functions.php (see below)
3. Screenshot the rendered page to build visual context

The reference page includes: color palette swatches, heading hierarchy (h1–h6), body text with inline elements, unordered and ordered lists (with nesting), blockquotes, pullquotes, code blocks (inline and block), tables, buttons, separators, spacing scale, and a full simulated AI-generated article with raw HTML.

## Content Rendering

Post content uses Classic Editor (raw HTML, not block markup). WordPress applies `wpautop()` for paragraph wrapping.

### Visual Description of Each Element

**Headings (h1–h6):**
- Weight 600 (semi-bold), line-height 1.2 (tight), letter-spacing -0.02em (slightly condensed)
- Margin: 1.5em above (creates clear section breaks), 0.5em below (stays connected to content)
- h1: 2.5–4rem (fluid), the largest text on the page
- h2: 2–3rem (fluid), main section dividers
- h3: 1.5–2rem (fluid), subsections
- h4: 1.125–1.375rem (fluid), minor subsections
- h5: 1–1.125rem, UPPERCASE, letter-spacing 0.05em — label-style heading
- h6: 0.875rem (14px), UPPERCASE, letter-spacing 0.1em — smallest label heading

**Body text (p):**
- Font: system UI sans-serif, 1–1.125rem fluid, weight 400, line-height 1.7
- Color: contrast (#0F172A) — near-black on white background
- Max content width: 720px — comfortable 65–80 character line length

**Strong/bold:**
- Weight 600 (not browser default 700) — slightly lighter, more refined

**Links (a):**
- Color: accent-1 (#4F46E5, indigo) — no underline by default
- Hover: darkened indigo (#4338CA) + underline appears
- Underline thickness: 1px, offset 0.15em from text baseline

**Inline code:**
- Font: system monospace stack
- Size: 0.875em (slightly smaller than surrounding text)
- Background: accent-3 (#F8FAFC, very light gray)
- Padding: 0.15em top/bottom, 0.4em left/right
- Border-radius: 4px (subtle rounding)

**Code blocks (pre > code):**
- Font: system monospace stack, size small (0.875rem/14px), line-height 1.7
- Background: accent-3 (#F8FAFC, very light gray)
- Border: 1px solid accent-6 (#E2E8F0, light gray)
- Border-radius: 8px (rounded corners)
- Padding: 1.5rem (24px) all sides
- Overflow: horizontal scroll for long lines

**Blockquotes:**
- Left border: 4px solid accent-1 (#4F46E5, indigo)
- Background: accent-3 (#F8FAFC, very light gray)
- Padding: 1rem top/bottom, 1.5rem left/right
- Margin: 1.5em above and below
- Font size: large (1.125–1.375rem)
- Font style: normal (not italic)

**Pullquotes:**
- Font size: x-large (1.5–2rem) — prominently large
- Weight: 400 (regular — elegance through size, not boldness)
- Border: 2px solid accent-1 (#4F46E5) top and bottom only
- Padding: 24px top and bottom

**Unordered lists (ul):**
- Line-height: 1.7, padding-left: 1.5em
- Item spacing: 0.5rem between items
- Bullet markers: colored accent-1 (#4F46E5, indigo)
- Nested lists: reduced spacing (0.25rem margin)

**Ordered lists (ol):**
- Same spacing and line-height as unordered
- Number markers: colored accent-1 (#4F46E5, indigo)

**Tables:**
- Full width (100%), collapsed borders
- Header row (th): accent-3 background (#F8FAFC), weight 600, left-aligned
- Cells: 0.75rem vertical / 1rem horizontal padding
- Cell borders: 1px solid accent-6 (#E2E8F0) on bottom only
- Hover: entire row gets accent-3 background
- Font size: small (0.875rem/14px) — compact data
- Overflow: horizontal scroll on narrow viewports

**Images:**
- Max-width: 100%, auto height (responsive)
- Border-radius: 8px (rounded corners)

**Horizontal rules (hr):**
- No visible line — replaced with 1px solid accent-6 (#E2E8F0) top border
- Margin: 2em above and below

**Buttons:**
- Background: accent-1 (#4F46E5, indigo), text: white
- Hover: darkened (#4338CA)
- Padding: 0.875rem vertical, 2rem horizontal
- Border-radius: 8px
- Font: medium size, weight 600

**Captions/metadata text:**
- Font size: small (0.875rem/14px)
- Color: accent-4 (#64748B, muted gray)
- Line-height: 1.5

## How to Add a Template

1. Create `templates/<name>.html`
2. Use block markup. Start with header part, end with footer part:
```html
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group">
    <!-- wp:post-content /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->
```

## How to Add a Pattern

1. Create `patterns/<name>.php`
2. Add PHP header comment:
```php
<?php
/**
 * Title: Pattern Name
 * Slug: inkbridge-theme/<name>
 * Inserter: no
 */
?>
<!-- block markup here -->
```
3. Reference in templates: `<!-- wp:pattern {"slug":"inkbridge-theme/<name>"} /-->`

## Child Theme Usage

This theme is designed to be used as a **parent theme**. Each site gets a child theme for site-specific customization.

**How to create a child theme:**

1. Create a new directory: `wp-content/themes/<site-name>/`
2. Create `style.css` with `Template: inkbridge-theme` in the header
3. Create `theme.json` with only the overridden values (merges with parent)
4. Optionally add `templates/`, `parts/`, `patterns/` directories for site-specific overrides
5. Create an `AGENTS.md` in the child that references this parent guide

**Merge behavior:**
- `theme.json`: Child values override parent. **Important:** `settings.color.palette` replaces the entire array — include all 8 color slots if overriding any.
- `templates/`, `parts/`: Same-name file in child completely overrides parent. New files are additive.
- `patterns/`: Same-name file in child overrides parent. New files are additive. Use the child theme slug in pattern headers.
- `style.css`: Parent style.css loads first, then child. Child rules override parent.
- `functions.php`: Child loads before parent. Only create if the site needs site-specific PHP.

**Do NOT edit parent files for site-specific changes.** All customization belongs in the child theme.
