<?php

namespace App\Http\Controllers;

use App\Models\Peralatan;
use App\Models\Personil;
use Illuminate\Http\Request;

class ProfilePerusaahaanController extends Controller
{
    public function index()
    {
        $personils = Personil::orderBy('nama', 'ASC')->get();
        $peralatans = Peralatan::orderBy('nama', 'ASC')->get();
        return view('frontend.pages.profile-perusahaan', [
            'title' => 'Profile Perusaahaan',
            'personils' => $personils,
            'peralatans' => $peralatans
        ]);
    }
}
