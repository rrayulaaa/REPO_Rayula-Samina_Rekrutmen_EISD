<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $query = Service::with(['user', 'category']);

        // Fitur 4: Pencarian & Filter
        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        if ($request->has('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        $services = $query->latest()->get();
        $categories = Category::all();

        return view('services.index', compact('services', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('services.create', compact('categories'));
    }

    // Fitur 2: Tambah Jasa (Validasi & Flash Message)
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title'       => 'required|string|max:255',
            'price'       => 'required|numeric|min:0',
            'description' => 'required|string',
        ]);

        Service::create([
            'user_id'     => auth()->id(),
            'category_id' => $request->category_id,
            'title'       => $request->title,
            'price'       => $request->price,
            'description' => $request->description,
        ]);

        return redirect()->route('services.index')->with('success', 'Penawaran jasa berhasil ditambahkan!');
    }

    public function show($id)
    {
        $service = Service::with(['user', 'category', 'reviewers'])->findOrFail($id);
        return view('services.show', compact('service'));
    }
}
