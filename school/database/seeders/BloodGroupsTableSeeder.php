<?php

namespace Database\Seeders;

use App\Models\BloodGroup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BloodGroupsTableSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('blood_groups')->delete();

        $bgs = ['O-', 'O+', 'A+', 'A-', 'B+', 'B-', 'AB+', 'AB-'];
        foreach($bgs as  $bg){
            BloodGroup::create(['name' => $bg]);
        }
    }

}
