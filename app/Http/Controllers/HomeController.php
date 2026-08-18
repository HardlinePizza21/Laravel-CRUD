<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    // public function about(): View
    // {

    //     $data = [
    //         'title' => 'About us - Online Store',
    //         'subtitle' => 'About us',
    //         'desc' => 'This is an about page ...',
    //         'author' => 'Samuel Madrid Ossa',
    //     ];

    //     return view('home.about')->with('data', $data);
    // }

    // public function contact(): View
    // {

    //     $data = [
    //         'title' => 'aaa',
    //         'subtitle' => 'bbb',
    //         'address' => 'Calle 38 A...',
    //         'telephone' => '+57 300 725',
    //         'name' => 'Samuel Madrid Ossa',
    //     ];

    //     return view('home.contact')->with('data', $data);
    // }
}
