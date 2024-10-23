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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users2')->onDelete('cascade');
            $table->foreignId('cat_id')->constrained('categories')->onDelete('cascade');
            $table->string('name');
            $table->string('descrip');
            $table->integer('price');
            $table->integer('quantity');
            $table->tinyInteger('premium');
            $table->string('start_date'); #Старт при случаи активации премиума
            $table->string('end_date'); #Конец премиума
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
