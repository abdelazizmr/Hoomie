<?php

namespace Database\Seeders;

use App\Models\PostStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            ["status_type" => "success"],
            ["status_type" => "pending"],
            ["status_type" => "failure"]
        ];
        foreach($statuses as $status){
            PostStatus::create($status);
        }
    }
}
