<?php


namespace Api\SuppliersCest;

use Codeception\Attribute\Skip;
use Entities\Authentication\Authentication;
use Entities\Suppliers\SuppliersActions;
use Tests\Support\ApiTester;

class SuppliersCest
{
    private Authentication $auth;
    private SuppliersActions $suppliers;

    public function _inject(
        Authentication $auth,
        SuppliersActions      $suppliers
    ): void
    {
        $this->auth = $auth;
        $this->suppliers = $suppliers;
    }

    public function _before(ApiTester $I): void
    {
        $this->auth->authenticate($I);
    }

    // tests
    public function testCreateSupplier(ApiTester $I): void
    {
        $this->suppliers->createSupplier($I);
    }

    public function testDeleteSupplier(ApiTester $I): void
    {
        $this->suppliers
            ->createSupplier($I)
            ->deleteSupplier($I);
    }
}
