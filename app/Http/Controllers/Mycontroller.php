<?php

namespace App\Http\Controllers;

use App\Exports\reportExport;
use App\Imports\reportImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;

class Mycontroller extends Controller
{

	public function export()
	{
		return Excel::download(new reportExport, 'report.xlsx');
	}

	public function import()
	{
		return Excel::import(new reportImport, 'report.xlsx');
	}

    public function store(Request $req)
    {	
    	 return Redirect::back()->with('success', 'جاري تنزيل الملف. شكراً!');
    }
}
