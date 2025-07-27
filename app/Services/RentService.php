<?php

namespace App\Services;

use App\Repositories\RentRepository;

class RentService
{
    protected $repo;

    public function __construct(RentRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        return $this->repo->index();
    }

    public function create(array $data)
    {
        return $this->repo->create($data);
    }

    public function find($id)
    {
        return $this->repo->find($id);
    }

    public function update($id, array $data)
    {
        return $this->repo->update($id, $data);
    }

    public function delete($id)
    {
        return $this->repo->delete($id);
    }

    public function filter($type)
    {
        return $this->repo->filter($type);
    }

    public function getTotalRents(){
        return $this->repo->count();
    }

   

    
   
    
}
