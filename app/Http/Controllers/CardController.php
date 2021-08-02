<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Card;
use App\Models\Single;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index()
    {
        $cards = Card::get();

        return view('home', compact('cards'));
    }

    public function show($id)
    {
        $single = Card::where('id', $id)->firstOrFail();

        return view('single-product', compact('single'));
    }


    public function right()
    {
        $singles = Single::get();

        return view('single-product', compact('singles'));
    }


}
