<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $arrPermission = [
                    'product-index',
                    'product-store',
                    'product-update',
                    'product-delete',
                    'user-index',
                    'user-store',
                    'user-update',
                    'user-delete',
                    'role-managerment',
                ];

        foreach ($arrPermission as $permission) {
            Gate::define($permission, function($user) use ($permission) {
                return $user->authorize($permission);
            });
        }
        
    }
}
