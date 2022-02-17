<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypesTableSeeder extends Seeder
{
    
    public function run()
    {
        $data = [
            ['title' => 'accountant', 'name' => 'Accountant', 'level' => 4],
            ['title' => 'parent', 'name' => 'Parent', 'level' => 3],
            ['title' => 'teacher', 'name' => 'Teacher', 'level' => 2],
            ['title' => 'admin', 'name' => 'Admin', 'level' => 1],
            
          ];
        DB::table('user_types')->insert($data);
    }
}
