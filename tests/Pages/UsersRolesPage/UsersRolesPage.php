<?php

namespace Pages\UsersRolesPage;

use Pages\PageObject;

class UsersRolesPage extends PageObject
{
    public array $selector =
        [
            'nameField' => '#name',
            'idInputField' => '[class="input-container input-with-button"] input',
            'generateIdButton' => '[class="input-container input-with-button"] button',
            'saveRoleButton' => '#button-save',
            'addNewRoleButton' => '[class="button add-new search-field-action search-field-action-small ng-binding ng-scope active"]',
            'webpageRightsTab' => '#tab-button--tab-2',
            'appRightsTab' => '#tab-button--tab-3',
            'roleSavedToastMessage' => '.messages'
        ];
}