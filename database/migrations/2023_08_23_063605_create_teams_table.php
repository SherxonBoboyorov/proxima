<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();

            $table->string('image');
            
            $table->string('name_ru');
            $table->string('name_uz');

            $table->string('slug_ru');
            $table->string('slug_uz');

            $table->string('job_title_ru');
            $table->string('job_title_uz');

            $table->string('phone');

            $table->string('email');

            $table->text('description_ru');
            $table->text('description_uz');

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
        Schema::dropIfExists('teams');
    }
};
