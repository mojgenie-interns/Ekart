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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('prize', 15, 2);
            $table->string('photo')->nullable();
            $table->unsignedBigInteger('category_id')->nullable(); // Define the column first

            // Set up the foreign key constraint
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('set null'); // Adjust according to your requirements

            $table->boolean('status')->default(1)->comment('1:Active,0:Inactive');
            $table->boolean('is_favourite')->default(0)->comment('1:Yes,0:No');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');
    }
};
