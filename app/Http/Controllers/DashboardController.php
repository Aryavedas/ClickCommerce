<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', User::class);
        $products = Product::all();

        return view('dashboard.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ProductCategory::all();

        return view('dashboard.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request['harga_product'] = str_replace('.', '', $request['harga_product']);
        $validateData = $request->validate([
            'nama_product' => 'required|string|max:225',
            'harga_product' => 'required|numeric',
            'deskripsi_product' => 'required|string|max:225',
            'stock_product' => 'required|numeric|max:999',
            'gambar_product' => 'required|sometimes|file|image',
            'category' => 'required',
        ]);

        if ($request->hasFile('gambar_product')) {
            // dd($request->gambar_product);
            $slug = Str::slug($validateData['nama_product']);
            $extFile = $request->gambar_product->getClientOriginalExtension();
            $fileName = $slug . "-" . time() . "."  . $extFile;
            $request->gambar_product->storeAs('public/uploads', $fileName);
        } else {
            $fileName = 'default_image.jpg';
        };
        $validateData['gambar_product'] = $fileName;
        Product::create([
            'title' => $validateData['nama_product'],
            'price' => $validateData['harga_product'],
            'description' => $validateData['deskripsi_product'],
            'stocks' => $validateData['stock_product'],
            'image' => $validateData['gambar_product'],
            'id_category' => $validateData['category']
        ]);

        return redirect()->route('dashboard.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $categories = ProductCategory::all();

        return view('dashboard.edit', ['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::where('id', $id);
        $fileName = $product->pluck('image');
        $request['harga_product'] = str_replace('.', '', $request['harga_product']);
        $validateData = $request->validate([
            'nama_product' => 'required|string|max:225',
            'harga_product' => 'required|numeric',
            'deskripsi_product' => 'required|string|max:225',
            'stock_product' => 'required|numeric|max:999',
            'gambar_product' => 'required|sometimes|file|image',
            'category' => 'required',

        ]);
        if ($request->hasFile('gambar_product')) {
            $slug = Str::slug($validateData['nama_product']);
            $extFile = $request->gambar_product->getClientOriginalExtension();
            $fileName = $slug . "-" . time() . "."  . $extFile;
            $request->gambar_product->storeAs('public/uploads', $fileName);
        } else {
            $product = Product::where('id', $id);
            $fileName = $product->pluck('image')->first();
        };
        $validateData['gambar_product'] = $fileName;
        Product::where('id', $id)->update([
            'title' => $validateData['nama_product'],
            'price' => $validateData['harga_product'],
            'description' => $validateData['deskripsi_product'],
            'stocks' => $validateData['stock_product'],
            'image' => $validateData['gambar_product'],
            'id_category' => $validateData['category']
        ]);

        $request->session()->flash('pesan', "Data Produk {$validateData['nama_product']} Berhasil Di Ubah");
        return redirect()->route('dashboard.showEdit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Product::destroy($id);

        return redirect()->route('dashboard.showDelete');
    }

    public function showEditProduct()
    {
        $products = Product::all();

        return view('dashboard.show-edit', ['products' => $products]);
    }

    public function showDeleteProduct()
    {
        $products = Product::all();

        return view('dashboard.show-delete', ['products' => $products]);
    }
}
