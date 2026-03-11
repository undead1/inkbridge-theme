=== Inkbridge Theme ===
Contributors: inkbridge
Requires at least: 6.7
Tested up to: 6.9
Requires PHP: 8.0
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

AI-Agent-First Theme — fully operated by AI agents, not humans. No manual CSS/JS/PHP editing needed. Optimized for rendering AI-generated HTML content. Use as a parent theme with a child theme per site.

== Description ==

Inkbridge Theme is a minimal, modern WordPress block theme built for AI-agent workflows:

* **AI-agent-first** — Humans never touch theme code. AI agents modify everything via file edits.
* **Raw HTML optimized** — Designed for Classic Editor content. Every HTML element (headings, tables, code blocks, blockquotes, lists) is pre-styled.
* **Design token system** — 8 semantic color slots, system font stacks, fluid typography, 8-step spacing scale. All in theme.json.
* **Child theme architecture** — Use as a parent theme. Each site gets a child theme for customization.
* **No build step** — No npm, webpack, or tooling required. Write files, WordPress reads them.
* **AGENTS.md included** — AI agent guide with file map, visual descriptions, rebranding instructions, and child theme setup.

== Installation ==

1. Upload the `inkbridge-theme` folder to `/wp-content/themes/`
2. Create a child theme for your site (see AGENTS.md for instructions)
3. Activate the child theme in WordPress admin

== Changelog ==

= 1.0.0 =
* Initial release
* Full design system in theme.json (colors, typography, spacing, layout)
* 7 block templates (index, front-page, page, single, archive, search, 404)
* 2 template parts (header, footer)
* 3 patterns (404, query loop, visual reference)
* Raw HTML content styling in style.css for Classic Editor compatibility
* AGENTS.md AI agent guide with visual descriptions and child theme instructions
