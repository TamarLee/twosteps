<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Tag;
use App\Recepie;

class MenuController extends Controller
{
    public function showMenu(){
    	$menu = Menu::all();
    	$tag = Tag::all();
    	$recepie = Recepie::paginate(8);
    	$rec = Recepie::all();

    	return view('home', ['menu' => $menu, 'tag' => $tag, 'recepie' => $recepie, 'rec' => $rec]);
    }
}
