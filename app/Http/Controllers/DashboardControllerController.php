<?php

namespace App\Http\Controllers;

use App\Models\DashboardController;
use Illuminate\Http\Request;

class DashboardControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumlahMahasiswa = DB::select('SELECT p.nama_prodi, COUNT(*) as jumlah
        FROM mahasiswa m
        JOIN prodi p ON m.prodi_id = p.id
        GROUP BY p.nama_prodi

        ');
        return view('dashboard', compact('jumlahMahasiswa'));
    }
}
