<?php

namespace App\Http\Controllers;

use App\Services\PropertyService;
use App\Services\RentService;
use App\Services\ArticleService;

class PageController extends Controller
{
    protected $properties;
    protected $rents;
    protected $articles;

    public function __construct(PropertyService $properties, RentService $rents,ArticleService $articles)
    {
        $this->properties = $properties;
        $this->rents = $rents;
        $this->articles = $articles;
    }

    public function property()
    {
        $properties = $this->properties->index(); // ambil semua data rental
        return view('pages.property', compact('properties'));
    }

    public function rent()
    {
        $rents = $this->rents->index(); // Ambil data dari RentService
        return view('pages.rent', compact('rents'));
    }

    public function articles (){
        $articles = $this->articles->index();
        return view ('pages.article',compact('articles'));
    }



}

