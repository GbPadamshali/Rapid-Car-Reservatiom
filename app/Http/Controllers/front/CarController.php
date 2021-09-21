<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function car_list()
    {
        $vehicle_counts = Vehicle::with('company:id,name')->select(\DB::raw('count(*) as count, company_id'))
              ->groupBy('company_id')
              ->get()->toArray();
        $all_count = Vehicle::count();
        return view('front.cars.index', compact('vehicle_counts','all_count'));
    }


    public function get_car_data(Request $request)
    {
        if(isset($request->id)){
            $vehicle = Vehicle::with('car.image_test')->where('company_id',$request->id)->paginate(9);
        }else{
            $vehicle = Vehicle::with('car.image_test')->paginate(9);
        }

        $html = view('front.cars.list',compact('vehicle'))->render();
        $msg = "success";
        $arr = array("status" => 200, "msg" => $msg, "result" =>$html);
        return \Response::json($arr);

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
        //
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
