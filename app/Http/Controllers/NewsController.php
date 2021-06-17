<?php

namespace App\Http\Controllers;
use App\Models\ProductType;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\User;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getNews()
    {
        $type=ProductType::orderBy('id','DESC')->get();
        $news=News::orderBy('id','DESC')->paginate(4);
        return view('News',compact('type','news'));
    }
    public function getChitietNews($id){
        $type=ProductType::orderBy('id','DESC')->get();
     $news=News::where('id',$id)->first();
     $news_tuongtu=News::orderBy('id','DESC')->paginate(3);
     $news_truoc_sau=News::orderBy('id','DESC')->paginate(2);
     return view('chitietnews',compact('type','news','news_tuongtu','news_truoc_sau'));
    }
    public function index(){
        $news=News::orderBy('id','DESC')->paginate(4);
        return view('admin.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news=News::where('id')->orderBy('id','DESC')->get();
        return view('admin.news.create')->with(compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        News::create($request->all());
        return  redirect()->route ('news.index')->with('success','Đã thêm thành công.');
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
    public function edit(News $news)
    {
       
        return view('admin.news.edit')->with(compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        
        $news->update($request->only('id','title','content','image'));
    
        return  redirect()->route ('news.index')->with('success','Đã thêm thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =News::where('id',$id);
        $post->delete();
          return redirect()->route('news.index')->with('success','Dữ liệu xóa thành công.');
    }
//lien he
    public function getContact(){
        $type=ProductType::orderBy('id','DESC')->get();
        $contact=User::orderBy('id','DESC')->get();
        return view('lienhe',compact('type','contact'));
    }
}
