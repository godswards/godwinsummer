<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Price;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prices = [
            [
                'brands_id' => '1',
                'price' => '48678.34',
            ],
            [
                'brands_id' => '2',
                'price' => '12312.62',
            ],
        ];

        foreach($prices as $price) {
            Price::create($price);
        }
    }
    
}
