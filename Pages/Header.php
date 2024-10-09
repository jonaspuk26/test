<?php

namespace Pages;

class Header extends PageObject
{
    public array $selector =
        [
            'headerLogo' => '[class="logo-container"]',
            'shopsHeader' => '[title="Shops"]',
            'shopsHeaderMenu' => '[href="/shops//details"]',
        ];
}