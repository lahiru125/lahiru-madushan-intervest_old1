<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            ['name' => 'Admin User', 'email' => 'interwest@mailinator.com', 'password' => '$2y$10$4H0D2SluJvW6O56zeiZaOum20nA6NOBiX7IgyuzB.No81MZrkXULO', 'email_verified_at' => date('Y-m-d'), 'created_at' => date('Y-m-d'), 'updated_at' => date('Y-m-d') ],
            ['name' => 'Lahiru Madushan', 'email' => 'lahiru125@gmail.com', 'password' => '$2y$10$4H0D2SluJvW6O56zeiZaOum20nA6NOBiX7IgyuzB.No81MZrkXULO', 'email_verified_at' => date('Y-m-d'), 'created_at' => date('Y-m-d'), 'updated_at' => date('Y-m-d') ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
