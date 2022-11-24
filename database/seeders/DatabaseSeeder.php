<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminTableSeeder::class,

            // マスター
            MstProfessorsTableSeeder::class,
            MstDaysTableSeeder::class,
            MstGendersTableSeeder::class,
            MstDepartmentsTableSeeder::class,
            MstCoursesTableSeeder::class,
            MstSubjectsTableSeeder::class,
            MstSpecializedSubjectsTableSeeder::class,
        ]);
    }
}
