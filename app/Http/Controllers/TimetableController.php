<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class TimetableController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     /
    /public function __construct()
    {
       //$this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function feedTimetable(Request $req){

        $day = $req->day;
        $fromtime = $req->fromtime;
        $totime = $req->totime;
        $roomno = $req->roomno; 
        $subject = $req->subject;
        $division = $req->division;
        $batch = $req->batch;
        $faculty = $req->faculty;

        $fromtime = strtotime($fromtime);
        $totime = strtotime($totime);

        $fromtime = date('H:i:s',$fromtime);
        $totime = date('H:i:s',$totime);

        if($batch == 0)
            $type = 'lecture';
        else
            $type = 'lab';

        $values = array('day_timetable' => $day,
                        'start_time' => $fromtime, 
                        'end_time' => $totime,
                        'type_lect' => $type,
                        'room_lactlab_no' => $roomno,
                        'subject_name' => $subject,
                        'faculty_name' => $faculty, 
                        'div_table' => $division,
                        'batch_table' => $batch
                        );

        $ch = DB::table('timetable')->insert($values);
        if($ch) 
            return redirect("/timetable");
        else
           echo "Something Went Wrong";

        }
        public function listTimetable()
        {
            /*$sql = "SELECT * FROM timetable group by day_timetable";*/
            $sql = "SELECT distinct * from timetable order by start_time,day_timetable";
            $table = DB::select($sql);

        return view("Table.timetable",compact('table'));
        }
 }
?>