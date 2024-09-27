<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Make Add button blue.',
            'description' => 'This is a test task. Make Add button blue description.',
            'status_id' => 1,
        ]);
        Task::create([
            'title' => 'Make Carousel Arrows bigger.',
            'description' => 'This is a test task. Make Carousel Arrows bigger description.',
            'status_id' => 2,
        ]);
        Task::create([
            'title' => 'Make Web Images blurred.',
            'description' => 'This is a test task. Make Web Images blurred description.',
            'status_id' => 3,
        ]);
    }
}
