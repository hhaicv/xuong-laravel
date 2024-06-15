<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use Illuminate\Support\Facades\Storage;


class BrandController extends Controller
{

    const PATH_VIEW = 'brands.';

    public function index()
    {
        $data = Brand::query()->latest('id')->paginate(5);

        // dd($data->toArray());
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $pathFile = Storage::putFile('brands', $request->file('image'));
            $data['image'] = 'storage/' . $pathFile;
        }

        Brand::query()->create($data);
        return redirect()->route('brands.index')
            ->with('msg', 'thao tac thanh cong');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view(self::PATH_VIEW . __FUNCTION__, compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view(self::PATH_VIEW . __FUNCTION__, compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $pathFile = Storage::putFile('brands', $request->file('image'));
            $data['image'] = 'storage/' . $pathFile;
        }
        $Img = $brand->image;
        $brand->update($data);

        if (
            $request->hasFile('image') &&
            $Img && file_exists(public_path($Img))
        ) {
            unlink(public_path($Img));
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return back()->with('msg', 'Xoa thanh cong!');
    }
}
