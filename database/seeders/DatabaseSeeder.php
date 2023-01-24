<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /* --Version antigua de Laravel 6
        App\User::create([
            'name'=>'Italo Morales F',
            'email' => 'i@admin.com',
            'password' => bcrypt('123456')
        ]);
        */

        User::create([
            'name' => 'Italo Morales F',
            'email' => 'i@admin.com',
            'password' => bcrypt('123456')
        ]);

        Post::factory()->count(24)->create();

        //Laravel 6:
        //factory(App\Post::class, 24)->create();
    }
}
