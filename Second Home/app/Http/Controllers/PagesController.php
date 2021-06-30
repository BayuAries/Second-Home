<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
      return view('owner.home');
    }

    public function update()
    {
      return view('owner.update');
    }

    public function admin()
    {
      return view('admin.admin');
    }

    public function welcome()
    {
      return view('welcome');
    }

    public function cari()
    {
      return view('guest.utama');
    }
}
