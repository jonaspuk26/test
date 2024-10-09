<?php

namespace Pages;

use Tests\Support\AcceptanceTester;

class PageObject
{
    public function getSelector(string $selector)
    {
        return $this->selector[$selector];
    }

    public function getData(string $data)
    {
        return $this->data[$data];
    }


}