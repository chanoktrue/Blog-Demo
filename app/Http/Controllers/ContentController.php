<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Content;
use App\Http\Requests\ContentRequest;

class ContentController extends Controller
{
    public function index() {
        $contents = Content::all();
        return view('content.index', compact('contents'));
    }

    public function create() {
        $content = new Content;
        return view('content.form', compact('content'));
    }

    public function store(ContentRequest $request ) {
        $content = new Content;
        $content->topic = $request->topic;
        $content->description = $request->description;
        $content->tags = $request->tags;
        $content->user_id = 1;
        $content->save();

        return redirect('/content');
    }

    public function edit($id) {
        $content = Content::findOrFail($id);
        return view('content.form', compact('content'));
    }

}
