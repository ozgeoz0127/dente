<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tedavi;
class AdminCuresController extends Controller
{
	public function show(Request $request)
	{
		return view('admin/cures',["cures" => Tedavi::all()]);
    }
    
	public function getdata(Request $request)
	{
		$post = $request->post();
		return \DB::table('tedavi')->where('id',  $post["tedaviID"])->get()->toArray();

	}
	public function delete($id)
	{
		\DB::table('tedavi')->where('id', $id)->delete();
		return redirect()->back();

	}
	public function save(Request $request)
	{
		$post = $request->post();
		
		// post["id"] = 0 iser insert , farklı ise update
		
		if ($post["id"] == 0) {
			unset($post["id"]);
			\DB::table('tedavi')->insert($post);	
		}else {
			\DB::table('tedavi')->where('id',  $post["id"])->update($post);	
		}
		
		
		return response()->json([
			"status" => true
		]);
	}
    
}
