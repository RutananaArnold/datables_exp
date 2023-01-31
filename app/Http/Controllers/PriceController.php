<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;
use App\DataTables\PricesDataTable;

class PriceController extends Controller
{
    
    public function addNewPrice(Request $request)
    {
        // Price::create([
        //     'quantity' => $request->quantity,
        //     'currency' => $request->currency,
        //     'amount' => $request->amount,
        // ]);

        $price = new Price();
        $price->quantity = $request['quantity'];
        $price->currency = $request['currency'];
        $price->amount = $request['amount'];
        $price->save();

        return redirect()->route('priceData');
    }

    public function priceScreen()
    {
        return view('add_price');
    }

    
    public function AddedPrices(PricesDataTable $dataTable)
    {
        return $dataTable->render('home');
    }
}
