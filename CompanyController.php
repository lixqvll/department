<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
    

/**class CompanyController extends Controller
{
    public function cmp()
    {
        $data = ["Apple", "Google"];

        return view('company', compact('data'));
    }
}
class CompanyController extends Controller
{
    public function camps()
    {
        $data = ["Apple", "Google"];

        return view('company', compact('data'));
    }
}
**/ 
class CompanyController extends Controller
{
    public function my_depts()
    {
        $d1 = "HR";
        $d2 = "IT";
        $d3 = "Finance";
        $d4 = "Marketing";

        return view('depts', compact('d1','d2','d3','d4'));
    }
}
