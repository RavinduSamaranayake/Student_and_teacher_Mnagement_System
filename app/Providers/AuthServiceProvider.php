<?php

namespace App\Providers;

use App\Role;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $user = \Auth::user();

        
        // Auth gates for: User management
        Gate::define('user_management_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Roles
        Gate::define('role_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Users
        Gate::define('user_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Student
        Gate::define('student_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('student_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('student_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('student_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('student_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Teacher
        Gate::define('teacher_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('teacher_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('teacher_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('teacher_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('teacher_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

    }
}
