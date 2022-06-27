<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use App\Table;
use App\Category;
use App\Menu;
use App\Sale;
use App\SaleDetail;
use Illuminate\Http\Request;
use App\Exports\ReportExportView;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public function index(){
        return view('report.index');
    }

    public function showResult(Request $request){
        $sales = Sale::whereBetween('created_at',[request()->date_from,request()->date_to])->get();
        $saleDetails = SaleDetail::all();
        // $saleDetails = Sale::find(1)->saleDetails()->first();
        // if($sales){
        //     $saleID = $sales->table_name; 
        // }
        // return $saleDetails;
        // foreach ($saleDetails as $saleDetail) {
        //     if($saleDetails->sale_id== $sales->id ){
        //         return $saleDetail;
        //     }
        // }
        // $x=array_sum($sales->total_price);
        // dd($x);
        $request->session()->flash('status','The Total Amount of Sale from '.$request->date_from. ' to '.$request->date_from.' is ' .$request->total_price.'' );
        return view('report.show', compact('sales','saleDetails'));
    }  
    public function export($saleID)
    {
        
       return Excel::download(new ReportExportView, 'report.xlsx');
    }
}
