<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    const PATH_VIEW= 'categories.';

    public function index()
    {
        $data = Category::query()->latest('id')->paginate(5);
        // phan trang dung paginata
        // query co hay kh kh quan trong
        // latest de no sap xep moiw nhat len dau nhu desc
        // dd($data->toArray());
        // kiem tra du lieu do ra 
        return view(self::PATH_VIEW . __FUNCTION__ , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // echo self::PATH_VIEW . __FUNCTION__;die;
        // test chuyển trang
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        // dd($request->all());
        // kiem tra nhap vao form ok chuwa

        Category::query()->create($request->all());
        return redirect()->route('categories.index')
        ->with('msg','thao tac thanh cong');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {

        return view(self::PATH_VIEW . __FUNCTION__ , compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view(self::PATH_VIEW . __FUNCTION__, compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->all());
        return back()->with('msg', 'Thao tac thanh cong');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('msg', 'Thao tac thanh cong');
    }
}
