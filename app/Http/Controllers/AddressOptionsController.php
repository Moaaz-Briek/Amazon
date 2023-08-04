<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressOptionsStoreRequest;
use App\Models\Address;
use Inertia\Inertia;

class AddressOptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Address/Add');
    }

    /**
     * Store a new resource.
     */
    public function store(AddressOptionsStoreRequest $request)
    {
        try {
            $address = new Address();
            $address->user_id = auth()->user()->id;
            $address->addr1 = $request->get('addr1');
            $address->addr2 = $request->get('addr2');
            $address->city = $request->get('city');
            $address->postcode = $request->get('postcode');
            $address->country = $request->get('country');
            $address->save();
            return redirect()->route('address.index');
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $address = Address::findOrFail($id);
            $address->delete();
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
