<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNegotiationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('negotiation', function (Blueprint $table) {

            $table->increments('negotiation_id');
            $table->char('group')->nullable($value = true)->default('');
            $table->integer('state')->nullable($value = true)->default(1);
            $table->date('date');
            $table->string('time');
            $table->boolean('accepted_a')->default(0);
            $table->boolean('accepted_b')->default(0);
            $table->string('note')->nullable($value = true);
            $table->string('contact')->nullable($value = true);
            $table->string('room')->nullable($value = true);
            $table->timestamps();

            $table->unsignedInteger('team_id_a');
            $table->foreign('team_id_a')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedInteger('team_id_b');
            $table->foreign('team_id_b')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedInteger('schedule_id');
            $table->foreign('schedule_id')->references('schedule_id')->on('schedule')->onDelete('cascade');

            $table->unsignedInteger('request_from');
            $table->foreign('request_from')->references('id')->on('users')->onDelete('cascade');

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
        //Schema::drop('schedule');
        //Schema::disableForeignKeyConstraints();

        Schema::disableForeignKeyConstraints();

        /*Schema::table('negotiation', function (Blueprint $table) {
            $table->dropForeign('negotiation_team_id_a_foreign');
            $table->dropForeign('negotiation_team_id_b_foreign');
            $table->dropForeign('negotiation_schedule_id_foreign');
            $table->dropForeign('negotiation_request_from_foreign');
            $table->dropColumn('team_id_a');
            $table->dropColumn('team_id_b');
            $table->dropColumn('schedule_id');
            $table->dropColumn('request_from');
        });*/

        Schema::dropIfExists('negotiation');
        //Sch‌​ema::enableForeignKe‌​yConstraints();
    }
}
