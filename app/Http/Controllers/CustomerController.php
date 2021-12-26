<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CustomerDeclaration;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index($id = null)
    {
        try{
            $project = Project::findOrFail($id);
            return view('pages.customers.index', compact('project'));
        }catch(ModelNotFoundException $e){
            // catch(Exception $e) catch any exception
            return view('pages.errors.project_file');
        }
        
        // return view('pages.errors.project_file');
        // $project = Project::where('project_file_no', $id)->first();
        // dd($project);

        // dd($id);
        // if ($id) {
        //     $project = Project::where('project_file_no', $id)->first();
        //     $customer_information = Customer::with('customers_declaration')->get();

        //     return view('pages.customers.index', compact('customer_information','project'));
        // }else{
        //     return view('pages.errors.project_file');
        // }


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
        // dd($request->all());
        $validate = $request->validate([
            'customer_name' => 'required',
            'father_husband_name' => 'required',
            'cell_number' => 'required|numeric',
            'land_phone_res' => 'nullable|numeric',
            'office_number' => 'nullable|numeric',
            'email_address' => 'required|email',
            'village_area' => 'required',
            'post_office' => 'required',
            'police_station' => 'required',
            'district' => 'required',
            'country' => 'required',
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
                $file->move('upload/customer_images/', $filename);
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
            $customer_information->house_no = $request->house_no;
            $customer_information->road_no = $request->road_no;
            $customer_information->village_area = $request->village_area;
            $customer_information->post_office = $request->post_office;
            $customer_information->police_station = $request->police_station;
            $customer_information->district = $request->district;
            $customer_information->country = $request->country;
            $customer_information->present_house_no = $request->present_house_no;
            $customer_information->present_road_no = $request->present_road_no;
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
                $file->move('upload/customers_signature/', $filename);
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
            $declarrations->utility_charge = $request->utility_charge;
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

            return redirect()->back()->with('success', 'Customer Added Successfully..!!!');
        }else{
            echo "Error";
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
        $customer = Customer::findOrFail($id);
        $customers_declaration = CustomerDeclaration::where('customer_id', $customer->id)->get()->first();
        
        return view('pages.customers.view', compact('customer', 'customers_declaration'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        $customers_declaration = CustomerDeclaration::where('customer_id', $customer->id)->first();
        $project_information = Project::where('id', $customer->project_id)->first();
        
        return view('pages.customers.edit', compact('customer', 'customers_declaration','project_information'));
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
        $validator = Validator::make($request->all(), [
            'customer_name' => 'required',
            'father_husband_name' => 'required',
            'cell_number' => 'required|numeric',
            'land_phone_res' => 'nullable|numeric',
            'office_number' => 'nullable|numeric',
            'email_address' => 'required|email',
            'village_area' => 'required',
            'post_office' => 'required',
            'police_station' => 'required',
            'district' => 'required',
            'country' => 'required',
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
            'customer_signature' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'customer_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $update_customer = Customer::findOrFail($id);

        if ($update_customer) {
            
            //Customer Signature Image Start
            if ($customer_image = $request->hasfile('customer_image')) {
                $file = $request->file('customer_image');
                $extention = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extention;
                $file->move('upload/customer_images/', $filename);
                $path = $filename;
            }
            
            //Customer Signature Image End

            //Customer Information Update Start
            $update_customer->customer_name = $request->customer_name;
            $update_customer->father_husband_name = $request->father_husband_name;
            $update_customer->profession = $request->profession;
            $update_customer->cell_number = $request->cell_number;
            $update_customer->land_phone_res = $request->land_phone_res;
            $update_customer->office_number = $request->office_number;
            $update_customer->email_address = $request->email_address;
            $update_customer->house_no = $request->house_no;
            $update_customer->road_no = $request->road_no;
            $update_customer->village_area = $request->village_area;
            $update_customer->post_office = $request->post_office;
            $update_customer->police_station = $request->police_station;
            $update_customer->district = $request->district;
            $update_customer->country = $request->country;
            $update_customer->present_house_road_no = $request->present_house_no;
            $update_customer->present_road_no = $request->present_road_no;
            $update_customer->present_village_area = $request->present_village_area;
            $update_customer->present_post_office = $request->present_post_office;
            $update_customer->present_police_station = $request->present_police_station;
            $update_customer->present_district = $request->present_district;
            $update_customer->present_country = $request->present_country;
            
            if (!$update_customer->customer_image == null) {
                $update_customer->customer_image = $customer_image;
            }

            $update_customer->update();



            // Customer Declarrations Information Update Start
            $update_customer_declarrations = CustomerDeclaration::Where('customer_id', '=', $update_customer->id)->first();
            
            //Customer Signature Image Start
            if ($customer_signature = $request->hasfile('customer_signature')) {
                $file = $request->file('customer_signature');
                $extention = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extention;
                $file->move('upload/customers_signature/', $filename);
                $path = $filename;
            }
            //Customer Signature Image End

            $update_customer_declarrations->floor = $request->floor;
            $update_customer_declarrations->unit = $request->unit;
            $update_customer_declarrations->area = $request->area;
            $update_customer_declarrations->price = $request->price;
            $update_customer_declarrations->parking_type = $request->parking_type;
            $update_customer_declarrations->parking_no = $request->parking_no;
            $update_customer_declarrations->car_parking_price = $request->car_parking_price;
            $update_customer_declarrations->utility_charge = $request->utility_charge;
            $update_customer_declarrations->total_amount = $request->total_amount;
            $update_customer_declarrations->booking_amount = $request->booking_amount;
            $update_customer_declarrations->date_of_booking_amount =  $request->date_of_booking_amount;
            $update_customer_declarrations->date_of_down_payment = $request->date_of_down_payment;
            $update_customer_declarrations->down_payment_amount = $request->down_payment_amount;
            $update_customer_declarrations->payment_type = $request->payment_type;
            $update_customer_declarrations->chaque_no = $request->chaque_no;
            $update_customer_declarrations->installment_payment_system = $request->installment_payment_system;
            $update_customer_declarrations->note = $request->note;

            if (!$update_customer_declarrations->customer_signature == null) {
                $update_customer_declarrations->customer_signature = $customer_signature;
            }

            $update_customer_declarrations->update();
            //Customer Information Update End
            
            return redirect()->route('customers.list', $update_customer->project_id)->with('success', 'Customer Updated Successfully..!!!');
        }
    }
        

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::where('id', $id)->delete();

        return redirect()->back();
    }
}
