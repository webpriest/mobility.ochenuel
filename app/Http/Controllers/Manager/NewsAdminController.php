<?php

namespace App\Http\Controllers\Manager;

use App\Models\NewsPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\NewsPostStoreRequest;
use App\Http\Requests\NewsPostUpdateRequest;

class NewsAdminController extends Controller
{
    public function index()
    {
        $posts = NewsPost::latest()->get();

        return view('manager.news.index', compact('posts'));
    }

    public function create()
    {
        return view('manager.news.create');
    }

    public function show(NewsPost $post)
    {
        return view('manager.news.show', compact('post'));
    }

    public function store(NewsPostStoreRequest $request)
    {
        $post = new NewsPost;
        $post->title = $request->title;
        $post->sub_title = $request->sub_title;
        $post->content = $request->content;
        $post->author = $request->author;
        $post->news_date = $request->news_date;

        if($request->hasFile('photo')) {
            $post->photo = $request->file('photo')->store('images/news', 'public');
        }

        $post->save();

        return redirect()->route('manager.news.index')->withSuccess('News added');
    }

    public function edit(NewsPost $post)
    {
        return view('manager.news.edit', compact('post'));
    }

    public function update(NewsPostUpdateRequest $request, NewsPost $post)
    {
        $post->title = $request->title;
        $post->sub_title = $request->sub_title;
        $post->content = $request->content;
        $post->author = $request->author;
        $post->news_date = $request->news_date;

        if($request->hasFile('photo')) {
            if(Storage::disk('public')->exists($post->photo)) {
                unlink("storage/".$post->photo);
            }
            $post->photo = $request->file('photo')->store('images/news', 'public');
        }

        $post->update();

        return redirect()->route('manager.news.index')->withSuccess('News updated');
    }

    public function destroy(NewsPost $post)
    {
        // Delete photo
        if(Storage::disk('public')->exists($post->photo)) {
            unlink("storage/".$post->photo);
        }
        
        $post->delete();

        return redirect()->route('manager.news.index')->withSuccess('News deleted');
    }
}
