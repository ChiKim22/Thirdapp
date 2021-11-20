<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('image'); // image File path
            // insert Image :blob (Binary Large OBject) => not recommand
            // clob (Character Large OBject) => not recommand
            $table->foreignId('brand_id')->constrained()
                ->onDelete('cascade');
            $table->string('name');
            $table->year('bulid');
            $table->unsignedDecimal('price', $precision = 10, $scale = 2); //총 10자리 소숫점 2자리 포함.
            $table->string('type'); // car type
            $table->string('style'); // suv, sedan,etc...
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
        Schema::dropIfExists('cars');
    }
}
