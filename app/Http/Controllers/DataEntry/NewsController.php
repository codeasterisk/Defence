<?php

namespace App\Http\Controllers\DataEntry;

use App\Http\Traits\NewsOperation;
use App\Http\Controllers\Controller;
use App\News;
use Auth;
use Alert;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    use NewsOperation;

    /**
     * Data Entry Middleware For News Operation
     * @return void
     */
    public function __construct()
    {
        $this->middleware('EntryMiddleware');
    }

    /**
     * Display a listing of the News He Added.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::where('user_id',Auth::user()->id)->OrderBy('id','desc')->get();
        activity()->log('زيارة صفحة الاخبار التي قام باضافتها ');
        return view('DataEntry.News.index')
            ->with('news',$news);
    }

    /**
     * Show the form for creating a new News.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        activity()->log('زيارة صفحة اضافة خبر جديد ');
        return view('DataEntry.News.add');
    }

    /**
     * Register a New News Record.
     *
     * @param $request
     */
    public function register ($request)
    {

        try {
            $slug=make_slug($request->title,'-');
            if ($request->img != null)
            {
                if ($request->hasFile('img')) {
                    $img = uploader($request,'img');
                }
            }
            News::create([
                'prefix' =>$request->title,
                'cat_id' =>$request->cat_id,
                'user_id' =>Auth::user()->id,
                'title' =>$request->title,
                'description' =>$request->description,
                'img' =>$img,
                'subject' =>$request->subject,
                'status' =>$request->status,
                'writer'=>Auth::user()->name,
                'slug' =>$slug,
            ]);

        }
        catch(ValidationException $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/editors/news');
        }
        catch(\Exception $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/editors/news');
        }
    }

    /**
     * Store a newly created News in Database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'prefix' =>'required|string|max:255',
            'cat_id' =>'required|string|exists:categories,id',
            'title' =>'required|string|max:255',
            'description' =>'required|string|max:160',
            'subject' =>'required|string',
            'img' =>'required|image|mimes:jpeg,jpg,png,gif|max:100000',
            'status' =>'required',
        ]);
        $this->register($request);
        Alert::success('عظيم','تم اضافة خبر جديد بنجاح');
        activity()->log('اضاف خبر جديد بنجاح بعنوان '.$request->title);
        return redirect('/editors/news');
    }


    /**
     * Show the form for editing the specified New.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new = News::where('user_id',Auth::user()->id)->find($id);
        if(!$new)
            return redirect('/editors/news');
        activity()->log('زيارة صفحة تعديل خبر بعنوان '.$new->title);
        return view('DataEntry.News.edit')
            ->with('new',$new);
    }

    public function UpdateRecords($new, $request)
    {
        try {
            if ($request->img != null)
            {
                if ($request->hasFile('img')) {
                    $img = uploader($request,'img');
                    $new->update(['img' => $img]);
                }
            }
            $slug=make_slug($request->title,'-');
            $new->update([
                'prefix' =>$request->title,
                'cat_id' =>$request->cat_id,
                'user_id' =>Auth::user()->id,
                'title' =>$request->title,
                'description' =>$request->description,
                'subject' =>$request->subject,
                'status' =>$request->status,
                'writer'=>Auth::user()->name,
                'slug' =>$slug,

            ]);

        }
        catch(ValidationException $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/editors/news');
        }
        catch(\Exception $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/editors/news');
        }
    }

    /**
     * Update the specified News in Database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $new = News::where('user_id',Auth::user()->id)->find($id);
        if(!$new)
            return redirect('/editors/news');

        $this->validate($request, [
            'prefix' =>'required|string|max:255',
            'cat_id' =>'required|string|exists:categories,id',
            'title' =>'required|string|max:255',
            'description' =>'required|string|max:160',
            'subject' =>'required|string',
            'img' =>'sometimes|image|mimes:jpeg,jpg,png,gif|max:100000',
            'status' =>'required',
        ]);

        //update News Record
        $this->UpdateRecords($new,$request);
        Alert::success('عظيم','تم تعديل هذا الخبر  بنجاح');
        activity()->log(' قام بتعديل خبر بعنوان '.$new->title);
        return redirect('/editors/news');
    }

}
