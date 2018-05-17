<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        /*
         *
            player_id
            firstname
            lastname
            studentid
            rov_id
            player_name
            faculty
            institution
            mobilephone
            verified

            -- foreign key
            $table->unsignedInteger('team_id');
            $table->foreign('team_id')->references('id')->on('users');

         * */

        Schema::create('players', function (Blueprint $table) {
            $table->increments('player_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('studentid');
            $table->string('rov_id');
            $table->string('player_name');
            $table->integer('faculty')->nullable($value = true);
            $table->string('institution')->nullable($value = true);
            $table->string('mobilephone')->nullable($value = true);
            $table->boolean('verified')->default(0);
            $table->timestamps();

            $table->unsignedInteger('team_id');
            $table->foreign('team_id')->references('id')->on('users');
            //->onDelete('cascade')

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
        Schema::disableForeignKeyConstraints();
        //Schema::drop('users');
        /*Schema::table('players', function (Blueprint $table) {
            $table->dropForeign('players_team_id_foreign');
            $table->dropColumn('team_id');
        });*/

        Schema::dropIfExists('players');
        //Sch‌​ema::enableForeignKe‌​yConstraints();
    }
}
