<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

use Notification;

use App\Notifications\MyFirstNotification;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function addview()
    {   
        if(Auth::id()){

            if(Auth::user()->usertype ==1){

              return view('admin.add_doctor');

            }
            else{

                return redirect()->back();

            }

        }
        else{

            return redirect('login');
        }
    }


    public function upload(Request $request)
    {
        $doctor = new doctor;

        $image = $request->file;

        $imagename =time().'.'.$image->getClientOriginalExtension();


        $request->file->move('doctorimage', $imagename);
        $doctor->image=$imagename;

        $doctor->name=$request->name;

        $doctor->phone=$request->phone;

        $doctor->room=$request->room;

        $doctor->speciality=$request->speciality;

        $doctor->save();

        return redirect()->back();

    }


    public function showappointment()
    {
        $data = appointment::all();
        return view('admin.showappointment', compact('data'));

    }


    public function accept($id)
    {

        $data = appointment::find($id);
        $data->status='Accept';

        $data->save();

        return redirect()->back();

    }


    public function cancel($id){

        $data = appointment::find($id);
        $data->status ='Cancel';

        $data->save();

        return redirect()->back();
    }


    public function alldoctors(){

        if(Auth::id()){

            if(Auth::usertype == 1){

                return view('admin.alldoctors');
            }else{

                return redirect()->back();

            }
                
        }
        else{

            return redirect('login');
        }
        
        $data = doctor::all();
        return view('admin.alldoctors', compact('data'));
    }

    public function deletedoctor($id)
    {
        $data =doctor::find($id);
        $data ->delete();

        return redirect()->back();

    }


    public function updateDoctor($id){

        $data = doctor::find($id);

        return view('admin.update_doctor', compact('data'));

    }

    public function editDoctor(Request $request, $id){

        $doctor = doctor::find($id);

        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->speciality =$request->speciality;
        $doctor->room =$request->room;

        $image=$request->file;
        if($image){

         $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;

        }
        
        $doctor->save();
        return redirect()->back()->with('message','Doctor update succes!');



    }


    public function emailToUser($id)
    {
        $data = appointment::find($id);

        return view('admin.email_to_user', compact('data'));
    }

    public function sendemail(Request $request, $id){

        $data = appointment::find($id);

        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart
        ];

        Notification::send($data, new MyFirstNotification($details));

        return redirect()->back();
    }
}
