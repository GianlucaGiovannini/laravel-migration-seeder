<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LaravelAgency extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packs', function (Blueprint $table) {
            $table->id();
            $table->decimal('price', 6, 2)->nullable();
            $table->string('state', 50);
            $table->string('city', 50);
            $table->string('post_code', 10);
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_availlable')->default(false);
            $table->string('date', 50)->nullable();
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
        //
    }
}
