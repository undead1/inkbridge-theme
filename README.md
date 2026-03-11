# Inkbridge Theme

AI-agent-first WordPress block theme. Designed to be fully operated by AI agents — humans never touch theme code. Optimized for rendering AI-generated raw HTML content.

## Features

- **AI-agent-first** — AI agents modify everything via file edits. `AGENTS.md` included with file map, visual descriptions, and rebranding instructions.
- **Raw HTML optimized** — Every HTML element (headings, tables, code blocks, blockquotes, lists) is pre-styled. `wpautop` is disabled — content must include proper HTML tags.
- **Design token system** — 8 semantic color slots, system font stacks, fluid typography, 8-step spacing scale. All in `theme.json`.
- **Parent theme architecture** — Use as a parent theme. Each site gets a child theme for branding and site-specific customization.
- **No build step** — No npm, webpack, or tooling. Write files, WordPress reads them.

## Requirements

- WordPress 6.7+
- PHP 8.0+

## Installation

**Option A — Upload ZIP:**

1. Download `inkbridge-theme-1.0.0.zip` from [Releases](https://github.com/undead1/inkbridge-theme/releases)
2. Go to **Appearance > Themes > Add New > Upload Theme**
3. Upload and activate

**Option B — Manual:**

```bash
cd wp-content/themes/
git clone https://github.com/undead1/inkbridge-theme.git
```

## Quick Start

This is a **parent theme**. Create a child theme for each site:

```
wp-content/themes/your-site/
├── style.css       ← Template: inkbridge-theme in header
├── theme.json      ← Override colors, fonts (merges with parent)
├── functions.php   ← Optional, site-specific PHP
└── AGENTS.md       ← Reference parent guide
```

See `AGENTS.md` in the parent theme for the full child theme setup guide.

## Design System

### Color Palette (8 slots)

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

Override all 8 in your child theme's `theme.json` (`settings.color.palette` replaces the entire array).

### Typography

- **Body:** System UI sans-serif, fluid 1–1.125rem, weight 400, line-height 1.7
- **Headings:** Weight 600, line-height 1.2, letter-spacing -0.02em
- **Code:** System monospace stack

### Layout

- Content width: **720px** | Wide: **1200px**

## Templates

| Template | Purpose |
|----------|---------|
| `front-page.html` | Static front page (full-width content) |
| `single.html` | Blog post (title, meta, featured image, content, tags) |
| `page.html` | Generic page (constrained width) |
| `index.html` | Blog listing with pagination |
| `archive.html` | Category/tag/date archives |
| `search.html` | Search results |
| `404.html` | Not found |

## Key Behaviors

### wpautop disabled

WordPress `wpautop()` is removed from `the_content` and `the_excerpt`. Content **must** include proper HTML tags (`<p>`, `<br>`, etc.). This prevents WordPress from mangling structured HTML.

### Block gap

The parent theme sets `blockGap: "1.2rem"` for template-level spacing. Child themes using section-based layouts should set `styles.spacing.blockGap` to `"0"` in their `theme.json`. WordPress generates block gap as inline `<style>` from `theme.json` — CSS overrides in `style.css` will not work.

### Raw HTML content styling

All common HTML elements are styled under `.wp-block-post-content` in `style.css` with explicit vertical margins. This ensures AI-generated raw HTML renders identically to block editor content.

## File Map

```
inkbridge-theme/
├── style.css             ← Theme metadata + raw HTML content CSS
├── theme.json            ← Design system (colors, fonts, spacing, layout)
├── functions.php         ← Disables wpautop, enqueues styles
├── AGENTS.md             ← AI agent guide
├── README.md             ← This file
├── readme.txt            ← WordPress.org metadata
├── templates/            ← 7 block templates
├── parts/                ← Header + footer
└── patterns/             ← 404, query loop, visual reference
```

## License

GPLv2 or later. See [LICENSE](http://www.gnu.org/licenses/gpl-2.0.html).
