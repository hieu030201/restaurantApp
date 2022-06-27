<?php
namespace App\Exports;

use App\Sale;
use App\SaleDetail;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ReportExportView implements FromView
{
    public function view(): View
    {
        return view('report.showReceipt', [
            'sales'=> Sale::all()
        ]);
    }
}