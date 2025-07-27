<?php

namespace App\Http\Controllers;

use App\Services\RentService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Rent;


class RentController extends Controller
{
    protected $rent;

    public function __construct(RentService $rent)
    {
        $this->rent = $rent;
    }

    public function index()
    {
        $rents = $this->rent->index();
        return view('admin.rents.index', compact('rents'));
    }

    public function create()
    {
        return view('admin.rents.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'type' => 'required|in:mobil,motor',
            'brand' => 'required|string',
            'plate' => 'required|string|unique:rents',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|image|max:2048',
            'status' => 'nullable|in:tersedia,disewa,maintenance',
        ]);

        $validated['slug'] = Str::slug($validated['name'] . '-' . uniqid());

        // Simpan gambar
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('rents', 'public');
        }

        $this->rent->create($validated);

        return redirect()->route('rents.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $rent = $this->rent->find($id);
        return view('admin.rents.edit', compact('rent'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'type' => 'required|in:mobil,motor',
            'brand' => 'required|string',
            'plate' => 'required|string|unique:rents,plate,' . $id,
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'status' => 'nullable|in:tersedia,disewa,maintenance',
        ]);

        $validated['slug'] = Str::slug($validated['name'] . '-' . uniqid());

        // Simpan gambar jika ada
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('rents', 'public');
        }

        $this->rent->update($id, $validated);

        return redirect()->route('rents.index')->with('success', 'Data berhasil diperbarui');
    }

    public function show($id)
    {
        $rent = Rent::findOrFail($id);
        return view('admin.rents.show', compact('rent'));
    }


    public function destroy($id)
    {
        $this->rent->delete($id);
        return redirect()->route('rents.index')->with('success', 'Data berhasil dihapus');
    }

    
public function filter($type)
{
    $rents = $this->rent->filter($type);

    // Kirim data ke frontend view 'pages.rent'
    return view('pages.rent', compact('rents', 'type'));
}





 
   
}
