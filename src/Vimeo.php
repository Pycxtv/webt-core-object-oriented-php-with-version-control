<?php

namespace Onphpoint\ObjectOrientedPhp;


class Vimeo extends Video {

	private $id;

	public function __construct($name, $id) {
		parent::__construct($name);
		$this->id = $id;
	}


	function getSource(): string {
		return "Vimeo";
	}

    function getHTML(): string
    {
        return "<iframe class=\"object-fit-cover\" src=\"https://player.vimeo.com/video/{$this->id}\"  allow=\"autoplay; fullscreen; picture-in-picture\" allowfullscreen></iframe>";
    }
}