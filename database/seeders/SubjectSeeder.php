<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\Topic;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Subject::factory()
            ->count(150)
            ->hasTopics(5) //750 topicos
            ->create();
    }
}
