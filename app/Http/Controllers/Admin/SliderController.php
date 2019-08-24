<?php

namespace App\Http\Controllers\Admin;

use App\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Validator;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('id', 'DESC')->get();

        return view('admin.slider.index',compact('sliders'));
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

        $validator = \Validator::make($request->all(), [
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $image = $request->file('simage');

        //slug used for video title start in title name
        $slug = str_slug($request->title);
        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            //in video title at first show slug then current date
            $imagename = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            //if folder exist then save other wise create video folder via mkdir
            if (!file_exists('slider')) {
                mkdir('slider', 0777, true);
            }
            $image->move('slider', $imagename);
        }
        else{
            $imagename = "an.jpg";
        }

//        dd($imagename);
            $sliders= new Slider();
            $sliders->title =$request->get('title');
            $sliders->sub_title =$request->get('sub_title');
            $sliders->description =$request->get('description');
            $sliders->image = $imagename;
            $sliders->save();


        echo " <span class='alert alert-success'> post published successfully </span>";
//        return response()->json(['success'=>'Slider is successfully added']);
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
