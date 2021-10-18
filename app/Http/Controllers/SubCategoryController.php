<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($category)
    {
        $category = Category::findOrFail($category);

        $data = [
            'category' => $category
        ];

        return view('subcategories.form', $data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'category_uuid' => 'required',
            'code_sub_category' => 'required|unique:sub_categories,code_sub_category',
            'name_sub_category' => 'required'
        ]);

        $subcategory = SubCategory::create([
            'uuid' => Uuid::uuid4(),
            'code_sub_category' => $request->code_sub_category,
            'name_sub_category' => $request->name_sub_category,
            'category_uuid' => $request->category_uuid,
        ]);

        if ($subcategory) {
            return redirect("categories/$request->category_uuid")->with('info', 'Sub Kategori Berhasil ditambahkan!');
        } else {
            return redirect()->back()->with('danger', 'Sub Kategori Gagal Ditambahkan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
