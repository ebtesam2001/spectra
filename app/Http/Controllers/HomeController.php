<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ContentMangment;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Project;
use App\Models\News;
use App\Models\Team;

class HomeController extends Controller
{
    public function contentmangment()
    {
        $contentmangments = ContentMangment::orderBy('id', 'ASC')->get();
    }

    public function team()
    {
        $teams = Team::orderBy('id', 'ASC')->get();
    }
    public function news()
    {
        $news = News::orderBy('id', 'ASC')->take(4)->get();
    }

    public function project()
    {
        $projects = Project::orderBy('id', 'ASC')->take(3)->get();
    }

    public function category()
    {
        $category = Category::orderBy('id', 'ASC')->take(3)->get();
    }

}
