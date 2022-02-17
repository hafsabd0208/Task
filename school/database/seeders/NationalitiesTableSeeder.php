<?php
namespace Database\Seeders;

use App\Models\Nationality;
use Illuminate\Database\Seeder;


class NationalitiesTableSeeder extends Seeder
{
    public function run()
    {
        $nationals = array(
         'Algerian', 'Tunisian', 'Moroccian', 'American','Jordanian'
        );

        foreach ($nationals as $n) {
            Nationality::create(['name' => $n]);
        }
    }
}
