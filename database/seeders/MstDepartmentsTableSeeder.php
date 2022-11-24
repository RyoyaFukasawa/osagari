<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MstDepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('mst_departments')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('mst_departments')->insert([
            0 => [
                'id' => 1,
                'name' => '経済学部',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            1 => [
                'id' => 2,
                'name' => '法学部',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            2 => [
                'id' => 3,
                'name' => '経営学部',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            3 => [
                'id' => 4,
                'name' => '商学部',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            4 => [
                'id' => 5,
                'name' => '文学部',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            5 => [
                'id' => 6,
                'name' => 'ネットワーク情報学部',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            6 => [
                'id' => 7,
                'name' => '人間科学部',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            7 => [
                'id' => 8,
                'name' => '国際コミュニケーション学部',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
        ]);
    }
}
