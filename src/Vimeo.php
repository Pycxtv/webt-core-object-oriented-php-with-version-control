<?php

namespace Onphpoint\ObjectOrientedPhp;


class Vimeo extends Video {

    private $id;

    public function __construct($name, $id)
    {
        parent::__construct($name);
        $this->id = $id;
    }


    function getSource()
    {
        return "Vimeo";
    }

    function getHTML()
    {
        return "<iframe src=\"https://player.vimeo.com/video/{$this->id}\" width=\"640\" height=\"268\" frameborder=\"0\" allow=\"autoplay; fullscreen; picture-in-picture\" allowfullscreen></iframe>";
    }
}