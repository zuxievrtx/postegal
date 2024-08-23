<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Spatie\Permission\Models\Role;
use App\Models\User;

class AssignDefaultRole
{
    public function handle(Registered $event)
    {
        $defaultRole = Role::where('name', 'Member')->first();
        if ($defaultRole) {
            $event->user->assignRole($defaultRole);
        }
    }
}
