<?php

namespace App\Http\Controllers;

use App\Models\BillingContractor;
use App\Models\BillingDesigner;
use App\Models\BillingSupplier;
use App\Models\Contractor;
use App\Models\Designer;
use App\Models\Project;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function select($id = null)
    {
        // $project = Project::findOrFail($id);
        // dd($project);
        // if ($project) {
        //     # code...
        // }
        try{
            $project = Project::findOrFail($id);
            return view('pages.billings.select_verification', compact('project'));
        }catch(ModelNotFoundException $e){
            // catch(Exception $e) catch any exception
            return redirect()->back()->with('message', 'Please Select Project');
        }

        // return view('pages.billings.select_verification');
    }

    public function select_seller(Request $request, $id)
    {
        $request->validate([
            'seller' => 'required'
        ]);

        if($request->seller == 'contractor'){

            return redirect()->route('add.billing.contractor', $id);

        }elseif($request->seller == 'supplier'){

            return redirect()->route('add.billing.supplier', $id); 

        }elseif($request->seller == 'designer'){

            return redirect()->route('add.billing.designer', $id);
            
        }
    }
    
    public function add_billing_contractor($id)
    {
        $project = Project::findOrFail($id);
        $contractors = Contractor::all();
        return view('pages.billings.create_contractor_billing', compact('project', 'contractors'));
    }

    public function add_billing_supplier($id)
    {
        $project = Project::findOrFail($id);
        $suppliers = Supplier::all();
        return view('pages.billings.create_supplier_billing', compact('project', 'suppliers'));
    }

    public function add_billing_designer($id)
    {
        $project = Project::findOrFail($id);
        $designers = Designer::all();
        return view('pages.billings.create_designer_billing', compact('project', 'designers'));
    }
    
    public function getContractor($contractor_id)
    {
        $contractor = Contractor::findOrFail($contractor_id);
        
        return json_encode($contractor);
        // $designers = Designer::all();
        // return view('pages.billings.create_designer_billing', compact('project', 'designers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_billing_contractor(Request $request)
    {
        //Validation for Contractor Billing
        $validation = $request->validate([
            'contractor_id' => 'required',
            'contractor_contact_number' => 'required',
            'contractor_address' => 'required',
            'file_opening_date' => 'required',
            'payment_receiving_date' => 'required',
            'payment_receiving_amount' => 'required',
            'payment_receiving_date' => 'required',
            'balance_amount' => 'required',
            'fixed_bill_amount' => 'required',
        ],
        [
            'contractor_id.required' => 'The Contractor Name field is required.'
        ]);
        //Validation END

        if ($validation == true) {
            //Customer Information Save Start
            $billing_contractor = new BillingContractor();
            $billing_contractor->project_id = $request->project_id;
            $billing_contractor->contractor_id = $request->contractor_id;
            $billing_contractor->contractor_contact_number = $request->contractor_contact_number;
            $billing_contractor->bill_amount = $request->bill_amount;
            $billing_contractor->contractor_address = $request->contractor_address;
            $billing_contractor->file_opening_date = $request->file_opening_date;
            $billing_contractor->fixed_bill_amount = $request->fixed_bill_amount;
            $billing_contractor->bill_date = $request->bill_date;
            $billing_contractor->payment_receiving_date = $request->payment_receiving_date;
            $billing_contractor->challan_no = $request->challan_no;
            $billing_contractor->payment_receiving_amount = $request->payment_receiving_amount;
            $billing_contractor->balance_amount = $request->balance_amount;

            $billing_contractor->save();
            // Customer Declarrations Information Save End

            return redirect()->back()->with('success', 'Billing Added Successfully..!!!');
        }


    }

    public function store_billing_supplier(Request $request)
    {
        //Validation for Supplier Billing
        $validation = $request->validate([
            'supplier_id' => 'required',
            'supplier_contact_number' => 'required',
            'supplier_address' => 'required',
            'file_opening_date' => 'required',
            'payment_receiving_date' => 'required',
            'payment_receiving_amount' => 'required',
            'payment_receiving_date' => 'required',
            'balance_amount' => 'required',
            'fixed_bill_amount' => 'required',
        ],
        [
            'supplier_id.required' => 'The Supplier Name field is required.'
        ]);
        //Validation END

        if ($validation == true) {
            //Save Start
            $billing_supplier = new BillingSupplier();
            $billing_supplier->project_id = $request->project_id;
            $billing_supplier->supplier_id = $request->supplier_id;
            $billing_supplier->bill_amount = $request->bill_amount;
            $billing_supplier->supplier_address = $request->supplier_address;
            $billing_supplier->supplier_contact_number = $request->supplier_contact_number;
            $billing_supplier->file_opening_date = $request->file_opening_date;
            $billing_supplier->fixed_bill_amount = $request->fixed_bill_amount;
            $billing_supplier->bill_date = $request->bill_date;
            $billing_supplier->payment_receiving_date = $request->payment_receiving_date;
            $billing_supplier->challan_no = $request->challan_no;
            $billing_supplier->payment_receiving_amount = $request->payment_receiving_amount;
            $billing_supplier->balance_amount = $request->balance_amount;

            $billing_supplier->save();
            //Save End

            return redirect()->back()->with('success', 'Billing Added Successfully..!!!');
        }


    }

    public function store_billing_designer(Request $request)
    {
        //Validation for Designer Billing
        $validation = $request->validate([
            'designer_id' => 'required',
            'designer_contact_number' => 'required',
            'designer_address' => 'required',
            'file_opening_date' => 'required',
            'payment_receiving_date' => 'required',
            'payment_receiving_amount' => 'required',
            'payment_receiving_date' => 'required',
            'balance_amount' => 'required',
            'fixed_bill_amount' => 'required',
        ],
        [
            'designer_id.required' => 'The Designer Name field is required.'
        ]);
        //Validation END

        if ($validation == true) {
            //Customer Information Save Start
            $billing_designer = new BillingDesigner();
            $billing_designer->project_id = $request->project_id;
            $billing_designer->designer_id = $request->designer_id;
            $billing_designer->designer_contact_number = $request->designer_contact_number;
            $billing_designer->bill_amount = $request->bill_amount;
            $billing_designer->designer_address = $request->designer_address;
            $billing_designer->file_opening_date = $request->file_opening_date;
            $billing_designer->fixed_bill_amount = $request->fixed_bill_amount;
            $billing_designer->bill_date = $request->bill_date;
            $billing_designer->payment_receiving_date = $request->payment_receiving_date;
            $billing_designer->challan_no = $request->challan_no;
            $billing_designer->payment_receiving_amount = $request->payment_receiving_amount;
            $billing_designer->balance_amount = $request->balance_amount;

            $billing_designer->save();
            // Customer Declarrations Information Save End

            return redirect()->back()->with('success', 'Billing Added Successfully..!!!');
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
