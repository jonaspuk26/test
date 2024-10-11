<?php

namespace Pages\UsersRolesPage;

use Pages\HeaderMenuPage\Header;
use Pages\LoginPage\LoginPage;
use Pages\LoginPage\LoginPageActions;
use Tests\Support\AcceptanceTester;

class UsersRolesPageActions
{
    private UsersRolesPage $usersRolesPage;
    private LoginPageActions $loginPage;
    private Header $header;
    public AcceptanceTester $I;

    public function __construct()
    {
        $this->usersRolesPage = new UsersRolesPage;
        $this->loginPage= new LoginPageActions;
        $this->header = new Header;
    }

    public function goToUsersRolesPage(AcceptanceTester $I): self
    {
        $this->loginPage->login($I);
        $I->waitForElement($this->header->getSelector('usersHeader'));
        $I->click($this->header->getSelector('usersHeader'));
        $I->click($this->header->getSelector('rolesHeaderMenu'));
        $I->seeElement($this->usersRolesPage->getSelector('addNewRoleButton'));
        return $this;
    }

    public function addNewRole(AcceptanceTester $I): self
    {
        $I->waitForElementClickable($this->usersRolesPage->getSelector('generateIdButton'));
        $I->click($this->usersRolesPage->getSelector('generateIdButton'));
        $this->assertGeneratedIdStructure($I);
        $I->fillField($this->usersRolesPage->getSelector('nameField'), 'TestRole');
        $I->waitForElementClickable($this->usersRolesPage->getSelector('saveRoleButton'));
        $I->click($this->usersRolesPage->getSelector('saveRoleButton'));
        $I->seeElement($this->usersRolesPage->getSelector('roleSavedToastMessage'));
        return $this;
    }

    private function assertGeneratedIdStructure(AcceptanceTester $I): void
    {
        $generatedId = $I->grabValueFrom($this->usersRolesPage->getSelector('idInputField'));
        $I->assertEquals(36, strlen($generatedId));
        $partsOfId = explode('-', $generatedId);
        $I->assertCount(5, $partsOfId);
        $I->assertEquals(8, strlen($partsOfId[0]));
        $I->assertEquals(4, strlen($partsOfId[1]));
        $I->assertEquals(4, strlen($partsOfId[2]));
        $I->assertEquals(4, strlen($partsOfId[3]));
        $I->assertEquals(12, strlen($partsOfId[4]));
    }
}