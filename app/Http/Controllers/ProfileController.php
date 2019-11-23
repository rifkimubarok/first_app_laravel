<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return "Ini halaman profile";
    }

    public function detail()
    {
        $nama = "Rifki Mubarok";
        return view("profile.detail",compact("nama"));
    }
}
