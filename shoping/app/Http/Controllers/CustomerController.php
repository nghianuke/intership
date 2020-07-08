<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\Customerrequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer=Customer::paginate(1);
        
        return view('frontend.customer.index',compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Customerrequest $request)
    {
         $customers= new Customer([
          'first_name'=>$request->firstname,
          'last_name'=>$request->lastname,
           

 'post_address'=>$request->paddress,

 'physical_address'=>$request->physicaladdress,
 'email'=>$request->email,
  ]);
  $customers->save();
       
        return back()->with('message','On Your Successful Save');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer=Customer::findOrfail($id);
        return view('frontend.customer.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ctm=Customer::findOrfail($id);
        return view('frontend.customer.edit',compact('ctm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer=Customer::findOrfail($id);
        $customer->update([
          'first_name'=>$request->firstname,
          'last_name'=>$request->lastname,
           'email'=>$request->email,

 'post_address'=>$request->paddress,

 'physical_address'=>$request->physicaladdress,

 

  
        ]);
        $customer->save();
        
        return back()->with('update','Update Data Success');
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $customers=Customer::findOrfail($id);
        $customers->delete();
        return back()->with('destroy','You Have Successfully Deleted  Data');
    }
}
