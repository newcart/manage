<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
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

        // Checks if the logged in user has permission to view the page
        Gate::define('isAuthorized', function ($user) {
            $permission = Session::get('user_type');
            $items = config('sidebar.items');
            $url = Request::path();
            foreach ($items as $item)
            {
                if ($item['url'] == $url)
                {
                    if (in_array($permission->code, $item['user_types']) || in_array('*', $item['user_types']))
                    {
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }
                else
                {
                    return false;
                }
            }
        });
    }
}
