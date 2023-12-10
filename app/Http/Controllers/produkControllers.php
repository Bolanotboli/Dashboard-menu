<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penawaran;

class produkControllers extends Controller
{
    //
    public function index() {
        $penawarans = Penawaran::all();
        return view('produk', compact('penawarans'));
    }

    public function edit($id) {
        //
    }

    public function destroy($edit) {
        //
    }
}
