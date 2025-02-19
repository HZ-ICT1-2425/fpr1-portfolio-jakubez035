<?php

namespace Database\Seeders;

use App\Http\Controllers\BlogController;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogMassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $controller = new BlogController();
        $controller->addMassData();
    }
}
