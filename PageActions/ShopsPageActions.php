<?php

namespace PageActions;

use Pages\Header;
use Pages\LoginPage;
use Pages\ShopsPage;
use Tests\Support\AcceptanceTester;
use Tests\Support\CustomHelpers;

class ShopsPageActions
{
    public function __construct()
    {
        $this->header = new Header();
        $this->shopsPage = new ShopsPage();
        $this->loginPage = new LoginPageActions();
    }

    public function goToShopsPage(AcceptanceTester $I)
    {
        $this->loginPage->login($I);
        $I->waitForElement($this->header->getSelector('shopsHeader'));
        $I->click($this->header->getSelector('shopsHeader'));
        $I->click($this->header->getSelector('shopsHeaderMenu'));
        $I->seeElement($this->shopsPage->getSelector('addNewShopButton'));
    }

    public function addNewShop(AcceptanceTester $I)
    {
        $I->fillField(
            $this->shopsPage->getSelector('shopNameField'),
            $this->shopsPage->getData('shopName'));
        $I->fillField(
            $this->shopsPage->getSelector('descriptionField'),
            $this->shopsPage->getData('description'));
        $I->fillField(
            $this->shopsPage->getSelector('receiptHeaderField'),
            $this->shopsPage->getData('receiptHeader'));
        $I->fillField(
            $this->shopsPage->getSelector('receiptFooterField'),
            $this->shopsPage->getData('receiptFooter'));
        $I->fillField(
            $this->shopsPage->getSelector('phoneNumberField'),
            $this->shopsPage->getData('phoneNumber'));
        $I->fillField(
            $this->shopsPage->getSelector('addressField'),
            $this->shopsPage->getData('address'));
        $I->fillField(
            $this->shopsPage->getSelector('zipField'),
            $this->shopsPage->getData('zipCode'));
        $I->fillField(
            $this->shopsPage->getSelector('cityField'),
            $this->shopsPage->getData('city'));
        $I->fillField(
            $this->shopsPage->getSelector('countryField'),
            $this->shopsPage->getData('country'));
        $I->fillField(
            $this->shopsPage->getSelector('orgNrField'),
            $this->shopsPage->getData('orgNr'));
        $I->fillField(
            $this->shopsPage->getSelector('latitudeField'),
            $this->shopsPage->getData('latitude'));
        $I->fillField(
            $this->shopsPage->getSelector('longitudeField'),
            $this->shopsPage->getData('longitude'));
        $I->scrollIntoView($this->shopsPage->getSelector('saveShopButton'));
        $I->waitForElementClickable($this->shopsPage->getSelector('saveShopButton'), 15);
        $I->click($this->shopsPage->getSelector('saveShopButton'));
        $I->see('testShop', $this->shopsPage->getSelector('shopsSearchResultsText'));
    }
}