<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    public function index() {
        $data['inventory'] = Inventory::all();
        return view('inventories.index', $data);
    }

    public function create() {
        return view('inventories.create');
    }

    public function store(Request $request) {
        $dataInventory = [
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ];
        $saveInventory = Inventory::create($dataInventory);

        return redirect()->route('inventories');
    }

    public function destroy($id) {
        $destoryInventory = Inventory::destroy($id);
        
        return redirect()->route('inventories');
    }
}
