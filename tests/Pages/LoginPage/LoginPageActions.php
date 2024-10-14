<?php

namespace Pages\LoginPage;

use Pages\HeaderMenuPage\Header;
use Tests\Support\AcceptanceTester;

class LoginPageActions
{
    private LoginPage $loginPage;
    private Header $header;
    public function __construct(
        LoginPage $loginPage,
        Header $header
    )
    {
        $this->loginPage = $loginPage;
        $this->header = $header;
    }

    public function login(AcceptanceTester $I): self
    {
        $I->amOnPage('/');
        $I->waitForElement($this->loginPage->getSelector('emailField'), 10);
        $I->fillField($this->loginPage->getSelector('emailField'), 'jonas.pukenas@twoday.com');
        $I->fillField($this->loginPage->getSelector('passwordField'), 'admin123');
        $I->click($this->loginPage->getSelector('submitButton'));
        $I->seeElement($this->header->getSelector('headerLogo'));
        return $this;
    }
}