<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         *  id
            team_id_a
            team_id_b
            group
            state
            date
            time
            winner_id
            exception : not_join=1 , timeup=2
            has_result
            validate

         * */

        Schema::create('schedule', function (Blueprint $table) {

            $table->increments('schedule_id');
            $table->char('group')->nullable($value = true)->default('');
            $table->integer('state')->nullable($value = true)->default(1);
            $table->date('date');
            $table->string('time')->nullable($value = true);
            $table->integer('exception')->nullable($value = true)->default(0);
            $table->integer('has_result')->nullable($value = true)->default(0);
            $table->boolean('validate')->default(0);
            $table->timestamps();

            $table->unsignedInteger('team_id_a');
            $table->foreign('team_id_a')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedInteger('team_id_b');
            $table->foreign('team_id_b')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedInteger('winner_id')->nullable($value = true);
            $table->foreign('winner_id')->references('id')->on('users')->onDelete('cascade');

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
        //Schema::drop('users');
        //Schema::disableForeignKeyConstraints();
        /*Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign('projects_user_id_foreign');
        });*/
        Schema::disableForeignKeyConstraints();
        /*
        Schema::table('schedule', function (Blueprint $table) {
            $table->dropForeign('schedule_team_id_a_foreign');
            $table->dropForeign('schedule_team_id_b_foreign');
            $table->dropForeign('schedule_winner_id_foreign');
            $table->dropColumn('team_id_a');
            $table->dropColumn('team_id_b');
            $table->dropColumn('winner_id');
        });*/
        Schema::dropIfExists('schedule');
        //Sch‌​ema::enableForeignKe‌​yConstraints();
    }
}
