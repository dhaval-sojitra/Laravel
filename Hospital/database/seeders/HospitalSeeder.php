<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hospital;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = collect(
            [["id"=>100,"name"=>"Dhaval Sojitra","number"=>12456546,"deseases"=>"fdfsdf fsfF  waar","medicines"=>"fsf gsfd dsgdg g","slug"=>"gdgg  sgdsfeesre sdfsd"]]);
            $data->map(function ($datum)
            {
                  Hospital::create($datum);
            });

    }
}
