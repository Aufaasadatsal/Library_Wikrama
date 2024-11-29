<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanAdminController extends Controller
{
    public function index()
    {
        return view('admin.peminjaman');
    }

    public function create(Request $request)
    {
        return view('admin.peminjaman.create');
    }

    public function store(Request $request)
    {
        //
    }
}
