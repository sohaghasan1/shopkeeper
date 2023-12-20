<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class productController extends Controller
{
    public function products(Request $request){
    
        $this->validate($request, [
            "name"=> "required|string|max:30",
            "price"=> "required|integer|gt:0",
            "qty"=> "required|integer|max:255",
            "desc"=> "string|max:255",
            "image"=> "image|required|mimes:jpg,png,PNG,JPG,JPEG,png|max:20000",
        ]);
      
        if($request->hasFile("image")){
            $image = $request->file("image");
            $filename = "product".time()."_". $image->getClientOriginalExtension();
            $image->move(public_path("uploads/products"), $filename);
        }

        DB::table("products")->insert([
            "name"=> $request->name,
            "image"=> "uploads/products/".$filename,
            "description" => $request->desc,
            "price"=> $request->price,
            "quatity" => $request->qty,
            "category_id"=> $request->category
        ]);

        return redirect()->back()->with("success","prodict added successfully");

    }


    public function category(Request $request){
        $this->validate($request, [
            "name" => "string|required",
            "desc"=> "string",
        ]);

        DB::table("category")->insert([
            "name"=> $request->name,
            "cat_desc" => $request->desc
        ]);

        return redirect()->back()->with("success","category added");
    }

    public function allProducts(){
       $products = DB::table('products')->join('category','products.category_id','category.id')->select('products.*','category.name as category_name')->get();

       return view('admin.pages.all_pro', compact('products'));
    }

    public function edit($id){
        $update_products = DB::table('products')->where('id', $id)->first();
        return view('admin.pages.update', compact('update_products'));
    }
    public function update(Request $request){

        $this->validate($request, [
            'price'=> 'integer|gt:0',
        ]);
        
        DB::table('products')->where('id', $request->id)->update([
            'price'=> $request->price,
        ]);
        return redirect()->back()->with('success', 'Updated');
    }

    // Delete product 
    public function destroy($id){
       $delete_product = DB::table('products')->where('id', $id)->first();
       $remove_img = unlink(public_path($delete_product->image));

       if($remove_img){
        DB::table('products')->where('id', $id)->delete();
        return redirect()->back()->with('success','Deleted');
       }else{
        return redirect()->back()->with('error','Product not delete');
       }

    }

    
   

}
