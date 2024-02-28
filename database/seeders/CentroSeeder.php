<?php

namespace Database\Seeders;

use App\Models\Centro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CentroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Centro:: truncate();
        $json = File::get(database_path('seeders/centros.json'));
        $centros = json_decode($json);

        foreach ($centros as $centro) {
            if ($centro->fp === 'S' || $centro->fpmedio === 'S' || $centro->fpsuperior === 'S') {
                Centro::create(array(
                    'codcen' => $centro->codcen,
                    'dencen' => $centro->dencen,
                    'titularidad' => $centro->titularidad,
                    'domcen' => $centro->domcen,
                    'cpcen' => $centro->cpcen,
                    'loccen' => $centro->loccen,
                    'muncen' => $centro->muncen,
                    'telcen' => $centro->telcen ?? null,
                    'email' => $centro->email ?? null,
                ));
            }
        }
    }
}
