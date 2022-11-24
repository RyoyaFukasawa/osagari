<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MstCoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_courses')->truncate();

        DB::table('mst_courses')->insert([
            0 => [
                'id' => 1,
                'department_id' => 1,
                'name' => '現代経済学科',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            1 => [
                'id' => 2,
                'department_id' => 1,
                'name' => '生活環境経済学科',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            2 => [
                'id' => 3,
                'department_id' => 1,
                'name' => '国際経済学科',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            3 => [
                'id' => 4,
                'department_id' => 2,
                'name' => '法律学科',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            4 => [
                'id' => 5,
                'department_id' => 2,
                'name' => '政治学科',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            5 => [
                'id' => 6,
                'department_id' => 3,
                'name' => '経営学科',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            6 => [
                'id' => 7,
                'department_id' => 3,
                'name' => 'ビジネスデザイン学科',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            7 => [
                'id' => 8,
                'department_id' => 4,
                'name' => 'マーケティング学科',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            8 => [
                'id' => 9,
                'department_id' => 4,
                'name' => '会計学科',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            9 => [
                'id' => 10,
                'department_id' => 5,
                'name' => '日本文学文化学科',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            10 => [
                'id' => 11,
                'department_id' => 5,
                'name' => '英語英米文学科',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            11 => [
                'id' => 12,
                'department_id' => 5,
                'name' => '哲学科',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            12 => [
                'id' => 13,
                'department_id' => 5,
                'name' => '歴史学科',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            13 => [
                'id' => 14,
                'department_id' => 5,
                'name' => '環境地理学科',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            14 => [
                'id' => 15,
                'department_id' => 5,
                'name' => 'ジャーナリズム学科',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            15 => [
                'id' => 16,
                'department_id' => 6,
                'name' => 'ネットワーク情報学科',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            16 => [
                'id' => 17,
                'department_id' => 7,
                'name' => '心理学科',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            17 => [
                'id' => 18,
                'department_id' => 7,
                'name' => '社会学科',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            18 => [
                'id' => 19,
                'department_id' => 8,
                'name' => '日本語学科',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            19 => [
                'id' => 20,
                'department_id' => 8,
                'name' => '異文化コミュニケーション学科',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
        ]);
    }
}
