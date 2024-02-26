<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
       //$this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

public function temp(Request $r){

			$conn= mysqli_connect("localhost","root","","ams");

			/*$eno=$_GET['email'];
			$pass=$_GET['password'];
*/
			$eno=$r->email;
			$pass=$r->password;
			$sql="SELECT * FROM login where emailid='$eno' AND psw='$pass'";
			$result=mysqli_query($conn,$sql);
			$row= mysqli_fetch_row($result);
			//$row=mysqli_num_rows($result);
			if($row){
			    
				return redirect("/index");
				
			}
			else{
			    echo "error";
			    exit;
			}
		}
	}
?>