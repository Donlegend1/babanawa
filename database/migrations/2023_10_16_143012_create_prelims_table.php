<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use SebastianBergmann\Type\NullType;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prelims', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('firstname');
            $table->string('othernames');
            $table->string('dob');
            $table->string('passport_url')->nullable();
            $table->string('jsce_result_url')->nullable();
            $table->string('address');
            $table->string('email');
            $table->string('gender');
            $table->integer('state_id');
            $table->integer('lga_id');
            $table->string('phone');
            $table->string('resultType');
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
        Schema::dropIfExists('prelims');
    }
};