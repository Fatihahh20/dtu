<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            UserSeeder::class,
            CommentSeeder::class,
        ]);
    }

        // User::truncate();

        // User::create(
        //     [
        //         'id' => 1,
        //         'name' => 'admin',
        //         'email' => 'admin@example.com',
        //         'password' => hash('sha256', 'abc123')

        //     ],
        //     [

        //         'id' => 2,
        //         'name' => 'fatihah',
        //         'email' => 'fatihah@mpc.com',
        //         'password' => hash('sha256', 'abc123')

        //     ],
        //     [

        //         'id' => 3,
        //         'name' => 'fatihah',
        //         'email' => 'fatihah@mpc.com',
        //         'password' => hash('sha256', 'abc123')

        //     ]
        // );
        // $user->save();
        // foreach($users as $key => $user){

        //     //User::create($value);
        //     $user=new User;

        //     $user->name=$value['name'];
        //     $user->email=$value['email'];
        //     $user->password=$value['password'];


        //     $user->save();
        // }

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    // }
}
