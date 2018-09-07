<?php

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
        // $this->call(UsersTableSeeder::class);
        DB::table('tasks')->insert([
            'body' => 'Learn Laravel',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tasks')->insert([
            'body' => 'Learn Eloquent',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tasks')->insert([
            'body' => 'Persist database data!',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tasks')->insert([
            'body' => 'Learn VueJS'
        ]);
    }
}
