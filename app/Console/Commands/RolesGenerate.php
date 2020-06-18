<?php

namespace App\Console\Commands;

use App\Permissions;
use App\Role;
use App\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class RolesGenerate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'roles:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will generate the basic roles for the application';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $role = new Role;
        $role->id = 1;
        $role->role_name = 'Admin';
        $role->permissions = json_encode([
            Permissions::__ADMIN__
        ]);
        $role->save();

        $role = new Role;
        $role->id = 2;
        $role->role_name = 'user';
        $role->permissions = json_encode([]);
        $role->save();

        $role = Role::query()->where('role_name', '=', 'Admin')->first();

        if (empty($role->id)) {
            return 'admin role doesnt have an id, are you sure the admin role is created.';
        }

        $user = new User;
        $user->name = env('ADMIN_NAME');
        $user->email = env('ADMIN_EMAIL');
        $user->password = Hash::make(env('ADMIN_PASSWORD'));
        $user->role_id = $role->id;
        $user->email_verified_at = Carbon::now();
        $user->save();
    }
}
