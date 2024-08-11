<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index()
    {
        $items = Portofolio::latest()->get();
        return view('frontend.pages.portofolio.index', [
            'title' => 'Portofolio',
            'items' => $items
        ]);
    }

    public function show($id)
    {
        $item = Portofolio::findOrFail($id);
        return view('frontend.pages.portofolio.show', [
            'title' => 'Detail Portofolio',
            'item' => $item
        ]);
    }
}
