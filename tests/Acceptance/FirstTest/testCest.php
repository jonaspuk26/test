<?php

namespace Acceptance\FirstTest;

use PageActions\ShopsPageActions;
use Tests\Support\AcceptanceTester;

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