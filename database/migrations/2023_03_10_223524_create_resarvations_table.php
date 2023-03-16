<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Food;
use App\Models\User;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('resarvations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("food_id");
            $table->string("address_reservation");
            $table->Integer('prix');
            $table->Integer('nb');
            $table->string("numero_de_telephone");
            $table->string("confimer");
            $table->timestamps();
            $table->foreign('user_id')
          ->references('id')
          ->on('users')
          ->onDelete('cascade');
          $table->foreign('food_id')
          ->references('id')
          ->on('food')
          ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resarvations');
    }
};
