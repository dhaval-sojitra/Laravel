<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mypro;
use Illuminate\Support\Str;

class MyproSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $data = collect(
            [
                ["name" => "dhaval", "city" => "surat", "phone" => 234532, "address" => "surat varacha","slug"=>Str::slug("name".'-'.rand())],
                ["name" => "keval", "city" => "surat", "phone" => 234532, "address" => "surat varacha","slug"=>Str::slug("name".'-'.rand())]
            ]
        );
        $data->map(function ($item) {
            Mypro::create($item);
        });
    }
}
