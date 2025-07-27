<?php 
namespace App\Repositories;

use App\Models\Article;

class ArticleRepository
{
    public function index()
    {
        return Article::latest()->paginate(10);
    }

    public function find($id)
    {
        return Article::findOrFail($id);
    }

  

    public function create(array $data)
    {
        return Article::create($data);
    }

    public function update($id, array $data)
    {
        $article = Article::findOrFail($id);
        $article->update($data);
        return $article;
    }

    public function delete($id)
    {
        return Article::destroy($id);
    }

    public function findBySlug($slug)
{
    return Article::where('slug', $slug)->firstOrFail();
}

public function count (){
    return Article::count();
}

 

}
