<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Credit;

class CreditController extends Controller
{
    //index
    public function index() {

         $datetime_credit = Credit::all();
         $credits = Credit::all();

        return view('details.index')
         ->with(['datetime_credit'=>$datetime_credit])
        //  ->with(['credits'=> $credits]);
        ->with(['credits',$credits]);
    }

    //show2
    public function show2() {

        $datetime_credit = Credit::all();
        $credits= Credit::all();

        return view('credits.show2')
         ->with(['datetime_credit' => $datetime_credit])
         ->with(['credits'=> $credits]);
    }

     //create2
     public function create2() {

        return view('credits.create2');
    }

    //store2
    public function store(Request $request) {

        $request->validate([
            'datetime_credit' => 'required',
            'creditor' => 'required',
            'rmb_credit' => 'required',
            'usd_credit' => 'required',
        ],[
            'datetime_credit.required' => '記録日を記入してください',
            'creditor.required' => '顧客名を記入してください',
            'rmb_credit.required' => '人民元(rmb)ない場合は0を記録してください',
            'usd_credit.required' => '米ドル(usd)ない場合は0を記録してください',
        ]);

        $credits = new Credit();
        $credits ->datetime_credit = $request->datetime_credit;
        $credits->creditor = $request->creditor;
        $credits->rmb_credit = $request->rmb_credit;
        $credits->usd_credit = $request->usd_credit;
        $credits->save();

        return redirect()
         ->route('credits.index');

    }
}


