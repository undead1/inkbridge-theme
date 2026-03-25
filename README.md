# Inkbridge

An AI-agent-first WordPress theme — built to be operated by AI agents, not clicked through by humans.

[WordPress.org](https://wordpress.org/themes/inkbridge/) &middot; [Download Latest Release](https://github.com/undead1/inkbridge-theme/releases/latest)

---

## What makes it AI-agent-first

**AGENTS.md** — Ships with a comprehensive, machine-readable guide that teaches AI agents how to operate the theme: rebrand colors, change fonts, add templates, create child themes, manage content. Point your AI agent at the file and it knows what to do.

**Raw HTML optimized** — Every HTML element (headings, tables, code blocks, blockquotes, lists) is pre-styled. AI-generated articles render beautifully without manual formatting.

**wpautop toggle** — One-click Customizer setting to disable WordPress's automatic paragraph formatting. Essential for AI agents publishing structured HTML via the REST API or Classic Editor.

**Design token system** — 8 semantic color slots in `theme.json`. Rebrand an entire site by changing a few values.

**Child theme architecture** — Built as a parent theme. Create a child theme per site, override colors and templates, manage a network of branded sites from a single foundation.

**No build step** — No npm, webpack, or tooling. Edit files directly. WordPress reads them.

## Quick start

```bash
# Install as parent theme
cd wp-content/themes/
unzip inkbridge.zip

# Create a child theme
mkdir my-site
cat > my-site/style.css << 'EOF'
/*
Theme Name: My Site
Template: inkbridge
*/
EOF

# Enable wpautop toggle for AI content
wp theme mod set inkbridge_disable_wpautop 1 --allow-root
```

For the full guide, see [AGENTS.md](AGENTS.md).

## Design system defaults

| Token | Purpose | Default |
|-------|---------|---------|
| `base` | Page background | `#FFFFFF` |
| `contrast` | Primary text | `#0F172A` |
| `accent-1` | Links, buttons | `#4F46E5` |
| `accent-2` | Secondary accent | `#06B6D4` |
| `accent-3` | Surfaces | `#F8FAFC` |
| `accent-4` | Muted text | `#64748B` |
| `accent-5` | Dark sections | `#1E293B` |
| `accent-6` | Borders | `#E2E8F0` |

## Theme structure

```
inkbridge-theme/
├── style.css              Design system CSS + raw HTML element styles
├── theme.json             Colors, fonts, spacing, layout tokens
├── functions.php          Enqueue, Customizer, block styles
├── AGENTS.md              AI agent operating guide
├── screenshot.png         1200x900 theme preview
├── readme.txt             WordPress.org metadata
├── templates/             Block templates (7)
├── parts/                 Template parts (2)
└── patterns/              Block patterns (6)
```

## Distribution note

The WordPress.org distribution uses folder name `inkbridge/` and text domain `inkbridge` to match the WP.org slug derived from Theme Name "Inkbridge". This repository uses `inkbridge-theme/` for backward compatibility with existing child themes on live sites.

## Requirements

- WordPress 6.7+
- PHP 8.0+

## License

GNU General Public License v2 or later. See [LICENSE](https://www.gnu.org/licenses/gpl-2.0.html).
