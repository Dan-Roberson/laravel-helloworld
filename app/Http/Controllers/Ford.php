<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Ford extends Controller
{
    public function show(Request $request, $vehicleModel = null)
    {
        $vm = $request->input('model');
        $msg = 'Example: /Ford/truck?model=f250';

        if ($vehicleModel != null)
        {
            $msg = $vehicleModel;
        }

        return view('Ford', ['vehicleModel' => $vm]);
    }
}
