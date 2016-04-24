<?php

namespace App\Http\Controllers;

use App\Country;
use App\Feedback;
use App\FactoryData;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public  function feedback(Request $request){
        $name = $request->input('name');
        $notice = $request->input('notice');
        $fix = $request->input('fix');
        $country_code = $request->input('country_code');
        $country = Country::where('code',$country_code)->get();
        if($name !="" && $notice !="" && $fix!="" && $country_code!=""){
            Feedback::create(['name'=>$name,'change'=>$notice,'fix'=>$fix,'country_code'=>$country[0]->id]);
            return response()->json(["success"=>true]);
        }else{
            return response()->json(["success"=>false]);
        }

    }
    public function getFeedbacks(){
        return response()->json(["success"=>true,"data"=>Feedback::all()]);
    }
    public function getTemperatures(){
        return response()->json(["success"=>true,"data"=>FactoryData::where('factory_id',1)->orderBy('year', 'ASC')
            ->get(array('year','value'))]);
    }
    public function getRainfalls(){
        return response()->json(["success"=>true,"data"=>FactoryData::where('factory_id',3)->orderBy('year', 'ASC')->get(array('year','value'))]);
    }
    public function getForests(){
        return response()->json(["success"=>true,"data"=>FactoryData::where('factory_id',2)->orderBy('year', 'ASC')->get(array('year','value'))]);
    }
}