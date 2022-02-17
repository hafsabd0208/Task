<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Helpers\Qs;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{

    
    public function run()
    {
        DB::table('users')->delete();

        $this->createNewUsers();
        $this->createManyUsers( 3);
    }

    protected function createNewUsers()
    {
      

        $d = [

            ['name' => 'Hafsa',
                'email' => 'Hafsa.02@gmail.com',
                'username' => 'hafsa',
                'password' => bcrypt('12345678'),
                'user_type' => 'admin',
                'code' => strtoupper(Str::random(10)),
                'remember_token' => Str::random(10),
            ],
            
            ['name' => 'Maria',
                'email' => 'Maria.12@gmail.com',
                'user_type' => 'teacher',
                'username' => 'mari',
                'password' => bcrypt('12345678920'),
                'code' => strtoupper(Str::random(10)),
                'remember_token' => Str::random(10),
            ],
            ['name' => 'Sonia',
                'email' => 'Sonia.10@gmail.com',
                'user_type' => 'parent',
                'username' => 'mari',
                'password' => bcrypt('123456789'),
                'code' => strtoupper(Str::random(10)),
                'remember_token' => Str::random(10),
            ],

            ['name' => 'Samah',
                'email' => 'Samah.04@gmail.com',
                'user_type' => 'accountant',
                'username' => 'sam',
                'password' => bcrypt('012345678'),
                'code' => strtoupper(Str::random(10)),
                'remember_token' => Str::random(10),
            ],
        ];
        DB::table('users')->insert($d);
    }

    protected function createManyUsers(int $count)
    {
        $data = [];
        $user_type = Qs::getAllUserTypes(['admin', 'librarian', 'student']);

        for($i = 1; $i <= $count; $i++){

            foreach ($user_type as $k => $ut){

                $data[] = ['name' => ucfirst($user_type[$k]).' '.$i,
                    'email' => $user_type[$k].$i.'@'.$user_type[$k].'.com',
                    'user_type' => $user_type[$k],
                    'username' => $user_type[$k].$i,
                    'password' => $user_type[$k],
                    'code' => strtoupper(Str::random(10)),
                    'remember_token' => Str::random(10),
                ];

            }

        }

        DB::table('users')->insert($data);
    }
}
