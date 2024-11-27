<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Escola;

class EscolaSeeder extends Seeder
{
    public function run()
    {
        // Agora você chama a factory corretamente dessa forma:
        Escola::factory()->count(10)->create();
    }
}
