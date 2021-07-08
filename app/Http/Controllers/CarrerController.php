<?php

namespace App\Http\Controllers;
use App\Carrer;
use DB;

use Illuminate\Http\Request;

class CarrerController extends Controller
{
    public function show() {
        $carrer = Carrer::select('*')
                        ->where('is_active', '1')
                        ->get();
                    
                               

        return view('carrer.list', compact('carrer'));
    }

    public function carrer_create(Request $request){
        
        if($request){
            $carrer = new carrer();
            $carrer->job_title =$request->job_title;
            $carrer->department_name =$request->department_name;
            $carrer->location_name	= $request->loc_name;
            $carrer->job_description = $request->job_description;
            $carrer->experience = $request->experience;
            $carrer->save();
            return redirect('/carrer_list'); 
        }
    }

    public function add() {

        return view('carrer.add');
        // return view('register');
    }


    public function edit($id) {
           $carrer = Carrer::select('*')
                        ->where('is_active', '1')
                        ->where('id',$id)->first();

        return view('carrer.edit', compact('carrer'));
    }
     protected function update(Request $request) {
       
                     
                            $id=$request->input('id');
                            
                            $careersData = array(
                                'job_title' => $request->input('job_title'),
                                'department_name' => $request->input('department_name'),
                                'location_name' => $request->input('location_name'),
                                'job_description' => $request->input('job_description'),
                                'experience' => $request->input('experience'),
                                'is_active' => 1
                                // 'created_by' => Auth::id(),
                                 //'updated_by' => Auth::id(),
                            );
       

                            DB::table('careers')->where('id', $id)->update($careersData);
                            return redirect('/carrer_list');
  
                        }

  
    public function delete($id){
        $carrer =Carrer::where('id',$id)
                        ->delete();
                        if($carrer){
                            return redirect('/carrer_list');
                        }else{
                            return redirect('/carrer_list');
                        }
    }                    
}
