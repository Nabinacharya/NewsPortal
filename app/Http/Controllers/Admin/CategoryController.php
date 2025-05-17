<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category=new Category();
        $category->name=$request->name;
        $category->slug=Str::slug($request->name);
        $category->meta_keywords=$request->meta_keywords;
        $category->meta_description=$request->meta_description;
        $category->save();
        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category=Category::find($id);
        return view('admin.category.edit',compact('category'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $category=Category::find($id);
        $category->name=$request->name;
        $category->slug=Str::slug($request->name);
        $category->status=$request->status;
        $category->meta_keywords=$request->meta_keywords;
        $category->meta_description=$request->meta_description;
        $category->update();
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category=Category::find($id);
        $category->delete();
         return redirect()->back();

    }
}
