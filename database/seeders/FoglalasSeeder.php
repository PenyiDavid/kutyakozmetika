<?php

namespace Database\Seeders;

use App\Models\Foglalas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FoglalasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('foglalasok')->insert([
            [
                'nev' => 'John Doe',
                'datum' => '2025-01-30',
                'ido' => '14:15',
            ],
            [
                'nev' => 'John Doe',
                'datum' => '2025-01-30',
                'ido' => '15:15',
            ],
        ]);

        Foglalas::factory(1000)->create();
    }
}
