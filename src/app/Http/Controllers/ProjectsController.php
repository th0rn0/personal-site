<?php

namespace App\Http\Controllers;

use Canvas\Tag;
use Canvas\Post;
use Canvas\Topic;
use Canvas\UserMeta;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Canvas\Events\PostViewed;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show Index.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('projects.index');
    }

    /**
     * Show Eventula.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function eventula()
    {
        $data = $this->getPosts('Eventula');
        return view('projects.eventula.index', compact('data'));
    }

    /**
     * Show LanOps.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function lanops()
    {
        $data = $this->getPosts('LanOps');
        return view('projects.lanops.index', compact('data'));
    }

    /**
     * Show Site.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function site()
    {
        return view('projects.site.index');
    }

    private function getPosts($slug)
    {
        $data = array();
        if (Topic::where('slug', $slug)->first()) {
            $metaData = UserMeta::forCurrentUser()->first();
            $emailHash = md5(trim(Str::lower(optional(request()->user())->email)));

            $data = [
                'avatar' => optional($metaData)->avatar && !empty(optional($metaData)->avatar) ? $metaData->avatar : "https://secure.gravatar.com/avatar/{$emailHash}?s=500",
                'tags'   => Tag::all(['name', 'slug']),
                'topics' => Topic::all(['name', 'slug']),
                'topic'  => Topic::with('posts')->where('slug', $slug)->first(),
                'posts'  => Post::whereHas('topic', function ($query) use ($slug) {
                    $query->where('slug', $slug);
                })->published()->orderByDesc('published_at')->simplePaginate(10),
            ];
        }
        return $data;
    }
}
