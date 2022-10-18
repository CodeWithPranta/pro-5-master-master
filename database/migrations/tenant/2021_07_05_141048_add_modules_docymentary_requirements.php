<?php

    use App\Models\Tenant\Module;
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Support\Facades\DB;
    use Modules\LevelAccess\Models\ModuleLevel;
    /**
     * Class AddModulesDocymentaryRequirements
     */
    class AddModulesDocymentaryRequirements  extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            DB::table('module_levels')->insert([
                ['id' => 74, 'value' =>
                    'documentary_requirements',
                    'description' => 'Requerimientos',
                    'module_id' => 16],
            ]);

        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            $q = ModuleLevel::where('value', 'documentary_requirements')->first();
            $q->delete();
        }
    }
