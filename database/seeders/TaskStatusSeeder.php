<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TaskStatus;

class TaskStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TaskStatus::create(['status_name' => 'todo']);
        TaskStatus::create(['status_name' => 'in-progress']);
        TaskStatus::create(['status_name' => 'done']);
    }
}
