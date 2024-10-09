<?php

declare(strict_types=1);

namespace Tests\Support;

use Codeception\Module;

class CustomHelpers extends Module
{
    public function scrollIntoView($selector): void
    {
        $this->getModule('WebDriver')->executeJS("document.querySelector('$selector').scrollIntoView();");
    }
}