<?php

namespace App\Http\Controllers;

use App\Services\ArticleService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    protected $article;

    public function __construct(ArticleService $article)
    {
        $this->article = $article;
    }

    public function index()
    {
        $articles = $this->article->index();
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $validated['slug'] = Str::slug($validated['title']) . '-' . uniqid();

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('articles', 'public');
        }

        $this->article->create($validated);

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil ditambahkan');
    }

    public function edit($id)
    {
        $article = $this->article->find($id);
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $validated['slug'] = Str::slug($validated['title']) . '-' . uniqid();

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('articles', 'public');
        }

        $this->article->update($id, $validated);

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil diperbarui');
    }

    public function destroy($id)
    {
        $this->article->delete($id);
        return redirect()->route('articles.index')->with('success', 'Artikel berhasil dihapus');
    }

  public function show($slug)
{
    $article = $this->article->findBySlug($slug);
    return view('admin.articles.show', compact('article'));
}






}
