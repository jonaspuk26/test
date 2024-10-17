<?php

namespace Api\CustomersCest;

use Dotenv\Entities\Customers\CustomersActions;
use Entities\Authentication\AuthenticationActions;
use Tests\Support\ApiTester;

class CustomersCest
{
private AuthenticationActions $auth;
private CustomersActions $customers;

public function _inject(
    AuthenticationActions $auth,
    CustomersActions $customers
)
{
    $this->auth = $auth;
    $this->customers = $customers;
}

public function _before(ApiTester $I)
{
    $this->auth
        ->authenticate($I);
}

public function testCreateCustomer(ApiTester $I): void
{
    $this->customers
        ->createCustomer($I)
        ->deleteCustomer($I);
}
}