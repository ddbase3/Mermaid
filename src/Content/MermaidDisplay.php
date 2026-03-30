<?php declare(strict_types=1);

namespace Mermaid\Content;

use Base3\Api\IAssetResolver;
use Base3\Api\IDisplay;
use Base3\Api\IMvcView;

class MermaidDisplay implements IDisplay {

	public function __construct(
		private readonly IMvcView $view,
		private readonly IAssetResolver $assetResolver
	) {}

	// Implementation of IBase

	public static function getName(): string {
		return 'mermaiddisplay';
	}

	// Implementation of IOutput

	public function getOutput(string $out = 'html', bool $final = false): string {
		$this->view->setPath(DIR_PLUGIN . 'Mermaid');
		$this->view->setTemplate('Content/MermaidDisplay.php');
		$this->view->assign('resolve', fn($src) => $this->assetResolver->resolve($src));
		return $this->view->loadTemplate();
	}

	public function getHelp(): string {
		return 'Display a Mermaid widget.';
	}

	// Implementation of IDisplay

	public function setData($data) {
	}
}
