<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $data["rebus"] = "<i>mie rebus..</i> eh puasa...";
        $data["goreng"] = "mie goreng.. eh puasa...";

        return view('site', $data);
    }
}
