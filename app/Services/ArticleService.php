<?php 
namespace App\Services;

use App\Repositories\ArticleRepository;

class ArticleService
{
    protected $repo;

    public function __construct(ArticleRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        return $this->repo->index();
    }

    public function find($id)
    {
        return $this->repo->find($id);
    }

    public function create(array $data)
    {
        return $this->repo->create($data);
    }

    public function update($id, array $data)
    {
        return $this->repo->update($id, $data);
    }

    public function delete($id)
    {
        return $this->repo->delete($id);
    }

    public function findBySlug($slug)
{
    return $this->repo->findBySlug($slug);
}

 public function getArticleCount(){
        return $this->repo->count();
    }


  


    


  
}
