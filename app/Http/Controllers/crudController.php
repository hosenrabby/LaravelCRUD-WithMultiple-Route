<?php

namespace App\Http\Controllers;

use App\Models\crudModel;
use Illuminate\Http\Request;

class crudController extends Controller
{
    public function index(){
        $userInfo = crudModel::latest()->paginate(4);
        return view('CRUD.userData', ['passData' => $userInfo]);
    }
    public function create(){
        return view('CRUD.addData');
    }
    public function store(Request $request){
        // dd($request->all());
        $dataInsert = $request->all();
        crudModel::create($dataInsert);
        return redirect('/')->with('successMsg' , 'Your Data Inserted Successfully !!!');
    }
    public function edit($id){
        $data = crudModel::find($id);
        return view('CRUD.editData' , ['editData' => $data]);
    }
    public function update(Request $request , $id){
        $data = crudModel::find($id);
        $upData = $request->all();
        $data->update($upData);
        return redirect('/')->with('successMsg' , 'Your Data Updated Successfully !!!');
    }
    public function destroy($id){
        $delData = crudModel::find($id);
        $delData->delete();
        return redirect('/')->with('warnMsg' , 'Your Data Deleted !!!');
    }
}
