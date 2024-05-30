<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Project;
use App\Models\Category;
use App\Models\Client;
use App\Models\ContentMangment;
use App\Models\HeroSection;
use App\Models\News;
use App\Models\Product;
use App\Models\Team;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class PageController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function home()
    {
        $projects=Project::take(3)->get();
        // dd($projects);
        $contentmangments = ContentMangment::get();
        $herosections = HeroSection::get();
        $category = Category::with('product')->take(3)->get();
        // dd($category->toArray());
        $about =About::first();
        // dd($about);
        $news = News::take(4)->get();
        $teams = Team::get();
        return Inertia::render('home',[
            'projects'=>$projects,
            'contentmangments'=>$contentmangments,
            'herosections'=>$herosections,
            'category'=>$category,
            'news'=>$news,
            'teams'=>$teams,
            'about'=>$about,
        ]);
    }
    public function about()
    {
        $about = About::get();
        // dd($about->toArray());
        return Inertia::render('about',[
            'about'=>$about,
        ]);
    }

    public function project()
    {
        $projects = Project::get();
        // dd($projects->toArray());
        return Inertia::render('project',[
            'projects'=>$projects,
        ]);
    }

    public function business()
    {
        $categories = Category::with('product')->get();
        // dd($categories->toArray());
        $products = Product::get();
        return Inertia::render('business',[
            'products'=>$products,
            'categories'=>$categories,
        ]);
    }

    public function client()
    {
        $clients = Client::get();
        return Inertia::render('client',[
            'clients'=>$clients,
        ]);
    }

    public function news()
    {
        $news = News::get();
        return Inertia::render('news',[
            'news'=>$news,
        ]);
    }


    public function contact()
    {
        return Inertia::render('contact');
    }
}
