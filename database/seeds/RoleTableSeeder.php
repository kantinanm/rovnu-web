<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_admin = new Role();
        $role_admin->name = "admin";
        $role_admin->display_name = "Admin";
        $role_admin->description = "Full Permission";
        $role_admin->save();

        $role_subscriber = new Role();
        $role_subscriber->name = "subscriber";
        $role_subscriber->display_name = "Subscriber";
        $role_subscriber->description = "can  view team detail, add players, add link video, negotiation ,update result, list schedule.";
        $role_subscriber->save();
    }
}
