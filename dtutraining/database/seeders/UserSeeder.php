<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User:: truncate();
        // User::create(
            $users=[
            [
                // 'id' => 1,
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => hash('sha256', 'abc123')

            ],
            [

                // 'id' => 2,
                'name' => 'fatihah',
                'email' => 'fatihah@mpc.com',
                'password' => hash('sha256', 'abc123')

            ],
            [

                // 'id' => 3,
                'name' => 'fateh',
                'email' => 'fateh@mpc.com',
                'password' => hash('sha256', 'abc123')

            ]
        ];
        
        // $user->save();
        foreach($users as $key => $value){
            User::create($value);
        }

            //User::create($value);
        //     $user=new User;

        //     $user->name=$value['name'];
        //     $user->email=$value['email'];
        //     $user->password=$value['password'];


        //     $user->save();
        // }
    }
}
