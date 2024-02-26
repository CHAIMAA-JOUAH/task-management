<?php

namespace Database\Seeders;
use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        Task::truncate();

        // Seed tasks table with sample data
        $tasks = [
            ['name' => 'Task 1'],
            ['name' => 'Task 2'],
            ['name' => 'Task 3'],
            // Add more tasks as needed
        ];

        Task::insert($tasks);
    }
}
