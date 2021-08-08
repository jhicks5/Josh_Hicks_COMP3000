<?php

namespace Database\Seeders;

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
        // Due to foreign keys School must be created before the class and users
        $this->call(SchoolSeeder::class);
        $this->call(ClassroomSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TaskSeeder::class);
    }
}
