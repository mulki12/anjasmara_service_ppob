<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Product::create([
            'uuid' => Uuid::uuid4(),
            'code_product' => 'TSEL5K',
            'name_product' => 'TELKOMSEL 5K',
            'vendor_price_product' => 5650,
            'profit_product' => 200,
            'data' => json_encode(['status' => true]),
            'vendor_uuid' => null,
            'category_uuid' => null,
            'sub_category_uuid' => null
        ])->histories()->create([
            'uuid' => Uuid::uuid4(),
            'selling_price_history' => 5850
        ]);
    }
}
