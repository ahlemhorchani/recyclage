<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendingProductsTable extends Migration
{
    public function up()
    {
        Schema::create('pending_products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->integer('inStock');
            $table->integer('discount');
            $table->string('image')->nullable();
            $table->boolean('certife')->default(false);
            $table->date('datecetif');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id'); // ID de l'utilisateur ayant soumis le produit
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pending_products');
    }
}

