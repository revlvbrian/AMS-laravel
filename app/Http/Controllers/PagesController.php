<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Asset;
use App\Employee;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    private $employee;
    private $asset;

    public function __construct(Asset $asset, Employee $employee)
    {
        $this->asset = $asset;
        $this->employee = $employee;
    }

// HOME
    public function home()
    {
        return view('index');
    }

// PAGES

    // ASSET
    public function addasset()
    {
        return view('pages.add-asset');
    }

    public function viewasset()
    {
        $asset = $this->asset->get();

        return view('pages.view-asset', compact('asset'));
    }

    public function editasset($id)
    {
        $asset = $this->asset->whereId($id)->first();

        return view('pages.edit-asset', compact('asset'));
    }


    // EMPLOYEE

    public function addemployee()
    {
        return view('pages.add-employee');
    }

    public function viewemployee()
    {
        $employee = $this->employee->get();

        return view('pages.view-employee', compact('employee'));
    }

    public function editemployee($id)
    {
        $employee = $this->employee->whereId($id)->first();

        return view('pages.edit-employee', compact('employee'));
    }

// FUNCTIONS

    // ASSET

    public function storeAsset(Request $request, Asset $asset)
    {
        $asset->create($request->all());

        return redirect('view-asset')->with('status', 'Asset Successfully Added!');
    }

    public function updateAsset($id, Request $request)
    {
        $asset = $this->asset->whereId($id)->first();

        $asset->fill(['serial_number' => $request->get('serial_number')])->save();
        $asset->fill(['asset_name' => $request->get('asset_name')])->save();
        $asset->fill(['asset_type' => $request->get('asset_type')])->save();
        $asset->fill(['remarks' => $request->get('remarks')])->save();
        $asset->fill(['asset_image' => $request->get('asset_image')])->save();

        return redirect("edit-asset/$id")->with('status', 'Asset Successfully Updated!');
    }

    public function deleteAsset($id, Request $request)
    {
        $asset = $this->asset->whereId($id)->first();

        $asset->delete();

        return redirect('view-asset')->with('status', 'Asset Successfully Deleted!');
    }

    //EMPLOYEE

    public function storeEmployee(Request $request, Employee $employee)
    {
        $employee->create($request->all());

        return redirect('view-employee')->with('status', 'Employee Successfully Added!');
    }

    public function updateEmployee($id, Request $request)
    {
        $employee = $this->employee->whereId($id)->first();

        $employee->fill(['employee_id' => $request->get('employee_id')])->save();
        $employee->fill(['employee_name' => $request->get('employee_name')])->save();
        $employee->fill(['employee_mname' => $request->get('employee_mname')])->save();
        $employee->fill(['employee_lname' => $request->get('employee_lname')])->save();
        $employee->fill(['age' => $request->get('age')])->save();
        $employee->fill(['mobile_number' => $request->get('mobile_number')])->save();
        $employee->fill(['address' => $request->get('address')])->save();
        $employee->fill(['position' => $request->get('position')])->save();
        $employee->fill(['employee_image' => $request->get('employee_image')])->save();

        return redirect("edit-employee/$id")->with('status', 'Employee Successfully Updated!');
    }

    public function deleteEmployee($id, Request $request)
    {
        $employee = $this->employee->whereId($id)->first();

        $employee->delete();

        return redirect('view-employee')->with('status', 'Employee Successfully Deleted!');;
    }
}

?>