<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PageRepository;

class ServiceController extends Controller
{
    public function show(Request  $request, $url){
		$s = PageRepository::settings();
		$s["settings"]["subpagetitle"]	= $this->findurltitle($url,$s);

		return view('pages',$s);
    }
    
    
	public function findurltitle($url, $s)	{
		$menu = $s["settings"]["menu"];
		
		foreach ($menu as $k => $v) {
			if ($v["url"] == "services/".$url) {
				return $v["text"];
			}
			if (isset($v["sub"])) {
				foreach ($v["sub"] as $a=>$b) {
					if ($b["url"] == "services/".$url) {
						return $b["text"];
					}				
				}
			}
		}
		
		return "test";
							
	}
            
}