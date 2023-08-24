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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('image');

            $table->string('title_ru');
            $table->string('title_uz');

            $table->string('slug_ru');
            $table->string('slug_uz');

            $table->string('price_ru')->nullable();
            $table->string('price_uz')->nullable();

            $table->text('sub_content_ru')->nullable();
            $table->text('sub_content_uz')->nullable();

            $table->text('description_ru')->nullable();
            $table->text('description_uz')->nullable();

            $table->text('specifications_ru')->nullable();
            $table->text('specifications_uz')->nullable();

            $table->string('meta_title_ru')->nullable();
            $table->string('meta_title_uz')->nullable();

            $table->text('meta_description_ru')->nullable();
            $table->text('meta_description_uz')->nullable();

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
        Schema::dropIfExists('products');
    }
};
