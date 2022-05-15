<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::factory()->create([
            'name' => 'Dev Test',
            'email' => 'dev@root.test',
            'password' => bcrypt('dev@root.test'),
        ]);
        Employee::factory()->count(500)->create();
    }
}
