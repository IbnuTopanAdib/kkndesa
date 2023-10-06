<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Contact;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'email' => 'resyaderesya@gmail.com',
            'password' => 'KaryamulyaKKN2023',
        ]);
        Post::factory(50)->create();
        for($i = 0; $i <10 ; $i++){
            Contact::factory(50)->create([
                'name' => 'japrak',
                'email' => 'japrak@gmail.com',
                'subject' => 'AKu cinta kamu',
                'body' => 'Rose is red and violet is blue You must believe that I love you'
            ]);
        }
    }
}
