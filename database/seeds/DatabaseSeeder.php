<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->delete();

        $this->call(RoleTableSeeder::class);
        $this->call(PermissionSeeder::class);

        $role_admin = Role::where("name", "admin")->first();
        $role_subscriber = Role::where("name", "subscriber")->first();
        $permission = Permission::get();

        foreach ($permission as $key => $value) {
            $role_admin->attachPermission($value);
        }

        $can_create_player = Permission::where("name", "player-create")->first();
        $can_update_player = Permission::where("name", "player-update")->first();
        $can_delete_player = Permission::where("name", "player-delete")->first();
        $can_list_player = Permission::where("name", "player-list")->first();

        $role_subscriber->attachPermission($can_create_player);
        $role_subscriber->attachPermission($can_update_player);
        $role_subscriber->attachPermission($can_delete_player);
        $role_subscriber->attachPermission($can_list_player);

        $can_update_team = Permission::where("name", "team-update")->first();
        $can_list_schedule = Permission::where("name", "schedule-list")->first();
        $can_update_schedule = Permission::where("name", "schedule-update")->first();
        $can_negotiation_create = Permission::where("name", "negotiation-create")->first();
        $can_list_negotiation = Permission::where("name", "negotiation-list")->first();
        $can_reply_negotiation = Permission::where("name", "negotiation-reply")->first();

        $role_subscriber->attachPermission($can_update_team);
        $role_subscriber->attachPermission($can_list_schedule);
        $role_subscriber->attachPermission($can_update_schedule);
        $role_subscriber->attachPermission($can_negotiation_create);
        $role_subscriber->attachPermission($can_list_negotiation);
        $role_subscriber->attachPermission($can_reply_negotiation);

        $user = ['name' => 'Admin User', 'email' => 'ecpe-software@nu.ac.th', 'password' => '','teamname' =>"",'usr_lvl'=>"admin",'username' => 'ecpe-software','active'=>1];
        $user = User::create($user);
        //4) Set User Role
        $user->attachRole($role_admin);


        /*$user_subscriber = ['name' => 'Subscribe User', 'email' => 'user@test.com', 'password' => Hash::make('1234'),'teamname' =>"nooneelse"];
        $user_subscriber = User::create($user_subscriber);
        $user_subscriber->attachRole($role_subscriber);*/

    }
}
