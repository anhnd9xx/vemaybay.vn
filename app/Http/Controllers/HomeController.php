<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
use App\Helpers\Partners\APIDuLieu;

class HomeController extends Controller
{
    public function  home(){
    	return view('layout');
    }
    public function  searchflight(Request $Request){
    	$resOb = APIDuLieu::searchFlight([
            "Adt" => $Request->Adt,
            "Chd" => $Request->Chd,
            "Inf" => $Request->Inf,
            "ViewMode" => false,
            "ListFlight[0][StartPoint]" => $Request->startPoint,
            "ListFlight[0][EndPoint]" => $Request->endPoint,
            "ListFlight[0][DepartDate]" => date('dmY',strtotime($Request->startAt)),
            "ListFlight[0][Airline]" => ""
        ]);

        if($resOb->StatusCode == 200){
            $flights = $resOb->DomesticDatas;
            return view('pages.searchflight')->with("flights",$flights);
        }
        else{
            return back()->with("message","Vui lòng kiểm tra lại thông tin tìm kiếm chuyến bay!");
        }
    }
    public function  ticket(Request $Request){
        if (!isset($Request->name) or !isset($Request->phone) or !isset($Request->email) or !isset($Request->address)) {
            return back()->with("error", "Bạn nhập thiếu thông tin!");
         }
        else{
            return back()->with("success","Bạn đã đặt chỗ thành công! Vui lòng thanh toán trước 12 tiếng trước chuyến bay!");
        }
    	
    }
}
