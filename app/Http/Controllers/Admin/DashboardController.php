<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateFirstAdminRequest;
use App\Page;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

class DashboardController extends Controller
{
    /**
     * Display the main dashboard page
     *
     * @return Response
     */
    public function index()
    {
        $posts_without_image = Post::whereNull('image')->count();
        $pages_without_image = Page::whereNull('image')->count();
        return view('admin.index')
            ->with('posts_without_image', $posts_without_image)
            ->with('pages_without_image', $pages_without_image);
    }
}
