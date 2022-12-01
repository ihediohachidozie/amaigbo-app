<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $offices = array("the governor", "1st deputy governor", "2nd deputy governor", "secretary general", "asst. secretary general",
        "treasurer", "financial secretary", "public relation officer", "welfare officer", 'provost');

        foreach ($offices as $office) {
            DB::table('offices')->insert([
                'name' => $office,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
