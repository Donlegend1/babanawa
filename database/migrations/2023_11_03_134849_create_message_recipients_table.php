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
        Schema::create('message_recipients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('message_id');
            $table->integer('user_id');
            $table->boolean('is_cc')->default(false); // Indicates if the user is CC recipient
            $table->integer('recipient_status')->default(0); // 0: Pending, 1: Accepted, 2: Declined
            $table->text('decline_comment')->nullable(); // Comment if the recipient declines the message
            $table->unsignedBigInteger('delegate_to')->nullable(); // User ID to delegate message acceptance
            $table->timestamps();
            $table->foreign('message_id')->references('id')->on('messages')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('delegate_to')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message_recipients');
    }
};