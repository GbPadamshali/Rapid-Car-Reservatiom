<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Validator;
use Image;
use File;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * created by : vikas katariya (09-09-2021)
     */
    public function index()
    {
        $cars = Car::paginate(25);
        Log::debug($cars);
        return view('admin.cars.index')->with('cars', $cars);
        // return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * created by : vikas katariya (09-09-2021)
     */
    public function create(Request $request)
    {
        $car = array();
        if(isset($request->id)){
            $car = Car::find($request->id);
        }
        return view('admin.cars.create');
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
        if (isset($request->id)) {
            $rules['name'] = 'required|unique:users,email,' . $request->id;
            $rules['owner'] = 'required';
            $rules['make'] = 'required';
            $rules['model'] = 'required';
            $rules['year_built'] = 'required';

        }else{
            $rules = [
                'name' => 'required|unique:cars,name',
                'owner' => 'required',
                'make' => 'required',
                'model' => 'required',
                'year_built' => 'required',
                'upload_imgs.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ];
        }
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            Log::debug($validator->errors());
            return redirect()->route('admin.cars.index')->with('error',  $validator->errors()->first());
        } else {
            Log::debug($request);
            try {

                if (isset($request->id)) {
                    $car = Car::find($request->id);
                    $car->update($input);
                    $msg = "Car updated successfully.";
                }else{
                    \DB::enableQueryLog();
                    $input['status'] = 'active';
                    $car = Car::create($input);
                    Log::debug(\DB::getQueryLog());
                    $msg = "Car added successfully.";
                }

                if($request->hasFile('upload_imgs')) {
                    if(!empty($request->upload_imgs)){                        
                        foreach ($request->upload_imgs as $key=>$upload_imgs) {

                                $image = Image::make($upload_imgs);
                                $originalName = $upload_imgs->getClientOriginalName();
                                $imageName = time().'-'.$upload_imgs->getClientOriginalName();

                                $imagesPath = public_path() . '/theme/images/cars/';
                                $image->save($imagesPath.$imageName);

                                $image->resize(400,213);
                                $thumbnailPath = public_path() . '/theme/images/cars/thumbnail/';
                                $image->save($thumbnailPath.$imageName); 
                                \DB::enableQueryLog(); 
                                $upload = new CarImage();
                                $upload->image = $imageName;
                                $upload->original_name = $originalName;
                                $upload->car_id = $car->id;
                                $upload->save();
                                Log::debug(\DB::getQueryLog());
                        }
                    }
                }
                return redirect()->route('admin.cars.index')->with('success', $msg);
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Car is not added successfully.');
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
            $car = Car::find($id);
            return view('admin.cars.view', compact('car'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Car Could not found');
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
            $car = Car::find($id);
            return view('admin.cars.create', compact('car'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Car Could not found');
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
        $car = Car::find($id);

        $this->validate($request, [
            'name' => 'required|unique:cars,name',
            'owner' => 'required',
            'make' => 'required',
            'model' => 'required',
            'year_built' => 'required',
        ]);
        try {
            $car = $car->update($input);
            return redirect()->route('cars.index')->with('success', 'Car updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Car could not updated successfully.');
        }
    }

     /**
     * Change status of agent active or inactive
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response send response in json
     * created by : vikas katariya (09-09-2021)
     */
    public function changestatus(Request $request) {
        try {
            $car = Car::find($request->id)->update(['status'=>$request->status]);
            $arr = array("status" => 200, "msg" => 'success');
        } catch (\Illuminate\Database\QueryException $ex) {

            $msg = $ex->getMessage();
            if (isset($ex->errorInfo[2])) {
                $msg = $ex->errorInfo[2];
            }

            $arr = array("status" => 400, "msg" => $msg, "result" => array());
        } catch (Exception $ex) {

            $msg = $ex->getMessage();
            if (isset($ex->errorInfo[2])) {
                $msg = $ex->errorInfo[2];
            }
            $arr = array("status" => 400, "msg" => $msg, "result" => array());
        }
        return \Response::json($arr);
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
            Car::find($id)->update(['status'=>'inactive']);
            Car::find($id)->delete();
            $arr = array("status" => 200, "msg" => 'Car deleted successfully.');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * created by : vikas katariya (09-09-2021)
     */
    public function deleteimage($id)
    {
        try {
            CarImage::find($id)->delete();
            $arr = array("status" => 200, "msg" => 'Car image deleted successfully.');
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
