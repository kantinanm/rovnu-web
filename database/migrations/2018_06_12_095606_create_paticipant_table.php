<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaticipantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paticipant', function (Blueprint $table) {
            $table->increments('p_id');
            $table->string('fullname');
            $table->string('email');
            $table->string('garena_id')->nullable($value = true);
            $table->string('gender');
            $table->string('age');
            $table->string('provice');
            $table->string('member_type');
            $table->string('choice1')->nullable($value = true);
            $table->string('choice2')->nullable($value = true);
            $table->string('choice3')->nullable($value = true);
            $table->string('choice4')->nullable($value = true);
            $table->string('choice5')->nullable($value = true);
            $table->string('choiceetc')->nullable($value = true);
            $table->string('nuchoice1')->nullable($value = true);
            $table->string('nuchoice2')->nullable($value = true);
            $table->string('nuchoice3')->nullable($value = true);
            $table->string('nuchoice4')->nullable($value = true);
            $table->string('nuchoice5')->nullable($value = true);
            $table->string('nuchoiceetc')->nullable($value = true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('paticipant');
    }
}
