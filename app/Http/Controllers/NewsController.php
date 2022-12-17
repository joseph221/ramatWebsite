<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::paginate(5);
        return view('Admin.news')->with('news',$news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = rand(1000,1322).'.'.$request->image->getClientOriginalName();
        $request->image->move('News_Image', $imageName);
        $news = News::create([
            'title'=> $request->title,
            'date'=> $request->date,
            'image'=> $imageName,
            'desc'=> $request->desc
        ]);
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id)->get()->first();
        return view('Admin.editNews',)->with('data',$news);
        
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
        $input = $request->all();
        $news = News::find($id);
        if ($image = $request->file('image')) {
            $imageName = rand(1000,1322).'.'.$request->image->getClientOriginalName();
            $request->image->move('News_Image', $imageName);
            $input['image'] = "$imageName";
        }else{
            unset($input['image']);
        }
        $news->update($input);
        return redirect()->route('adminnews.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
       $news = News::find($id);
       $news->delete();
       return back();
    }
}
