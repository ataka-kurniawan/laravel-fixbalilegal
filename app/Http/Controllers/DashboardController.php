<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RentService;
use App\Services\ArticleService;
use App\Services\PropertyService;
class DashboardController extends Controller
{
    protected RentService $rentservice;
    protected ArticleService $articleService;

    protected PropertyService $propertyService;

    public function __construct(RentService $rentservice, ArticleService $articleService, PropertyService $propertyService)
    {
        $this->rentservice = $rentservice;
        $this->articleService = $articleService;
        $this->propertyService = $propertyService;
    }

    public function index()
    {
        $rents = $this->rentservice->getTotalRents();
        $properties = $this->propertyService->getPropertyCount();
        $articles = $this->articleService->getArticleCount();
        return view('admin.dashboard', compact(['rents', 'articles','properties']));
    }


}
