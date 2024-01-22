<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Psikolog;

class PsikologSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Psikolog::create([
            'name' => 'Marshela',
            'degree' => 'M.Psi.',
            'session' => 22,
            'experience' => 2,
            'status' => 1,
            'photo' => 'marshela.png'
        ]);
        Psikolog::create([
            'name' => 'Ghanny',
            'degree' => 'M.Psi.',
            'session' => 30,
            'experience' => 3,
            'status' => 0,
            'photo' => 'ghanny.png'
        ]);
        Psikolog::create([
            'name' => 'Kirana',
            'degree' => 'M.Psi.',
            'session' => 42,
            'experience' => 4,
            'status' => 1,
            'photo' => 'kirana.png'
        ]);
        Psikolog::create([
            'name' => 'Kevin',
            'degree' => 'M.Psi.',
            'session' => 45,
            'experience' => 2,
            'status' => 0,
            'photo' => 'kevin.png'
        ]);
        Psikolog::create([
            'name' => 'Fakhri',
            'degree' => 'M.Psi.',
            'session' => 25,
            'experience' => 3,
            'status' => 1,
            'photo' => 'fakhri.png'
        ]);
        Psikolog::create([
            'name' => 'Bella',
            'degree' => 'M.Psi.',
            'session' => 50,
            'experience' => 3,
            'status' => 1,
            'photo' => 'bella.png'
        ]);
    }
}
