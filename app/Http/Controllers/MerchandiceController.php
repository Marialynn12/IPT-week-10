<?php

namespace App\Http\Controllers;

use App\Merchandice;
use Illuminate\Http\Request;

class MerchandiceController extends Controller
{




    public function index()
    {
        $merchadices = Merchandice::all();

        return view('pages.merchandices', ['merchandices' => $merchadices]);
    }


}
