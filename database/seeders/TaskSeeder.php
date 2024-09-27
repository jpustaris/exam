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
            'task_name' => 'Make Add button blue.',
            'status_id' => 1,
        ]);
        Task::create([
            'task_name' => 'Make Carousel Arrows bigger.',
            'status_id' => 2,
        ]);
        Task::create([
            'task_name' => 'Make Web Images blurred.',
            'status_id' => 3,
        ]);
    }
}
