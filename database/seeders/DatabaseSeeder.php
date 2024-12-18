<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\TipoPago;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'Enrique',
            'email' => 'user@gmail.com',
            'password' => 'prueba',
        ]);
        TipoPago::factory()->create([
            'tipo' => 'Efectivo',
        ]);

        TipoPago::factory()->create([
            'tipo' => 'QR',
        ]);
    }
}
