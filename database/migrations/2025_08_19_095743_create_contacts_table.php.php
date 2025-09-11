<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("contacts", function (Blueprint $table){
            $table->id();
            $table->string("full_name");
            $table->string("phone_number")->nullable();
            $table->string("email")->nullable();
            $table->string("message");
            $table->boolean("is_replied")->default(false);  
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("contacts");
    }
};
