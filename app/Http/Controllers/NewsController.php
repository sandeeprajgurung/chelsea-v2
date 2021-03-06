<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Type;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        $col_name = [
            "Added By",
            "Headline",
            "Type",
            "Status",
            "Created Date",
            "Action"
        ];
        $status = "news";
        return view('admin.views.news.index', compact('news', 'col_name', 'status'));
        // return view('admin.views.news.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        return view('admin.views.news.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'newsHeading' => 'required',
            'editor' => 'required',
            'newsType' => 'required',
            // 'status' => 'required',
        ]);

        $news = new News;
        $news->headline = $request->newsHeading;
        $news->content = $request->editor;
        $news->type = $request->newsType;
        $news->status = "publish";
        $news->user_id = auth()->user()->id;
        $news->save();

        return redirect()->route('admin.views.news.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
