<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Models\paperwork_files;

class paperwork extends Controller
{
    public function index(){

        // Fetch all records
        $files = paperwork_files::select('*')->get();

        $data['paperwork_files'] = $files;

        return view('paperwork', compact('files'),$data);
    }

    public function submitformgallery(Request $request){

     

        

             if($request->file('file')) {

                   $file = $request->file('file');
                   $filename = $file->hashName();

                   // File upload location
                   $location = 'uploads';

                   // Upload file
                   $file->move($location,$filename);

                   // File path
                   $filepath = url('uploads/'.$filename);

                   // Insert record
                   $insertData_arr = array(
                        'name' => $request->name,
                        'filepath' => $filepath
                   );

                   paperwork_files::create($insertData_arr);

                   // Session
                   Session::flash('alert-class', 'alert-success');
                   Session::flash('message','Record inserted successfully.');

             }else{

                   // Session
                   Session::flash('alert-class', 'alert-danger');
                   Session::flash('message','Record not inserted');
             }

        

        return redirect('paperwork');

    }

}
