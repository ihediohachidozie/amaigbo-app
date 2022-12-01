<?php

namespace Database\Seeders;

use App\Models\Electioncontrol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ElectionControlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Electioncontrol::create([
            'electioncontrol' => 0
        ]);
    }
}
