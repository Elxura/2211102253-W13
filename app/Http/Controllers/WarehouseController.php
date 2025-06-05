<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class WarehouseController extends Controller
{
    public function index()
    {
        $warehouses = DB::table('warehouse')
            ->orderBy('created_at', 'desc')
            ->get();
            
        return view('admin.warehouse', compact('warehouses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'kategori' => 'required|string',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            // Store image in storage/app/public/warehouse
            $imagePath = $request->file('image')->store('warehouse', 'public');
        }

        DB::table('warehouse')->insert([
            'nama_barang' => $request->nama_barang,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'stok_tersedia' => $request->stok,
            'stok_awal' => $request->stok,
            'stok_berkurang' => 0,
            'image' => $imagePath, // This should save as 'warehouse/filename.jpg'
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('warehouse.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function show($id)
    {
        $warehouse = DB::table('warehouse')
            ->where('id_stok', $id)
            ->first();

        if (!$warehouse) {
            return response()->json(['error' => 'Data tidak ditemukan'], 404);
        }

        return response()->json($warehouse);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'kategori' => 'required|string',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $warehouse = DB::table('warehouse')
            ->where('id_stok', $id)
            ->first();

        if (!$warehouse) {
            return redirect()->route('warehouse.index')->with('error', 'Data tidak ditemukan!');
        }

        $updateData = [
            'nama_barang' => $request->nama_barang,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'stok_tersedia' => $request->stok,
            'updated_at' => now()
        ];

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($warehouse->image && Storage::disk('public')->exists($warehouse->image)) {
                Storage::disk('public')->delete($warehouse->image);
            }
            
            // Store new image
            $updateData['image'] = $request->file('image')->store('warehouse', 'public');
        }

        DB::table('warehouse')
            ->where('id_stok', $id)
            ->update($updateData);

        return redirect()->route('warehouse.index')->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $warehouse = DB::table('warehouse')
            ->where('id_stok', $id)
            ->first();

        if (!$warehouse) {
            return response()->json(['error' => 'Data tidak ditemukan'], 404);
        }

        // Delete image if exists
        if ($warehouse->image && Storage::disk('public')->exists($warehouse->image)) {
            Storage::disk('public')->delete($warehouse->image);
        }

        DB::table('warehouse')
            ->where('id_stok', $id)
            ->delete();

        return response()->json(['success' => 'Produk berhasil dihapus!']);
    }
}