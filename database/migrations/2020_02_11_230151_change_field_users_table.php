<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeFieldUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function($table) {

            $table->string('password')->nullable($value = true)->change();
            $table->string('team_type')->default('undergraduate')->change();
            $table->string('firstname')->nullable($value = true);
            $table->string('lastname')->nullable($value = true);
            $table->string('fullname_en')->nullable($value = true);
            $table->string('office')->nullable($value = true);
            $table->string('job')->nullable($value = true);
            $table->string('department')->nullable($value = true);
            $table->string('company')->nullable($value = true);
            $table->string('ou')->nullable($value = true);
            $table->string('office_phone')->nullable($value = true);
            $table->string('color')->nullable($value = true);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('users', function($table) {

            $table->dropColumn('firstname');
            $table->dropColumn('lastname');
            $table->dropColumn('fullname_en');
            $table->dropColumn('fullname_th');
            $table->dropColumn('office');
            $table->dropColumn('job');
            $table->dropColumn('department');
            $table->dropColumn('company');
            $table->dropColumn('ou');
            $table->dropColumn('office_phone');
            $table->dropColumn('color');
            $table->string('password')->change();
            $table->string('team_type')->default('')->change();
        });
    }
}
