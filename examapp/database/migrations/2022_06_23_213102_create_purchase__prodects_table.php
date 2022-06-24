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
        Schema::create('purchase__prodects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prodect_id')->nullable()->constrained('prodects')->onDelete('set null');
            $table->foreignId('purchase_id')->nullable()->constrained('purchases')->onDelete('set null');
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
        Schema::dropIfExists('purchase__prodects');
    }
};
