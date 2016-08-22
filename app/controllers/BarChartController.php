<?php

class BarChartController extends Controller
{
    public function get_chartdata()
    {
        $customer=DB::table('employee')->select('employeename','work_count')->orderBy('id')->get();
        $data=array();
            foreach ($customer as $row)
            {
                $data[]=$row;
            }
//          header("Content-type: application/json");
            $request= json_encode($data);
            return Response::json($data);


    }
    public function get_chart()
    {
        return View::make('charts.barchart');
    }

}