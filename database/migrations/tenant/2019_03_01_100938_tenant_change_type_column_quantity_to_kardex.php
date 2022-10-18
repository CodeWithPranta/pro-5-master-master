<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TenantChangeTypeColumnQuantityToKardex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::table('kardex', function (Blueprint $table) {
            $table->decimal('quantity', 12, 4)->change();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    { 

        Schema::table('kardex', function (Blueprint $table) {
            $table->integer('quantity')->change();
        });       

    }
}
