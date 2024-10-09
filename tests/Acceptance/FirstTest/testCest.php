<?php

namespace Acceptance\FirstTest;

use PageActions\LoginPageActions;
use Pages\Header;
use PageActions\ShopsPageActions;
use Tests\Support\AcceptanceTester;
use tests\Support\CustomHelpers;

class testCest
{
    private $shopsPage;

    function _before(): void
    {
        $this->shopsPage = new ShopsPageActions();
    }

    public function testAddNewShop(AcceptanceTester $I): void
    {
        $this->shopsPage->goToShopsPage($I);
        $this->shopsPage->addNewShop($I);
    }
}