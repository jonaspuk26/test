<?php

namespace Pages\HeaderMenuPage;

use Pages\PageObject;

class Header extends PageObject
{
    public array $selector =
        [
            'headerLogo' => '.logo-container',
            'shopsHeader' => '[title="Shops"]',
            'shopsHeaderMenu' => '[href="/shops//details"]',
        ];
}