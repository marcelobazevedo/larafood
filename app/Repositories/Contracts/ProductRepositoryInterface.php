<?php
namespace App\Repositories\Contracts;

interface ProductRespositoryInterface
{
    public function getproductsByTenantId(int $idTenant, array $categories);

    public function getProductByFlag(string $flag);
}
