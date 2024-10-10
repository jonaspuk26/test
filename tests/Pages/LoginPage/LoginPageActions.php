<?php

namespace Pages\LoginPage;

use Pages\HeaderMenuPage\Header;
use Tests\Support\AcceptanceTester;

class LoginPageActions
{
    public function __construct()
    {
        $this->loginPage = new LoginPage();
        $this->header = new Header();
    }

    public function login(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->waitForElement($this->loginPage->getSelector('emailField'), 10);
        $I->fillField($this->loginPage->getSelector('emailField'), 'jonas.pukenas@twoday.com');
        $I->fillField($this->loginPage->getSelector('passwordField'), 'admin123');
        $I->click($this->loginPage->getSelector('submitButton'));
        $I->seeElement($this->header->getSelector('headerLogo'));
    }
}