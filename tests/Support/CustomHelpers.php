<?php

declare(strict_types=1);

namespace Tests\Support;

use Codeception\Module;
use Tests\Support\AcceptanceTester;


class CustomHelpers extends Module
{
    public function scrollIntoView($selector): void
    {
        $this->getModule('WebDriver')->executeJS("document.querySelector('$selector').scrollIntoView();");
    }

    public function findSelectorByText(array $selectors, string $text)
    {
        foreach ($selectors as $selector) {
            if (strpos($selector, $text) !== false) {
                return $selector;
            }
        }
        return null;
    }
}