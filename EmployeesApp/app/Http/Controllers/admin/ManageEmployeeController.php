<?php

namespace App\Http\Controllers\admin;

use App\Employee;
use App\EmployeeDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        //
        $lists = Employee::with('employee_details')->get();
//        $lists = EmployeeDetail::with('employee_id');
        return response()->json([
            'message' => 'OK',
            'message-code' => 200,
            'data' => $lists
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        //社員情報テーブルにデータ格納
        $item = new Employee();
        $item->fill($request->all());
        $item->save();

        //保存した社員情報からIDを取得
        $detail_Id = $item->id;

        //社員詳細情報テーブルにデータ格納
        $item_detail = new EmployeeDetail();
        $item_detail->employee_id = $detail_Id;
        $item_detail->save();

        return response()->json([
            'message' => 'OK',
            'message-code' => 200
        ], 200, [], JSON_UNESCAPED_UNICODE);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_detail($id)
    {
        //
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
