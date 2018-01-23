<?php

namespace App\Http\Controllers\DataEntry;

use App\Http\Traits\VideoOperation;
use App\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Alert;
class VideoController extends Controller
{
    use VideoOperation;
    /**
     * Data Entry Middleware For Video Operation
     * @return void
     */
    public function __construct()
    {
        $this->middleware('Infograph');
    }

    /**
     * Display a listing of the Videos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::where('user_id',Auth::user()->id)->OrderBy('id','desc')->get();
        activity()->log('زيارة صفحة الفيديوهات التي قام باضافتها ');
        return view('DataEntry.Videos.index')
            ->with('videos',$videos);
    }

    /**
     * Show the form for creating a new Video.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        activity()->log('زيارة صفحة اضافة فيديو جديد ');
        return view('DataEntry.Videos.add');
    }

    /**
     * Register a New Video
     *
     * @param $request
     */
    public function register ($request)
    {
        try {
            $slug=make_slug($request->title,'-');
            Video::create([
                'url' =>$request->url,
                'title' =>$request->title,
                'description'=>$request->description,
                'user_id'=>Auth::user()->id,
                'slug'=>$slug
            ]);

        }
        catch(ValidationException $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/editors/videos');
        }
        catch(\Exception $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/editors/videos');
        }
    }

    /**
     * Store a newly created Video in Database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'url' => 'required|string|max:255|url',
            'title' => 'required|string|max:255|unique:videos',
            'description' => 'required|string',
        ]);
        $this->register($request);
        Alert::success('عظيم','تم اضافة فيديو جديد بنجاح');
        activity()->log('اضاف فيديو جديد بنجاح بعنوان '.$request->title);
        return redirect('/editors/videos');
    }


    /**
     * Show the form for editing the specified Video.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = Video::where('user_id',Auth::user()->id)->find($id);
        if (!$video)
            return redirect('/editors/videos');
        activity()->log('زيارة صفحة تعديل فيديو بعنوان '.$video->title);
        return view('DataEntry.Videos.edit')
            ->with('video',$video);
    }

    public function UpdateRecords($video, $request)
    {
        try {

            $slug=make_slug($request->title,'-');

            $video->update([
                'url' =>$request->url,
                'title' =>$request->title,
                'description'=>$request->description,
                'slug'=>$slug
            ]);
        }
        catch(ValidationException $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/editors/videos');
        }
        catch(\Exception $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/editors/videos');
        }

    }

    /**
     * Update the specified Video in Database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $video = Video::where('user_id',Auth::user()->id)->find($id);
        if (!$video)
            return redirect('/editors/videos');
        $this->validate($request, [
            'url' => 'required|string|max:255',
            'title' => 'required|string|max:255|unique:videos,title,' . $video->id,
            'description' => 'required|string',
        ]);
        //update Video Record
        $this->UpdateRecords($video,$request);
        Alert::success('عظيم','تم تعديل هذا الفيديو بنجاح');
        activity()->log(' قام بتعديل فيديو بعنوان '.$video->title);
        return redirect('/editors/videos');
    }

}
