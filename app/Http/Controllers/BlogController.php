<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class BlogController extends Controller
{
    public function index()
    {
        $artikels = Artikel::all(); // Ambil semua artikel
        return view('blog', compact('artikels')); // Pastikan nama view sesuai
    }
}