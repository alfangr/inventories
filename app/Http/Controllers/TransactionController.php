<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Inventory;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index() {
        $data['transactions'] = Transaction::all();
        return view('transactions.index', $data);
    }

    public function create() {
        $data['inventories'] = Inventory::all();
        return view('transactions.create', $data);
    }

    public function store(Request $request) {
        $dataTransaction = [
            'id_user' => Auth::user()->id,
            'id_barang' => $request->barang,
            'jumlah' => $request->jumlah
        ];
        $saveTransaction = Transaction::create($dataTransaction);

        return redirect()->route('transactions');
    }

    public function destroy($id) {
        $destroyTransaction = Transaction::destroy($id);
        
        return redirect()->route('transactions');
    }
}
