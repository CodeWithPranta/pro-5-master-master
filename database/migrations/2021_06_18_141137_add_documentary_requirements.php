<?php

use App\Models\System\ModuleLevel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**

 * Class AddDocumentaryRequirements
 */
class AddDocumentaryRequirements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('modules', function (Blueprint $table) {

            DB::table('module_levels')->insert([
                ['id' => 74, 'value' =>
                    'documentary_requirements',
                    'description' => 'Requerimientos',
                    'module_id' => 16],
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        $q = ModuleLevel::where('value', 'documentary_requirements')->first();
        $q->delete();

    }
}
