<?php

namespace App\Tenant\Traits;

use App\Tenant\Observers\TenantObserver;
use App\Tenant\Scopes\TenantScope;

trait TenantTrait
{
    protected static function booted()
    {
        parent::booted(); //verificar depois
        static::observe(TenantObserver::class);

        static::addGlobalScope(new TenantScope);
    }
}
