<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Service;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $services = [
            ['name' => 'consultation generale'],
            ['name' => 'consultation pediatrique'],
            ['name' => 'service laboratoire'],
            ['name' => 'consultation gynecologique'],
            ['name' => 'consultation de couple'],
            ['name' => 'consultation prenatale'],
             ['name' => 'echographie'],
            ['name' => 'kinesitherapie'],
            ['name' => 'orl'],
            ['name' => 'petite chirurgie'],
        ];
   // Insertion dans la table 'countries'
        DB::table('services')->insert($services);
    }
}
