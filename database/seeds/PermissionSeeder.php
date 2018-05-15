<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permission = [

            [
                'name' => 'team-update',
                'display_name' => 'Update Team Detail',
                'description' => 'Update Team Information : link video , slug , team_type, team-name'
            ]
            ,
            [
                'name' => 'role-create',
                'display_name' => 'Create Role',
                'description' => 'Create New Role'
            ]
            ,
            [
                'name' => 'role-list',
                'display_name' => 'Display Role Listing',
                'description' => 'List All Roles'
            ],
            [
                'name' => 'role-update',
                'display_name' => 'Update Role',
                'description' => 'Update Role Information'
            ],
            [
                'name' => 'role-delete',
                'display_name' => 'Delete Role',
                'description' => 'Delete Role'
            ],
            [
                'name' => 'player-create',
                'display_name' => 'Create Player',
                'description' => 'Create New Player'
            ],
            [
                'name' => 'player-list',
                'display_name' => 'Display Player Listing',
                'description' => 'List All Player'
            ],
            [
                'name' => 'player-update',
                'display_name' => 'Update Player',
                'description' => 'Update Player Information'
            ],
            [
                'name' => 'player-delete',
                'display_name' => 'Delete Player',
                'description' => 'Delete Player'
            ],
            [
                'name' => 'schedule-create',
                'display_name' => 'Create Appointment',
                'description' => 'Create New Appointment'
            ],
            [
                'name' => 'schedule-list',
                'display_name' => 'Display All Appointments',
                'description' => 'List All Appointments'
            ],
            [
                'name' => 'schedule-update',
                'display_name' => 'Update Appointment',
                'description' => 'Update Appointment Information'
            ],
            [
                'name' => 'schedule-delete',
                'display_name' => 'Delete Appointment',
                'description' => 'Delete Appointment Information , rollback team matching'
            ],
            [
                'name' => 'negotiation-create',
                'display_name' => 'Create Negotiation',
                'description' => 'Time Request for battle'
            ]
            ,
            [
                'name' => 'negotiation-reply',
                'display_name' => 'Accept or Reject Negotiation',
                'description' => 'Accept or Reject Time Request'
            ]
            ,
            [
                'name' => 'negotiation-list',
                'display_name' => 'Display All Negotiation',
                'description' => 'List All Negotiation'
            ]
        ];

        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }
}
