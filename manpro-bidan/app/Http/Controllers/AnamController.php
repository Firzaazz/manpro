<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anamnesis; // Sesuaikan dengan namespace dan nama model yang benar

class AnamnesisController extends Controller
{
    public function index()
    {
        $anamnesis = Anamnesis::all();

        return view('anamnesis.index', compact('anamnesis'));
    }
}
