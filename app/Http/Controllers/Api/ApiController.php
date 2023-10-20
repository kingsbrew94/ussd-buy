<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Portal;
use Exception;
use Illuminate\Http\Request;

class ApiController extends Controller
{
  
    public function checkStatus(Request $request)
    {
        $response = array('number' => $request->get('phoneNumber'),'statusCode' => 1);
        $error_msg = 'Phone number not listed';
        try {
            if($request->exists('phoneNumber')) {
                $portal = Portal::where("phoneNumber",$request->get('phoneNumber'))->first();
                $response['message'] = strtoupper($portal->status) === 'BLACKLISTED' ? 'blocked': 'active';
            } else throw new Exception($error_msg);
        } catch(Exception $ignored) { $response['message'] = $error_msg; }
        return $response;
    }

}
