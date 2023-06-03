<?php

namespace App\Providers;

use App\Models\employee;
use App\Models\houseworker;
use App\Models\money;
use App\Models\supply;
use App\Policies\employeePolicy;
use App\Policies\houseworkerPolicy;
use App\Policies\MoneyPolicy;
use App\Policies\supplyPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        money::class => MoneyPolicy::class,
        employee::class => employeePolicy::class,
        houseworker::class => houseworkerPolicy::class,
        supply::class => supplyPolicy::class,
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        /*Gate::before(function ($user, $ability) {
            if ($user->role == 'developer') {
                return true;
            }
        });*/

        $this->registerPolicies();

        Gate::define('isdeveloper', function ($user) {
            return $user->role == 'developer';
        });
        /* define a admin user role */
        Gate::define('isAdmin', function ($user) {
            return $user->role == 'admin';
        });

        /* define a manager user role */
        Gate::define('isManager', function ($user) {
            return $user->role == 'manager';
        });

        /* define a user role */
        Gate::define('isUser', function ($user) {
            return $user->role == 'user';
        });
    }
}
