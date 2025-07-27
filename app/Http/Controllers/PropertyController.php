<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PropertyService;

class PropertyController extends Controller
{
    protected $property;

    public function __construct(PropertyService $property)
    {
        $this->property = $property;
    }

    public function index()
    {
        $properties = $this->property->index();
        return view('admin.properties.index', compact('properties'));
    }

    public function create()
    {
        return view('admin.properties.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'price' => 'required|integer',
            'description' => 'required|string',
            'image' => 'required|image|max:2048',
        ]);

        $data['image'] = $request->file('image')->store('properties', 'public');

        $this->property->create($data);

        return redirect()->route('properties.index')->with('success', 'Property berhasil ditambahkan');
    }

    public function edit($id)
    {
        $property = $this->property->find($id);
        return view('admin.properties.edit', compact('property'));
    }

    public function show($id)
    {
        $property = $this->property->find($id);
        return view('admin.properties.show', compact('property'));
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'price' => 'required|integer',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('properties', 'public');
        }

        $this->property->update($id, $data);

        return redirect()->route('properties.index')->with('success', 'Property berhasil diperbarui');
    }

    public function destroy($id)
    {
        $this->property->delete($id);
        return redirect()->route('properties.index')->with('success', 'Property berhasil dihapus');
    }
}
