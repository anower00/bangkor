<?php

namespace App\Http\Controllers\Admin;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Alert;

class NewsController extends Controller
{

    public function index()
    {
        $news= News::orderBy('created_at', 'desc')->paginate(5);

        return view('admin.news.index',compact('news'));
    }

    public function store(Request $request)
    {
//        dd($request);
        $feed= new News;
        $body=$request->input('body');

        $reg_exUrl = "/((http|https|ftp|ftps)\:\/\/|www.)[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
        // Check if there is a url in the text
        if(preg_match($reg_exUrl, $request->input('body'), $url)) {
            $link=$url[0];
            $rUrl = "http://api.linkpreview.net/?key=5c59318d927ca5c5b481c89a6c18a0a2623a61d568502&q=".$link;
            $json_string= file_get_contents($rUrl);
            $data= json_decode($json_string,true);
            $feed->link_title=$data['title'];
            $feed->link_description=$data['description'];
            $feed->link_image=$data['image'];
            $feed->link=$data['url'];
            $body=str_replace($link,"",$body);
        }
        $feed->body= $body;

        $feed->save();

        Alert::success('New Created Successfully', 'Created')->autoclose(3500);

        return redirect()->back();
    }

    public function destroy($id)
    {

        News::find($id)->delete();

        alert()->info('News Deleted Successfully', 'Deleted')->autoclose(3500);
        return redirect()->back();
    }

}
