<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Http\Resources\Staff as StaffResources;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$staff = Staff::paginate(50);
    	return StaffResources::collection($staff);
    }


    /**
     * Display the specified resource.
     *
     * @param  string  $department
     * @return \Illuminate\Http\Response
     */
    public function department_data($department)
    {
    	if( $department == 'all') {

		    $staff = Staff::paginate(50);
		    return StaffResources::collection($staff);

	    } else {
		    $staff = Staff::where('department', $department)
		                  ->get();
		    return StaffResources::collection($staff);
	    }
    }

}
