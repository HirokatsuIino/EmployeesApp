<?php

namespace App\Http\Controllers\admin;

use App\Employee;
use App\EmployeeDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageEmployeeDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
//        $lists = Employee::with('employee_details')->get();
//
//        return response()->json([
//            'message' => 'OK',
//            'message-code' => 200,
//            'data' => $lists
//        ], 200, [], JSON_UNESCAPED_UNICODE);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
    public function store($id)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        //
        $lists = EmployeeDetail::find($id);

        return response()->json([
            'message' => 'OK',
            'message-code' => 200,
            'data' => $lists
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $item = EmployeeDetail::find($id);
        $item->last_name = request()->get("last_name");
        $item->first_name = request()->get("first_name");
        $item->mail = request()->get("mail");
        $item->tel = request()->get("tel");
        $item->gender = request()->get("gender");
        $item->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
