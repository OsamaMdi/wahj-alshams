<?php

namespace App\Http\Controllers;

use App\Models\Teamwork;
use App\Models\Masrahiya;
use App\Models\Statistic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function detailsMasrahiyat($id)
    {
        $masrahiyat = Masrahiya::findOrFail($id);
        return view('user.details-masrahiyat', compact('masrahiyat'));
    }

    public function home()
    {
        $masrahiyat = Masrahiya::latest()->take(8)->get();
        $total = Masrahiya::count();
        $teamwork = Teamwork::where('home', true)->take(4)->get();

        return view('user.index', compact('masrahiyat', 'total', 'teamwork'));
    }


    public function loadMasrahiyatPage($page)
    {
        $limit = 8;
        $offset = ($page - 1) * $limit;
        $masrahiyat = Masrahiya::latest()->offset($offset)->limit($limit)->get();

        $html = View::make('user.partials.home-masrahiyat-cards', compact('masrahiyat'))->render();

        return response()->json(['html' => $html]);
    }

    public function about()
    {
        $team = Teamwork::all();
        $statistics = Statistic::latest()->first();
        return view('user.about', compact('team', 'statistics'));
    }
}
