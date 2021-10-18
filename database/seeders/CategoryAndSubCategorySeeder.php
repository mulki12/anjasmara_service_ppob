<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class CategoryAndSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'uuid' => Uuid::uuid4(),
            'code_category' => 'PRABAYAR',
            'name_category' => 'PRABAYAR'
        ])->subcategories()->create([
            'uuid' => Uuid::uuid4(),
            'code_sub_category' => 'TSEL',
            'name_sub_category' => 'Telkomsel'
        ]);
    }
}
