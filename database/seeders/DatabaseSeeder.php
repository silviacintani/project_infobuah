<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Buah;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'via',
            'email'=> 'via@gmail.com',
            'password' => bcrypt('123'),
        ]);

        Buah::create([
            'nama_buah' => 'manggis',
            'deskripsi' => 'apa yaa atuhh bingung',
            'manfaat' => 'bhdfjdkrj',
            'foto' => ''
        ]);
    }
}
