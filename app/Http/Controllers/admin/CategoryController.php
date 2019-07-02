<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use App\Order;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['category_list'] = Category::all();
        return view('admin.category.category',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddCategoryRequest $request)
    {
        try {
                DB::beginTransaction();
                $data = $request->all();
                $data['slug'] = str_slug($data['name']);
                $cate= Category::create($data);
                DB::commit();
                // session()->flash('status', 'Thêm danh mục thành công!')
                return redirect()->route('category-admin')->with('status', trans('message.cate_create_susscess'));  
            }catch (\Exception $ex) {
            
                return redirect()->back()->with('status', trans('message.cate_create_fail'));
            
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
        $category = Category::find($id);
        return view('admin.category.editcategory',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditCategoryRequest $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->description = $request->description;
        if ($category->save()) {
           return redirect()->route('category-admin')->with('status', trans('message.cate_edit_susscess'));
        }else{
            return redirect()->route('category-admin')->with('status', trans('message.cate_edit_susscess'));
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try{
        DB::beginTransaction();
            $category= Category::find($id);
            foreach ($category->products()->get() as $item) {
                $product = Product::find($item->id);
                $product->productSizes()->delete();
                $product->images()->delete();
                $product->orders()->delete();
                $product->orderDetails()->delete();
                $product->comments()->delete();
            }
            $category->products()->delete();
            $category->delete();
            DB::commit();
            return redirect()->back()->with('status', trans('message.cate_delete_susscess'));  
        } catch (\Exception $ex) {
            
            return redirect()->back()->with('status', trans('message.cate_delete_fail'));
            
        }
    }
}
