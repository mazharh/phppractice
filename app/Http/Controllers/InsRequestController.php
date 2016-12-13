<?php

namespace App\Http\Controllers;

use App\InsProduct;
use App\InsRequest;
use App\Mail\TestMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InsRequestController extends Controller
{
    //
    public function submitRequest(Request $request){
        $this->validate($request,
            [
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required | email',
                'postalCode' => 'required',
                'phone' => 'required|integer',
                'insurance' => 'required'
            ]
        );

            $insurance = InsProduct::find($request->insurance);
            $newRequest = InsRequest::create($request->all());

            Mail::to($request->email)
                ->send(new TestMailable($insurance));

            return view ('home.thanks')->with('request', $request)
                                        ->with('insurance', $insurance);
    }
}
