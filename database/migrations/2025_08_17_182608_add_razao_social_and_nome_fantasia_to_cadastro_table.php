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
    Schema::table('cadastro', function (Blueprint $table) {
        $table->string('razao_social')->after('cnpj');
        $table->string('nome_fantasia')->after('razao_social');
    });
}

public function down()
{
    Schema::table('cadastro', function (Blueprint $table) {
        $table->dropColumn(['razao_social', 'nome_fantasia']);
    });
}
};