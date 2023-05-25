<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Status;
use App\Models\Ticket;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(2)->create();
        Ticket::factory(10)->create();
        Status::create(
            [
                'status_name' => 'Ouvert'
            ]
        );
        Status::create(
            [
                'status_name' => 'Fermé'
            ]
        );
        Category::create(
            [
                'category_name' => 'Environnement'
            ]
            );
        Category::create(
            [
                'category_name' => 'Nuisance sonore'
            ]
            );
        Category::create(
            [
                'category_name' => 'Autre'
            ]
            );

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
