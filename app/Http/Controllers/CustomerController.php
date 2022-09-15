<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use App\Models\Region;
use App\Models\Car;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers=Customer::all();
        return view('customer.index',['customers'=>$customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions=Region::all();
        $cars=Car::all();
        
        return view('customer.create',compact('regions','cars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        
            $customer=new Customer;

            $customer->name=$request->name;
            $customer->surname=$request->surname;
            $customer->date_of_birth=$request->date_of_birth;
            $customer->sex=$request->sex;
            $customer->phone=$request->phone;
            $customer->save();


           

            if($request->cars){
            foreach ($request->cars as $car){
                $customer->cars()->attach($car);
            }
        }
            if($request->traveled_regions){
            foreach ($request->traveled_regions as $region){
                $customer->regions()->attach($region);
            }
        }
            $customer->save();

            return redirect()->route('customer.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer=Customer::find($id);
        $cars=Car::all();
        $regions=Region::all();
        return view('customer.edit',compact('customer','cars','regions'));
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
        $customer=Customer::find($id);

        $customer->name=$request->name;
        $customer->surname=$request->surname;
        $customer->date_of_birth=$request->date_of_birth;
        $customer->sex=$request->sex;
        $customer->phone=$request->phone;
       

      foreach ($request->cars as $car){
                $customer->cars()->sync($car);
            }

            foreach ($request->traveled_regions as $region){
               
                $customer->regions()->sync($region);
        }


$customer->save();
        
        return redirect()->route('customer.index');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer=Customer::find($id);
        $customer->delete();

        return redirect()->route('customer.index');

    }
}
