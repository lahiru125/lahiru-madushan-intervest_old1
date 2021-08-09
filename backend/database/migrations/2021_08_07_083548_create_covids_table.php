<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covids', function (Blueprint $table) {
            $table->increments('id');
            $table->string('data_object', 10000);
            $table->timestamps();
        });

        DB::table('covids')->insert([
            [
                'data_object' => '{"update_date_time":"2021-08-08 22:38:06","local_new_cases":2956,"local_total_number_of_individuals_in_hospitals":31620,"local_deaths":5111,"local_new_deaths":94,"local_recovered":293357,"local_active_cases":31620,"global_new_cases":556234,"global_total_cases":193097822,"global_deaths":4146981,"global_new_deaths":8640,"global_recovered":175532615,"total_pcr_testing_count":4579553,"today_pcr_testing_count":{"date":"2021-08-08","pcr_count":"18704"}}', 
                'created_at' => date('Y-m-d'), 
                'updated_at' => date('Y-m-d') 
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('covids');
    }
}
