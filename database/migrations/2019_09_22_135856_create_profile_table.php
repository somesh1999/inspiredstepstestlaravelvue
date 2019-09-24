<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('user_id')->nullable();
            $table->mediumText('contact_number')->nullable();
            $table->mediumText('nationality')->nullable();
            $table->mediumText('dateofbirth')->nullable();
            $table->mediumText('country')->nullable();
            $table->mediumText('city')->nullable();
            $table->mediumText('messenger')->nullable();
            $table->mediumText('messengerid')->nullable();
            $table->mediumText('finaleducation')->nullable();
            $table->mediumText('grade')->nullable();
            $table->mediumText('occupation')->nullable();
            $table->mediumText('countriesvisited')->nullable();
            $table->mediumText('financial_programme')->nullable();
            $table->mediumText('korean_skills')->nullable();
            $table->mediumText('english_skills')->nullable();
            $table->mediumText('reason')->nullable();
            $table->mediumText('comment')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
