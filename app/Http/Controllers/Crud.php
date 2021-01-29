<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session; 

class Crud extends Controller
{
	public function index()
	{

		return view('welcome');
	}
	public function add_data(request $request)
	{
		$data = array();
		$data['name'] = $request->name;
		$data['address'] = $request->address;
		$data['email'] = $request->email;

		$dd = DB::table('data')->insert($data);

		if ($dd) {
			return Redirect::to('/');
		}
	}
	public function delete($id){
		$delete = DB::table('data')->where('id',$id)->delete();

		if ($delete) {
			return Redirect::to('/');
		}
	}
	public function edit($id)

	{
		$data = DB::table('data')
		->where('id',$id)->first();
		return view('edit_data')
		->with('data',$data);
	}
	public function Update_data(request $request)
	{
		$data = array();
		$data['name'] = $request->name;
		$data['address'] = $request->address;
		$data['email'] = $request->email;

		$id = $request->id;

		$dd = DB::table('data')->where('id',$id)->update($data);
		if ($dd) {
			return Redirect::to('/');
		}
	}

}
