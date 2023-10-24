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
<iframe class="object-fit-contain" src="https://www.youtube-nocookie.com/embed/{$this->id}"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
HTML;

	}

}