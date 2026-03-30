<?php declare(strict_types=1);

namespace Mermaid\Content;

use Base3\Api\IDisplay;

class MermaidDisplay implements IDisplay {

	// Implementation of IBase

	public static function getName(): string {
		return 'mermaiddisplay';
	}

	// Implementation of IOutput

	public function getOutput(string $out = 'html', bool $final = false): string {

		return 'MermaidDisplay';

	}

	public function getHelp(): string {
		return 'Display a Mermaid widget.';
	}

	// Implementation of IDisplay

	public function setData($data) {
	}
}
