<?php

namespace Acceptance\UsersRolesPageTests;

use Pages\UsersRolesPage\UsersRolesPageActions;
use Tests\Support\AcceptanceTester;

class UsersRolesPageCest
{
    private UsersRolesPageActions $usersRolesPage;
    function _before():void
    {
        $this->usersRolesPage = new UsersRolesPageActions();
    }

    public function testAddNewRole(AcceptanceTester $I): void
    {
        $this->usersRolesPage
            ->goToUsersRolesPage($I)
            ->addNewRole($I);
    }
}