# Mermaid

BASE3 plugin for integrating the Mermaid JavaScript library as a local asset.

The plugin currently provides the Mermaid browser bundle and a minimal local test page.

## Purpose

This plugin adds the Mermaid library to the BASE3 plugin structure so diagrams can be rendered locally without external CDN dependencies.

Typical use cases:

- render Mermaid diagrams in BASE3 outputs
- keep Mermaid as a local project asset
- test Mermaid independently inside the plugin

## Structure

```text
plugin/Mermaid/
├── src/
│   └── MermaidPlugin.php
└── assets/
    └── mermaid/
        ├── mermaid.min.js
        └── index.html
```

## Included files

### `src/MermaidPlugin.php`

Plugin bootstrap / integration class for BASE3.

### `assets/mermaid/mermaid.min.js`

Bundled Mermaid browser build.

This is the runtime file that is loaded by the browser.

### `assets/mermaid/index.html`

Small standalone test page for checking whether Mermaid works correctly in the browser.

## Local test

Open `assets/mermaid/index.html` in a browser or serve the plugin directory through your local web environment.

The example page loads `mermaid.min.js` from the same directory and renders a simple sample diagram.

## Notes

* The plugin currently uses the prebuilt Mermaid bundle.
* No external CDN is required.
* The repository source tree of Mermaid is not included.
* Only the runtime asset needed for browser usage is kept.

## Updating Mermaid

To update Mermaid, replace:

```text
assets/mermaid/mermaid.min.js
```

with a newer compatible browser build.

After updating, verify the result with:

```text
assets/mermaid/index.html
```

## License

This plugin contains Mermaid as a bundled third-party library.

Please review the Mermaid project license for redistribution details.
