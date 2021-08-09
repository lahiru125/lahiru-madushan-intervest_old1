<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guides', function (Blueprint $table) {
            $table->increments('id');
            $table->string('heading', 500);
            $table->string('link', 500);
            $table->string('description', 3000);
            $table->integer('added_by');
            $table->date('date');
            $table->integer('deleted');
            $table->timestamps();
        });

        DB::table('guides')->insert([
            [
                'heading' => 'Addictive behaviours', 
                'link' => 'https://www.who.int/health-topics/addictive-behaviours#tab=tab_1', 
                'description' => 'Many people around the world are engaged in (video) gaming and gambling behaviours ,which are recognized as addictive behaviours, but usually do not result in any significant health consequences. However, a small proportion of people engaged in such behaviours may develop disorders due to addictive behaviours associated with functional impairment or distress.', 
                'added_by' => 1, 
                'date' => date('Y-m-d'), 
                'deleted' => 0, 
                'created_at' => date('Y-m-d'), 
                'updated_at' => date('Y-m-d') 
            ],
            [
                'heading' => 'Laboratory diagnosis of COVID-19', 
                'link' => 'https://www.epid.gov.lk/web/images/pdf/Circulars/Corona_virus/final_draft_of_testing_strategy_v_2.pdf', 
                'description' => 'In managing the pandemic caused by SARS CoV-2, early diagnosis of acute infection in both symptomatic and asymptomatic patients plays a major role in containing the transmission of this infection in the community. Early diagnosis in combination with contact tracing and quarantining of exposed contacts remains the main strategy in preventing wide community spread of the SARS CoV-2 infection.', 
                'added_by' => 2, 
                'date' => date('Y-m-d'), 
                'deleted' => 0, 
                'created_at' => date('Y-m-d'), 
                'updated_at' => date('Y-m-d') 
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guides');
    }
}
