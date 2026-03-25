=== Inkbridge ===
Contributors: inkbridgemy
Requires at least: 6.7
Tested up to: 6.9
Requires PHP: 8.0
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

An AI-agent-first WordPress theme. Built to be operated by AI agents with AGENTS.md, semantic design tokens, and pre-styled HTML elements.

== Description ==

Inkbridge Theme is an AI-agent-first WordPress theme built from the ground up for AI-powered content workflows.

**What makes it AI-agent-first:**

* **AGENTS.md** — Ships with a comprehensive, machine-readable guide that teaches AI agents how to operate the theme: how to rebrand, change fonts, add templates, create child themes, and manage content. Point your AI agent at the file and it knows what to do.
* **Raw HTML optimized** — AI-generated content is structured HTML, not plain text. Inkbridge pre-styles every HTML element (headings, tables, code blocks, blockquotes, lists) so AI-generated articles render beautifully without any manual formatting.
* **wpautop toggle** — One-click Customizer setting to disable WordPress's automatic paragraph formatting. Essential when AI agents publish structured HTML via the REST API or Classic Editor.
* **Design token system** — 8 semantic color slots in theme.json. AI agents rebrand an entire site by changing a few values — no CSS knowledge required.
* **Child theme architecture** — Built as a parent theme. AI agents create a child theme per site, override colors and templates, and manage a network of branded sites from a single foundation.
* **No build step** — No npm, webpack, or tooling. AI agents edit files directly. WordPress reads them.

**Also great for humans:**

* Clean, minimal design with fluid responsive typography
* System font stacks — zero web font downloads, fast load times
* 7 block templates, 2 template parts, 6 block patterns
* Accessible: focus styles, skip-to-content link, semantic HTML
* Works with Block Editor, Classic Editor, or the REST API

Whether you're building an AI content pipeline, managing multiple branded sites with AI agents, or just want a clean block theme that stays out of your way — Inkbridge is the foundation.

== Installation ==

1. Upload the `inkbridge-theme` folder to `/wp-content/themes/`
2. Activate the theme in Appearance > Themes
3. For AI-agent workflows: create a child theme and point your agent at AGENTS.md
4. For manual use: customize via Appearance > Editor (Site Editor)

== Frequently Asked Questions ==

= What does "AI-agent-first" mean? =

It means this theme was designed to be operated by AI agents (like Claude, GPT, or any LLM-based coding assistant) rather than humans using the WordPress admin UI. The theme ships with AGENTS.md — a structured guide that AI agents read to understand the theme's file structure, design system, and customization workflows.

= Can I still use this theme without AI agents? =

Absolutely. Inkbridge is a fully functional WordPress block theme. You can customize it through the Site Editor, Customizer, or by manually editing theme files. The AI-agent features are additive — they don't limit manual usage.

= What is the "Disable automatic paragraphs" option? =

Found under Appearance > Customize > Inkbridge Options. When enabled, it removes WordPress's wpautop filter so that structured HTML content (from AI agents, the REST API, or Classic Editor) renders exactly as written without unwanted paragraph tags.

= Is this theme meant to be used directly or as a parent? =

Both. Activate it directly for a clean, minimal site. For deeper customization — especially when managing multiple branded sites with AI agents — create a child theme per site. AGENTS.md documents the entire child theme workflow.

= Does this theme require any plugins? =

No. It works with a vanilla WordPress installation. It pairs well with Classic Editor for raw HTML workflows and any AI content generation plugin.

== Changelog ==

= 1.0.0 =
* Initial release
* AI-agent-first architecture with AGENTS.md guide
* Full design token system in theme.json (8 color slots, fluid typography, 8-step spacing)
* 7 block templates (index, front-page, page, single, archive, search, 404)
* 2 template parts (header, footer)
* 6 block patterns (404, query loop, visual reference, footer, index heading, search form)
* Pre-styled raw HTML elements for AI-generated content
* Optional wpautop toggle via Customizer
* Child theme architecture for multi-site AI workflows

== Copyright ==

Inkbridge Theme is distributed under the terms of the GNU GPL v2 or later.

Inkbridge Theme bundles no third-party resources. All code is original.

Screenshot image is used for theme preview purposes and is original work,
licensed under the same GPL v2 or later license as the theme.
