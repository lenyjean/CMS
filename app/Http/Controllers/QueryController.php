<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueryController extends Controller
{
    //
    public function listparams()
    {
        $data =[
            'paramname' => 'misty',
            'paramdescription' => 'pomeranian'
        ];

            return view ("param.listparams', [
                'data' => $data
            ]);
        }
    }

    
}
