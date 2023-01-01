<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function pageProducts()
    {
        return view('public.products.index');
    }

    public function pageProductOverview(Entity $product)
    {
        return view('public.products.overview');
    }

    public function pageServices()
    {
        return view('public.services.index');
    }

    public function pageServiceOverview(Entity $service)
    {
        return view('public.services.overview', compact('service'));
    }

    public function pageWorks()
    {
        return view('public.works.index');
    }

    public function pageWorkOverview(Entity $work)
    {
        return view('public.works.overview');
    }

    public function pageBlog()
    {
        return view('public.blog.index');
    }

    public function pageBlogOverview(Post $post)
    {
        return view('public.blog.overview');
    }

}
