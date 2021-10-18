<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vendor::create([
            'uuid' => Uuid::uuid4(),
            'name_vendor' => 'DIGIFLAZZ',
            'contact_vendor' => json_encode(['phone' => '085332829440', 'email' => 'email@email.com']),
            'data' => json_encode(['api_key' => '123xxxx123', 'base_url' => 'http://baseurl.xxx/xxx']),
            'registered_date' => '2020-10-29'
        ]);
    }
}
