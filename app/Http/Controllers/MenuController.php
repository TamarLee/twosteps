<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    public function showMenu(){
    	$menu = Menu::all();

    	return view('home', ['menu' => $menu]);
    }
}
