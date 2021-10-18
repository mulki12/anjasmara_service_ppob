<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Provider;
use Illuminate\Http\Request;

use function App\Http\clearNumberPhone;

class ProviderController extends Controller
{
    public function getProvider($number_phone)
    {

        $codeProvider = clearNumberPhone($number_phone);
        $nameProvider = Provider::where('provider_phone_code', $codeProvider)->first();

        if ($nameProvider) {
            return response()->json([
                'status'  => true,
                'message' => 'success',
                'data'    => $nameProvider
            ]);
        } else {
            return response()->json([
                'status'  => false,
                'message' => 'provider not found',
                'data'    => $nameProvider
            ], 404);
        }

    }
}
