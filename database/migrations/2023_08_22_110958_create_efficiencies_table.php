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
        Schema::create('efficiencies', function (Blueprint $table) {
            $table->id();

            $table->string('icon')->nullable();
            $table->string('image');

            $table->string('title_ru');
            $table->string('title_uz');

            $table->text('content_ru');
            $table->text('content_uz');

            $table->string('statistic_ru')->nullable();
            $table->string('statistic_uz')->nullable();

            $table->text('statistic_content_ru')->nullable();
            $table->text('statistic_content_uz')->nullable();

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
        Schema::dropIfExists('efficiencies');
    }
};
