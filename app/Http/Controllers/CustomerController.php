<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CustomerDeclaration;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index($id = null)
    {
        if ($id) {
            $project = Project::findOrFail($id);
            return view('pages.customers.index', compact('project'));
        }else{
            return view('pages.errors.project_file');
        }


        // try{
        //     $project = Project::findOrFail($id);
        //     return view('pages.customers.index', compact('project'));
        // }catch(ModelNotFoundException $e){
        //     // catch(Exception $e) catch any exception
        //     return view('pages.errors.project_file');
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {
        try{
            $project = Project::findOrFail($id);
            return view('pages.customers.create', compact('project'));
        }catch(ModelNotFoundException $e){
            // catch(Exception $e) catch any exception
            return view('pages.errors.project_file');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->date_of_booking_amount);
        $validate = $request->validate([
            'customer_name' => 'required',
            'father_husband_name' => 'required',
            'cell_number' => 'required|numeric',
            'land_phone_res' => 'nullable|numeric',
            'office_number' => 'nullable|numeric',
            'email_address' => 'required|email',
            'house_road_no' => 'required',
            'village_area' => 'required',
            'post_office' => 'required',
            'police_station' => 'required',
            'district' => 'required',
            'country' => 'required',
            'present_house_road_no' => 'required',
            'present_village_area' => 'required',
            'present_post_office' => 'required',
            'present_police_station' => 'required',
            'present_district' => 'required',
            'present_country' => 'required',
            'floor' => 'required',
            'unit' => 'required',
            'area' => 'required|numeric',
            'price' => 'required|numeric',
            'floor_unit_area_price_total_amount' => 'required|numeric',
            'parking_no' => 'nullable|numeric',
            'car_parking_price' => 'nullable|numeric',
            'utility_charge' => 'nullable|numeric',
            'date_of_booking_amount' => 'required',
            'date_of_down_payment' => 'required',
            'total_amount' => 'numeric',
            'booking_amount' => 'numeric',
            'chaque_no' => 'required',
            'installment_payment_system' => 'required',
            'customer_signature' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'customer_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($validate == true) {

            //Customer Signature Image Start
            if ($request->hasfile('customer_image')) {
                $file = $request->file('customer_image');
                $extention = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extention;
                $file->move('/upload/customer_images/', $filename);
                $path = $filename;
            }
            //Customer Signature Image End

            //Customer Information Save Start
            $customer_information = new Customer();
            $customer_information->project_id = $request->project_id;
            $customer_information->customer_name = $request->customer_name;
            $customer_information->father_husband_name = $request->father_husband_name;
            $customer_information->profession = $request->profession;
            $customer_information->cell_number = $request->cell_number;
            $customer_information->land_phone_res = $request->land_phone_res;
            $customer_information->office_number = $request->office_number;
            $customer_information->email_address = $request->email_address;
            $customer_information->house_road_no = $request->house_road_no;
            $customer_information->village_area = $request->village_area;
            $customer_information->post_office = $request->post_office;
            $customer_information->police_station = $request->police_station;
            $customer_information->district = $request->district;
            $customer_information->country = $request->country;
            $customer_information->present_house_road_no = $request->present_house_road_no;
            $customer_information->present_village_area = $request->present_village_area;
            $customer_information->present_post_office = $request->present_post_office;
            $customer_information->present_police_station = $request->present_police_station;
            $customer_information->present_district = $request->present_district;
            $customer_information->present_country = $request->present_country;
            $customer_information->customer_image = $path;
            $customer_information->save();
            //Customer Information Save End

          

            //Customer Signature Image Start
            if ($request->hasfile('customer_signature')) {
                $file = $request->file('customer_signature');
                $extention = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extention;
                $file->move('/upload/customers_signature/', $filename);
                $path = $filename;
            }
            //Customer Signature Image End

            // Customer Declarrations Information Save Start
            $declarrations = new CustomerDeclaration();
            $declarrations->customer_id =  $customer_information->id;
            $declarrations->project_id = $request->project_id;
            $declarrations->floor = $request->floor;
            $declarrations->unit = $request->unit;
            $declarrations->area = $request->area;
            $declarrations->price = $request->price;
            $declarrations->parking_type = $request->parking_type;
            $declarrations->parking_no = $request->parking_no;
            $declarrations->car_parking_price = $request->car_parking_price;
            $declarrations->uniity_charge = $request->uniity_charge;
            $declarrations->total_amount = $request->total_amount;
            $declarrations->booking_amount = $request->booking_amount;
            $declarrations->date_of_booking_amount =  $request->date_of_booking_amount;
            //$declarrations->date_of_booking_amount = Carbon::createFromFormat('F j, Y H:i:s', $request->date_of_booking_amount)->format('F j, Y') ;
            //Carbon::parse($request->date_of_down_payment)->format('F j, Y');
            $declarrations->date_of_down_payment = $request->date_of_down_payment;
            $declarrations->down_payment_amount = $request->down_payment_amount;
            $declarrations->payment_type = $request->payment_type;
            $declarrations->chaque_no = $request->chaque_no;
            $declarrations->installment_payment_system = $request->installment_payment_system;
            $declarrations->note = $request->note;
            $declarrations->customer_signature = $path;
            $declarrations->save();
            // Customer Declarrations Information Save End

            return redirect()->route('customers.list')->with('success', 'Customer Added Successfully..!!!');
        }else{

        }

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
