<?php

namespace App\Http\Controllers\DataEntry;

use App\Http\Traits\InfographicOperation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Gallery;
use Alert;

class InfographicController extends Controller
{
    use InfographicOperation;

    /**
     * DataEntry Middleware For InfoGraphics Operation
     * @return void
     */
    public function __construct()
    {
        $this->middleware('Infograph');
    }
    /**
     * Display a listing of the Graphs.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $graphs = Gallery::where('user_id',Auth::user()->id)->OrderBy('id','desc')->get();
        activity()->log('زيارة صفحة الانفوجرافيكس التي قام باضافتها ');
        return view('DataEntry.Infograph.index')
            ->with('graphs',$graphs);
    }

    /**
     * Show the form for creating a new Graphs.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        activity()->log('زيارة صفحة اضافة انفوجرافيك جديد ');
        return view('DataEntry.Infograph.add');
    }

    /**
     * Register a New Graph
     *
     * @param $request
     */
    public function register ($request)
    {

        try {

            $slug=make_slug($request->title,'-');

            if ($request->hasFile('img')) {
                $img=uploader($request,'img');
            }

            Gallery::create([
                'img' =>$img,
                'title' =>$request->title,
                'description'=>$request->description,
                'user_id'=>Auth::user()->id,
                'slug'=>$slug
            ]);

        }
        catch(ValidationException $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/editors/infographics');
        }
        catch(\Exception $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/editors/infographics');
        }
    }

    /**
     * Store a newly created Graph in Database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|string|max:255|unique:galleries',
            'description' => 'required|string',
            'img' => 'required|image|mimes:jpeg,jpg,png,gif|max:100000'
        ]);
        $this->register($request);
        Alert::success('عظيم','تم اضافة انفوجراف جديد بنجاح');
        activity()->log('اضاف انفوجرافيك جديد بنجاح بعنوان '.$request->title);
        return redirect('/editors/infographics');
    }


    /**
     * Show the form for editing the specified Graph.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $graph = Gallery::where('user_id',Auth::user()->id)->find($id);
        if(!$graph)
            return redirect('/editors/infographics');
        activity()->log('زيارة صفحة تعديل انفوجرافيك بعنوان '.$graph->title);
        return view('DataEntry.Infograph.edit')
            ->with('graph',$graph);
    }

    public function UpdateRecords($graph, $request)
    {
        try {


            $slug=make_slug($request->title,'-');

            if ($request->img != null)
            {
                if ($request->hasFile('img')) {
                    $img = uploader($request,'img');
                    $graph->update(['img' => $img]);
                }
            }

            $slug=make_slug($request->title,'-');

            $graph->update([
                'img' =>$img,
                'title' =>$request->title,
                'description'=>$request->description,
                'user_id'=>Auth::user()->id,
                'slug'=>$slug
            ]);
        }
        catch(ValidationException $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/editors/infographics');
        }
        catch(\Exception $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/editors/infographics');
        }

    }

    /**
     * Update the specified Graph in Database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $graph = Gallery::where('user_id',Auth::user()->id)->find($id);
        if(!$graph)
            return redirect('/editors/infographics');
        $this->validate($request, [
            'title' => 'required|string|max:255|unique:galleries,title,'. $graph->id,
            'description' => 'required|string',
            'img' => 'sometimes|image|mimes:jpeg,jpg,png,gif|max:100000',
        ]);
        //update Graph Record
        $this->UpdateRecords($graph,$request);
        Alert::success('عظيم','تم تعديل هذا انفوجراف بنجاح');
        activity()->log(' قام بتعديل انفوجرافيك بعنوان '.$graph->title);
        return redirect('/editors/infographics');
    }

}
