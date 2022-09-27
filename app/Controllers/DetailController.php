<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;

class DetailController extends Controller
{

    //index
    public function index() {

         $datetime = Detail::all();
         $details = Detail::all();

        return view('index')
         ->with(['datetime'=>$datetime])
         ->with(['details'=> $details]);
    }

    //show
    public function show() {

        $datetime = Detail::all();
        $details = Detail::all();

        return view('details.show')
         ->with(['datetime' => $datetime])
         ->with(['details'=> $details]);
    }

     //create
     public function create() {

        return view('details.create');
    }

    //store
    public function store(Request $request) {

        $request->validate([
            'customer' => 'required',
            'rmb' => 'required',
            'usd' => 'required',
        ],[
            'customer.required' => '顧客名記録必須',
            'rmb.required' => '人民元(rmb)記録必須。ない場合は0を記録すること',
            'usd.required' => '米ドル(usd)記録必須。ない場合は0を記録すること',
        ]);

        $details = new Detail();
        $details->datetime = $request->datetime;
        $details->customer = $request->customer;
        $details->rmb = $request->rmb;
        $details->usd = $request->usd;
        $details->save();

        return redirect()
         ->route('details.index');

    }
}
