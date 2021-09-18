<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Bank;
use App\Models\Company;
use App\Models\Car;
use Illuminate\Support\Facades\Log;
use Validator;

class VehicleController extends Controller
{
    public function index(Request $request)
    {
        $vehicles = Vehicle::paginate(25);
        $banks = Bank::get();
        $companies = Company::get();
        $cars = Car::get();
        return view('admin.vehicle.index',compact('vehicles','banks','companies','cars'));
    }
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * created by : vikas katariya (09-09-2021)
     */
    public function create(Request $request)
    {
        $vehicle = array();
        $banks = Bank::get();
        $companies = Company::get();
        $cars = Car::get();
        if(isset($request->id)){
            $vehicle = Vehicle::find($request->id);
        }
        return view('admin.vehicle.create',compact('vehicle','banks','companies','cars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * created by : vikas katariya (09-09-2021)
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $rules = [
            'car_id' => 'required',
            'company_id' => 'required',
            'bank_id' => 'required',
            'cost' => 'required',
            'title' => 'required',
            'vin_number' => 'required',
            'licence_plate_number' => 'required',
            'reg_due_date' => 'required',
            'date_of_purchase' => 'required',
            'registration_city' => 'required',
            'city_sticker_expiry' => 'required',
            'insurance_company' => 'required',
            'insurance_policy_number' => 'required',
            'insurance_till_date' => 'required',
            'inspection_till_date' => 'required',
        ];
    
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            Log::debug($validator->errors());
            return redirect()->route('admin.vehicles.index')->with('error',  $validator->errors()->first());
        } else {
            Log::debug($request);
            try {
                if (isset($request->id)) {
                    $car = Vehicle::find($request->id);
                    $car->update($input);
                    $msg = "Car updated successfully.";
                }else{
                    \DB::enableQueryLog();
                    $last_data = Vehicle::orderBy('id', 'desc')->first();
                    if(isset($last_data )){
                        $input['vehicle_id'] = "VI_".$last_data->id;
                     }else{
                        $input['vehicle_id'] = "VI_0";
                     }
                    $car = Vehicle::create($input);
                    Log::debug(\DB::getQueryLog());
                    $msg = "Vehicle added successfully.";
                }
                return redirect()->route('admin.vehicles.index')->with('success', $msg);
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Vehicle is not added successfully.');
            }
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * created by : vikas katariya (09-09-2021)
     */
    public function show($id)
    {
        try {
            $vehicle = Vehicle::find($id);
            return view('admin.vehicle.view', compact('vehicle'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Vehicle Could not found');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * created by : vikas katariya (09-09-2021)
     */
    public function edit($id)
    {
        try {
            $vehicle = Vehicle::find($id);
            $banks = Bank::get();
            $companies = Company::get();
            $cars = Car::get();
            return view('admin.vehicle.create', compact('vehicle','banks','companies','cars'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Vehicle Could not found');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * created by : vikas katariya (09-09-2021)
     */
    public function update(Request $request, $id)
    {
        $vehicle = Vehicle::find($id);

        $this->validate($request, [
            'name' => 'required|unique:cars,name',
            'owner' => 'required',
            'make' => 'required',
            'model' => 'required',
            'year_built' => 'required',
        ]);
        try {
            $vehicle = $vehicle->update($input);
            return redirect()->route('vehicle.index')->with('success', 'Vehicle updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Vehicle could not updated successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * created by : vikas katariya (09-09-2021)
     */
    public function destroy($id)
    {
        try {
            Vehicle::find($id)->delete();
            $arr = array("status" => 200, "msg" => 'Vehicle deleted successfully.');
        } catch (\Illuminate\Database\QueryException $ex) {
            $msg = 'You can not delete this as related data are there in system.';
            if (isset($ex->errorInfo[2])) {
                $msg = $ex->errorInfo[2];
            }
            $arr = array("status" => 400, "msg" => $msg, "result" => array());
        } catch (Exception $ex) {
            $msg = 'You can not delete this as related data are there in system.';
            if (isset($ex->errorInfo[2])) {
                $msg = $ex->errorInfo[2];
            }
            $arr = array("status" => 400, "msg" => $msg, "result" => array());
        }
        return \Response::json($arr);
    }
}
