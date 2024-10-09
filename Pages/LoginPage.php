<?php

namespace Pages;

class LoginPage extends PageObject
{
    public array $selector =
        [
            'emailField' => 'input[type="email"]',
            'passwordField' => 'input[type="password"]',
            'submitButton' => 'button[type="submit"]',
        ];
}