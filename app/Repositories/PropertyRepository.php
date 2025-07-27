<?php 
namespace App\Repositories;

use App\Models\Property;

class PropertyRepository
{
    public function index()
    {
        return Property::latest()->get();
    }

    public function create(array $data)
    {
        return Property::create($data);
    }

    public function find($id)
    {
        return Property::findOrFail($id);
    }

    public function update($id, array $data)
    {
        $property = Property::findOrFail($id);
        $property->update($data);
        return $property;
    }

    public function delete($id)
    {
        return Property::destroy($id);
    }

    public function count (){
        return Property::count();
    }
}

