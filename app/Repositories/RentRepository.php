<?php

namespace App\Repositories;

use App\Models\Rent;

class RentRepository
{
    public function index()
    {
        return Rent::latest()->get();
    }

    public function create(array $data)
    {
        return Rent::create($data);
    }

    public function find($id)
    {
        return Rent::findOrFail($id);
    }

    public function update($id, array $data)
    {
        $rent = Rent::findOrFail($id);
        $rent->update($data);
        return $rent;
    }

    public function delete($id)
    {
        return Rent::destroy($id);
    }

    public function filter($type)
    {
        if ($type === 'all') {
            return Rent::latest()->get();
        }

        return Rent::where('type', $type)->latest()->get();
    }

    public function count (){
        return Rent::count();
    }

  

   
}
