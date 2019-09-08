<?php

namespace App\Http\Controllers\Admin;

use App\Statistics;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class StatisticsController extends Controller
{

    public function index()
    {

        return view('admin.statistics.index');

    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $data = DB::table('statistics')->orderBy('id','desc')->get();

            echo json_encode($data);
        }
    }

    function update_data(Request $request)
    {
        if($request->ajax())
        {
            $data = array(
                $request->column_name => $request->column_value
            );
            DB::table('statistics')
                ->where('id', $request->id)
                ->update($data);
            echo '<div class="alert alert-success">Statistics Updated Successfully</div>';
        }
    }

}
