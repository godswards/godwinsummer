<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brands;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            [
                'price_id' => '1',
                'name' => 'AlienWare',
                'specs' => 'i5 12600k',
            ],
            [
                'price_id' => '2',
                'name' => 'Predator',
                'specs' => 'i3 1115g4',
            ]
        ];
        foreach($brands as $brand) {
            Brands::create($brand);
        }
    }
}
