<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('estoque', function (Blueprint $table) {
        $table->id();
        $table->integer('quantidade');
        $table->decimal('valor_unitario', 10, 2);
        
        // FK para cadastro
        $table->unsignedBigInteger('cadastro_id');
        $table->foreign('cadastro_id')->references('id')->on('cadastro')->onDelete('cascade');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estoque');
    }
};
