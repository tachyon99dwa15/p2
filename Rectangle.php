<?php

namespace Project2;

class Rectangle
{
    # Properties
    private $length;
    private $width;

    # Methods

    public function __construct()
    {
        $this->$length = 0;
        $this->$width = 0;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setLength($length)
    {
        $this->length = $length;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }
}
