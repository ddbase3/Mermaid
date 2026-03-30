<div class="mermaid">
<?php echo $this->_['mermaid']; ?>
</div>

<script>
	function initMermaidWidget() {
		(async function() {
			const src = '<?php echo $this->_['resolve']('plugin/Mermaid/assets/mermaid/mermaid.min.js'); ?>';

			try {
				if (!window.__mermaid_load_promise__) {
					window.__mermaid_load_promise__ = AssetLoader.loadScriptAsync(src).then(function() {
						if (!window.mermaid) {
							throw new Error('Mermaid nach dem Laden nicht gefunden');
						}
						return window.mermaid;
					});
				}

				const mermaid = await window.__mermaid_load_promise__;
				const mermaidConfig = {
					startOnLoad: false
				};

				if (!window.__mermaid_initialized__) {
					mermaid.initialize(mermaidConfig);
					window.__mermaid_initialized__ = true;
				}

				await mermaid.run({
					querySelector: '.mermaid'
				});
			} catch (e) {
				console.error('Mermaid-Init fehlgeschlagen:', e);
			}
		})();
	}

	if (document.readyState !== 'loading') {
		initMermaidWidget();
	} else {
		document.addEventListener('DOMContentLoaded', initMermaidWidget, { once: true });
	}

	window.addEventListener('mermaid:init', initMermaidWidget);
</script>
