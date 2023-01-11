<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Menampilkan semua data paket
     * @return [type]
     */
    public function index()
    {
        $packages = Package::all();

        return view('backend.package.index', compact('packages'));
    }

    /**
     * Menampilkan form untuk menambahkan data paket
     * @return [type]
     */
    public function create()
    {
        return view('backend.package.create');
    }

    /**
     * Menyimpan data paket ke database
     *
     * @param Request $request
     *
     * @return [type]
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|integer|min:0',
            'minimum_person' => 'nullable|integer|min:1',
            'image' => 'required|image|mimes:png,jpg|max:2048',
            'description' => 'nullable',
        ]);

        $package = new Package;
        $package->name = $request->name;
        $package->price = $request->price;
        $package->minimum_person = $request->minimum_person;

        $filename = $request->image->hashName();
        $image = $request->image->move('img', $filename);

        $package->image = $image;
        $package->description = $request->description;
        $package->save();

        return redirect()->route('packages.index');
    }

    /**
     * Menampilkan form untuk mengedit data paket
     *
     * @param Package $package
     *
     * @return [type]
     */
    public function edit(Package $package)
    {
        return view('backend.package.edit', compact('package'));
    }

    /**
     * Mengupdate data paket
     *
     * @param Request $request
     * @param Package $package
     *
     * @return [type]
     */
    public function update(Request $request, Package $package)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|integer|min:0',
            'minimum_person' => 'nullable|integer|min:1',
            'image' => 'nullable|image|mimes:png,jpg|max:2048',
            'description' => 'nullable',
        ]);

        $package->name = $request->name;
        $package->price = $request->price;
        $package->minimum_person = $request->minimum_person;

        if ($request->hasFile('image')) {
            unlink($package->image);

            $filename = $request->image->hashName();
            $image = $request->image->move('img', $filename);

            $package->image = $image;
        }

        $package->description = $request->description;
        $package->save();

        return redirect()->route('packages.index');
    }

    /**
     * Menghapus data paket
     *
     * @param Package $package
     *
     * @return [type]
     */
    public function destroy(Package $package)
    {
        unlink($package->image);
        $package->delete();

        return redirect()->route('packages.index');
    }
}
