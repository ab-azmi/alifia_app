<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Psikolog;
use App\Models\User;

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
            'photo' => 'marshela.png',
            'start' => '08:00:00',
            'end' => '16:00:00',
            'workdays' => 'Senin, Selasa, Rabu, Kamis, Jumat',
            'user_id' => User::factory()->create([
                'name' => 'Marshela',
            ])->assignRole('psikolog')->id,
        ]);
        Psikolog::create([
            'name' => 'Ghanny',
            'degree' => 'M.Psi.',
            'session' => 30,
            'experience' => 3,
            'status' => 0,
            'photo' => 'ghanny.png',
            'start' => '08:00:00',
            'end' => '16:00:00',
            'workdays' => 'Senin, Selasa, Rabu, Kamis, Jumat',
            'user_id' => User::factory()->create([
                'name' => 'Ghanny',
            ])->assignRole('psikolog')->id,
        ]);
        Psikolog::create([
            'name' => 'Kirana',
            'degree' => 'M.Psi.',
            'session' => 42,
            'experience' => 4,
            'status' => 1,
            'photo' => 'kirana.png',
            'start' => '08:00:00',
            'end' => '16:00:00',
            'workdays' => 'Senin, Selasa, Rabu, Kamis, Jumat',
            'user_id' => User::factory()->create([
                'name' => 'Kirana',
            ])->assignRole('psikolog')->id,
        ]);
        Psikolog::create([
            'name' => 'Kevin',
            'degree' => 'M.Psi.',
            'session' => 45,
            'experience' => 2,
            'status' => 0,
            'photo' => 'kevin.png',
            'start' => '08:00:00',
            'end' => '16:00:00',
            'workdays' => 'Senin, Selasa, Rabu, Kamis, Jumat',
            'user_id' => User::factory()->create([
                'name' => 'Kevin',
            ])->assignRole('psikolog')->id,
        ]);
        Psikolog::create([
            'name' => 'Fakhri',
            'degree' => 'M.Psi.',
            'session' => 25,
            'experience' => 3,
            'status' => 1,
            'photo' => 'fakhri.png',
            'start' => '08:00:00',
            'end' => '16:00:00',
            'workdays' => 'Senin, Selasa, Rabu, Kamis, Jumat',
            'user_id' => User::factory()->create([
                'name' => 'Fakhri',
            ])->assignRole('psikolog')->id,
        ]);
        Psikolog::create([
            'name' => 'Bella',
            'degree' => 'M.Psi.',
            'session' => 50,
            'experience' => 3,
            'status' => 1,
            'photo' => 'bella.png',
            'start' => '08:00:00',
            'end' => '16:00:00',
            'workdays' => 'Senin, Selasa, Rabu, Kamis, Jumat',
            'user_id' => User::factory()->create([
                'name' => 'Bella',
            ])->assignRole('psikolog')->id,
        ]);
    }
}
