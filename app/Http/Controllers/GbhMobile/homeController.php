<?php
namespace App\Http\Controllers\GbhMobile;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class homeController extends Controller
{
    //

    public function __construct()
    {

    }
    public function home(Request $request)
    {

        return view('GbhMobile.home');
    }

    public function search(Request $request)
    {
        return view('GbhMobile.search');
    }
}

?>