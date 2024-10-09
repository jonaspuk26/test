<?php

namespace Pages;

use Codeception\Constraint\Page;

class LoginPage extends PageObject
{
    public array $selector =
        [
            'emailField' => 'input[type="email"]',
            'passwordField' => 'input[type="password"]',
            'submitButton' => 'button[type="submit"]',
        ];
}