<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;
use App\Models\Product;
use App\Models\purchase;
use App\Models\purchase_products;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        return view('customers.index', ['customers' => $customers]);

    }


    public function create()
    {

        return view('customers.create');
    }

    public function store(StoreCustomerRequest $request)
    {

        $request->photo->storeAs('public/customers', $request->photo->getClientOriginalName());
        $req = $request->validated();
        $req['photo'] = $request->photo->getClientOriginalName();
        Customer::create($req);

        return redirect()->route('customers.index');
    }


    public function edit(Request $request)
    {
        $id = $request->get('id');
        $customer = Customer::find($id);
        return view('customers.edit', compact('customer', 'id'));
    }

    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer = Customer::find($request->get('id'));
        $customer->update($request->validated());

        return redirect()->route('customers.index');
    }

    public function destroy(Request $request)
    {

        $customer = Customer::find($request->get('id'));
        $customer->delete();

        return redirect()->route('customers.index');
    }

    public function getCustomers()
    {
        $query = Customer::select('id', 'first_name', 'middle_name', 'last_name', 'phone_number', 'email', 'photo', 'id');

        return datatables($query)
            ->addColumn('purchases', function (Customer $customer) {
                return purchase::query()->select('id')->where('customer_id', $customer->id)->count();
            })->addColumn('sum', function (Customer $customer) {
                $purchases = purchase::query()->select('id')->where('customer_id', $customer->id)->get();
                $products = purchase_products::query()->select('product_id')->whereIn('purchase_id', $purchases)->get();
                $sum = Product::query()->whereIn('id', $products)->sum('price');

                return $sum;
            })->addColumn('action', function ($customer) {
                return '<a href="customers/edit?id=' . $customer->id . '" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>' .
                    '<a href="customers/delete?id=' . $customer->id . '" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-edit"></i> Delete</a>' .
                    '<a href="purchases/create?id=' . $customer->id . '" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Add Purchase</a>';;
            })
            ->make(true);
    }
}
