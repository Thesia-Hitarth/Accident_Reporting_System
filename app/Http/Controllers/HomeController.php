<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    //Hospital
    public function listhospital()
    {


        $sql = "SELECT * FROM hospital";
        $hosp = DB::select($sql);

       /* echo "<pre>";
        print_r($hosp); exit;*/

        return view("Hospital.hospital",compact('hosp'));   
        
    }

    

     public function modifyHospital($id){

        $data = DB::table('hospital')->where('hospital_id',$id)->first();


        return view("Hospital.modify_hospital",compact('data'));
    }
    
    public function modifyhospitalaction(Request $req){
        
        $id = $req->id;
        $name = $req->name;
        $emailid = $req->email;
        $phn = $req->phone;
        $iname = $req->iname;
        $address = $req->address;
       

        $values = array(
                        'hospital_id' => $id,
                        'hospital_name' => $name, 
                        'hospital_address' => $address,
                        'incharge_name' => $iname,
                        'incharge_contact' => $phn,
                        'incharge_email' => $emailid,
                        );

        $ch = DB::table('hospital')->where('hospital_id',$id)->update($values);
        if($ch) 
          return redirect("/hospital");
        else
           echo "Went Wronng";

    }


    public function addhospital(Request $req){

        $id = $req->id;
        $name = $req->name;
        $emailid = $req->email;
        $phn = $req->phone;
        $iname = $req->iname;
        $address = $req->address;

        $values = array('hospital_id' => $id,
                        'hospital_name' => $name, 
                        'hospital_address' => $address,
                        'incharge_name' => $iname,
                        'incharge_contact' => $phn,
                        'incharge_email' => $emailid,
                        );
        

        $ch = DB::table('hospital')->insert($values);
        if($ch) 
            return redirect("/hospital");
        else
            return redirect("/add_hospital");
    }

    public function removehospital($id)
    {

        $ch = DB::table('hospital')->where('hospital_id',$id)->delete();
        if($ch) 
            return redirect("/hospital");
        else
            echo "error";
    }


//PStation
    public function listpstation(){

        $sql = "SELECT * FROM pstation";
        $psta = DB::select($sql);

        /*echo "<pre>";
        print_r($psta); exit;*/

        return view("Pstation.pstation",compact('psta'));   
        
    }

    

     public function modifypstation($id){

        $data = DB::table('pstation')->where('pstation_id',$id)->first();


        return view("Pstation.modify_pstation",compact('data'));
    }
    
    public function modifypstationaction(Request $req){
        
        $id = $req->id;
        $name = $req->name;
        $emailid = $req->email;
        $phn = $req->phone;
        $iname = $req->iname;
        $address = $req->address;
       

        $values = array(
                        'pstation_id' => $id,
                        'pstation_name' => $name, 
                        'pstation_address' => $address,
                        'incharge_name' => $iname,
                        'incharge_contact' => $phn,
                        'incharge_email' => $emailid,
                        );

        $ch = DB::table('pstation')->where('pstation_id',$id)->update($values);
        if($ch) 
          return redirect("/pstation");
        else
           echo "Went Wronng";

    }


    public function addpstation(Request $req){

        $id = $req->id;
        $name = $req->name;
        $emailid = $req->email;
        $phn = $req->phone;
        $iname = $req->iname;
        $address = $req->address;
        

        $values = array('pstation_id' => $id,
                        'pstation_name' => $name, 
                        'pstation_address' => $address,
                        'incharge_name' => $iname,
                        'incharge_contact' => $phn,
                        'incharge_email' => $emailid,
                        );

        $ch = DB::table('pstation')->insert($values);
        if($ch) 
            return redirect("/pstation");
        else
            return redirect("/add_pstation");
    }

    public function removepstation($id)
    {

        $ch = DB::table('pstation')->where('pstation_id',$id)->delete();
        if($ch) 
            return redirect("/pstation");
        else
            echo "error";
    }
    

//FStation
    public function listfstation()
    {


        $sql = "SELECT * FROM fstation";
        $fsta = DB::select($sql);

        /*echo "<pre>";
        print_r($fsta); exit;*/

        return view("Fstation.fstation",compact('fsta'));   
        
    }

    

     public function modifyfstation($id){

        $data = DB::table('fstation')->where('fstation_id',$id)->first();


        return view("Fstation.modify_fstation",compact('data'));
    }
    
    public function modifyfstationaction(Request $req){
        
        $id = $req->id;
        $name = $req->name;
        $emailid = $req->email;
        $phn = $req->phone;
        $iname = $req->iname;
        $address = $req->address;
       

        $values = array(
                        'fstation_id' => $id,
                        'fstation_name' => $name, 
                        'fstation_address' => $address,
                        'incharge_name' => $iname,
                        'incharge_contact' => $phn,
                        'incharge_email' => $emailid,
                        );

        $ch = DB::table('fstation')->where('fstation_id',$id)->update($values);
        if($ch) 
          return redirect("/fstation");
        else
           echo "Went Wronng";

    }


    public function addfstation(Request $req){

        $id = $req->id;
        $name = $req->name;
        $emailid = $req->email;
        $phn = $req->phone;
        $iname = $req->iname;
        $address = $req->address;
        

        $values = array('fstation_id' => $id,
                        'fstation_name' => $name, 
                        'fstation_address' => $address,
                        'incharge_name' => $iname,
                        'incharge_contact' => $phn,
                        'incharge_email' => $emailid,
                        );

        $ch = DB::table('fstation')->insert($values);
        if($ch) 
            return redirect("/fstation");
        else
            return redirect("/add_fstation");
    }

    public function removefstation($id)
    {

        $ch = DB::table('fstation')->where('fstation_id',$id)->delete();
        if($ch) 
            return redirect("/fstation");
        else
            echo "error";
    }
    
//Accident
    public function listaccident()
    {


        $sql = "SELECT * FROM accident";
        $acc = DB::select($sql);

        /*echo "<pre>";
        print_r($acc); exit;*/

        return view("Accident.accident",compact('acc'));   
        
    }

    

     public function modifyaccident($id){

        $data = DB::table('accident')->where('accident_id',$id)->first();


        return view("Accident.modify_accident",compact('data'));
    }
    
    public function modifyaccidentaction(Request $req){
        
        $id = $req->id;
        $location = $req->location;
        $photo = $req->photo;
        $info = $req->info;
       
       

        $values = array(
                        'accident_id' => $id,
                        'location' => $location, 
                        'photo' => $photo,
                        'detailed_info' => $info,
                        );

        $ch = DB::table('accident')->where('accident_id',$id)->update($values);
        if($ch) 
          return redirect("/accident");
        else
           echo "Went Wronng";

    }


    public function addaccident(Request $req){

        $id = $req->id;
        $location = $req->location;
        $photo = $req->photo;
        $info = $req->info;
        

        $values = array('accident_id' => $id,
                        'location' => $location, 
                        'photo' => $photo,
                        'detailed_info' => $info,
                        );

        $ch = DB::table('accident')->insert($values);
        if($ch) 
            return redirect("/accident");
        else
            return redirect("/add_accident");
    }

    public function removeaccident($id)
    {

        $ch = DB::table('accident')->where('accident_id',$id)->delete();
        if($ch) 
            return redirect("/accident");
        else
            echo "error";
    }
    
}
