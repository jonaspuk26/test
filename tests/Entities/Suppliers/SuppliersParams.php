<?php

namespace Entities\Suppliers;

class SuppliersParams
{
    public string $uniqueId;
    public string $suppliersEndpoint = '/suppliers';
    public array $suppliersPostParams = [];
    public array $suppliersPostResponseParams = [];
    public string $suppliersDeleteUrl;
    public array $suppliersDeleteResponseParams = [];

    public function __construct()
    {
        $this->uniqueId = uniqid();
        $this->suppliersPostParams =
            [
                'id' => $this->uniqueId,
                'name' => 'test',
                'email' => 'test@test.com'
            ];
        $this->suppliersPostResponseParams =
            [
                'id' => $this->uniqueId,
                'name' => 'test',
                'cvr' => null,
                'email' => 'test@test.com',
                'phone' => null,
                'address' => null,
                'contact_person' => null,
                'external_id' => null,
            ];
        $this->suppliersDeleteUrl = "$this->suppliersEndpoint/$this->uniqueId";
        $this->suppliersDeleteResponseParams =
            [
                'success' => true,
            ];
    }
}