<?php

namespace App\Http\Controllers;

use App\Models\Masrahiya;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('user.index', compact('masrahiyat', 'total'));
    }

    public function loadMasrahiyatPage($page)
    {
        $limit = 8;
        $offset = ($page - 1) * $limit;
        $masrahiyat = Masrahiya::latest()->offset($offset)->limit($limit)->get();

        $html = View::make('user.partials.home-masrahiyat-cards', compact('masrahiyat'))->render();

        return response()->json(['html' => $html]);
    }
}
