<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // Fitur 3: Beri Ulasan & Rating
    public function store(Request $request, $serviceId)
    {
        // validasi input ulasan dan rating
        $request->validate([
            'rating'  => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:500',
        ]);

        // cari jasa berdasarkan
        $service = Service::findOrFail($serviceId);

        // Menyimpan ulasan dan rating ke tabel pivot 'reviews' menggunakan relasi many-to-many
        $service->reviewers()->attach(auth()->id(), [
            'rating'  => $request->rating,
            'comment' => $request->comment,
        ]);

        // Redirect kembali ke halaman detail jasa dengan pesan sukses
        return back()->with('success', 'Ulasan dan rating berhasil dikirim!');
    }
}
