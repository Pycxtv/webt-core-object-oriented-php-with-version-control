<?php

namespace Onphpoint\ObjectOrientedPhp;

class YouTube extends Video {

	public string $id;

	public function __construct($name, $id) {
		parent::__construct($name);
		$this->id = $id;
	}


	function getSource(): string {
		return "YouTube";
	}

	function getHTML(): string {
		return <<<"HTML"
<iframe width="420" height="236" src="https://www.youtube-nocookie.com/embed/{$this->id}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
HTML;

	}

}