<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MstDaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_days')->truncate();

        DB::table('mst_days')->insert([
            0 => [
                'id' => 1,
                'name' => '月',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            1 => [
                'id' => 2,
                'name' => '火',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            2 => [
                'id' => 3,
                'name' => '水',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            3 => [
                'id' => 4,
                'name' => '木',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            4 => [
                'id' => 5,
                'name' => '金',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            5 => [
                'id' => 6,
                'name' => '土',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            6 => [
                'id' => 7,
                'name' => '日',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
        ]);
    }
}
