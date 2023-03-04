<?php

namespace Database\Seeders;
use DB;


use App\Models\Product;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
        $data = [
            [
                'name' => 'IPhone 14',
                'user_id' => '1',
                'category' => 'Mobile device',
                'description' => 'brand New IPhone 14 with all the gadgets and original prices',
                'price' => '1567',
            ],
            [
                'name' => 'HP Pavilion',
                'user_id' => '1',
                'category' => 'Laptop',
                'description' => 'Brand New Laptop Core i5, LED screen, laptop with 12000MAH with charger and earpiece',
                'price' => "675",
            ],
            [
                'name' => 'DELL Inspiron',
                'user_id' => '1',
                'category' => 'Laptop',
                'description' => 'Brand New Laptop Core i5, LED screen',
                'price' => "876",
            ],
            [
                'name' => 'Tecno',
                'user_id' => '1',
                'category' => 'Mobile Device',
                'description' => 'Tecno Spark 5 with charger, screen guard, earpiece and 16gig memory card',
                'price' => '450',
            ],
            [
                'name' => 'Compaq',
                'user_id' => '1',
                'category' => 'Laptop',
                'description' => 'laptop with 12000MAH with charger and earpiece',
                'price' => "980",
            ],
            [
                'name' => 'HP Desktop',
                'user_id' => '1',
                'category' => 'Desktop',
                'description' => 'Desktop computer with extra monitor',
                'price' => "980",
            ],
            [
                'name' => 'Keyboard',
                'user_id' => '1',
                'category' => 'Laptop Gadget',
                'description' => 'External bluetooth Keyboard with mouse, and keyboard light',
                'price' => '50',
            ],
        ];
            
        if (DB::table('products')->count() == 0) {
            foreach ($data as $data) {
                Product::create($data);
            }
        }

    }
}
