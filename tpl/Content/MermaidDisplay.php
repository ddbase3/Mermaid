<div class="mermaid">
	flowchart TD
		A[Start] --> B{Entscheidung}
		B -->|Ja| C[Weiter]
		B -->|Nein| D[Abbruch]
		C --> E[Ende]
		D --> E
</div>

<script>
	function initMermaidWidget() {
		(async function() {
			await AssetLoader.loadScriptAsync('<?php echo $this->_['resolve']('plugin/Mermaid/assets/mermaid/mermaid.min.js'); ?>');
			const mermaidConfig = {
				startOnLoad: true
			};
			mermaid.initialize(mermaidConfig);
		})();
	}

	if (document.readyState !== 'loading') {
		initMermaidWidget();
	} else {
		document.addEventListener('DOMContentLoaded', initMermaidWidget);
	}

	window.addEventListener('mermaid:init', initMermaidWidget);
</script>
