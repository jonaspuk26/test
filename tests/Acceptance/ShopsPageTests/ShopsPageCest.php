<?php

namespace Acceptance\ShopsPageTests;

use Pages\ShopsPage\ShopsPageActions;
use Tests\Support\AcceptanceTester;

class ShopsPageCest
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

    public function testUpdateShop(AcceptanceTester $I): void
    {
        $this->shopsPage->goToShopsPage($I);
        $this->shopsPage->updateShopOpeningHoursAndVipps($I);
        $this->shopsPage->deleteNewShop($I);
    }
}