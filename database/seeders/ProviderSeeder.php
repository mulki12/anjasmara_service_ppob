<?php

namespace Database\Seeders;

use App\Models\Provider;
use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provider::create([
            'provider_code' => 'TSEL',
            'provider_name' => 'TELKOMSEL',
            'provider_phone_code' => '0813',
            'provider_icon' => null
        ]);

        Provider::create([
            'provider_code' => 'BYU',
            'provider_name' => 'BY.U',
            'provider_phone_code' => '0851',
            'provider_icon' => null
        ]);

        Provider::create([
            'provider_code' => 'XL',
            'provider_name' => 'XL',
            'provider_phone_code' => '0878',
            'provider_icon' => null
        ]);

        Provider::create([
            'provider_code' => 'XL',
            'provider_name' => 'XL',
            'provider_phone_code' => '0819',
            'provider_icon' => null
        ]);

        Provider::create([
            'provider_code' => 'IDST',
            'provider_name' => 'INDOSAT',
            'provider_phone_code' => '0856',
            'provider_icon' => null
        ]);
    }
}
