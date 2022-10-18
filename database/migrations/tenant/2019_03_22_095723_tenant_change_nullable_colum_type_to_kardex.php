<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TenantChangeNullableColumTypeToKardex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Added in main migration
        //mysql DB::statement("ALTER TABLE kardex CHANGE type type ENUM('sale','purchase') NULL");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Added in main migration
        //DB::statement("ALTER TABLE kardex CHANGE type type ENUM('sale','purchase') NULL");
    }
}
