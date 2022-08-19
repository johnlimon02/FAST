<?php

namespace App\Http\Controllers\ShopOwner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Database;

class DashboardController extends Controller
{
    //Database
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename01 = 'services_table';
        $this->tablename02 = 'product_table';


    }

    //Shop Owner's Dashboard
    public function index () 
    {
        return view('shop_owner.dashboard');
    }

    //Service List
    public function service () 
    {
        $services_table = $this->database->getReference($this->tablename01)->getValue();
        return view('shop_owner.service', compact('services_table'));
    }

    //Product List
    public function product () 
    {
        $product_table = $this->database->getReference($this->tablename02)->getValue();
        return view('shop_owner.product', compact('product_table'));
    }

    //Feedback/Ratings
    public function feedback () 
    {
        return view('shop_owner.feedback');
    }

    //CRUD Services
    public function addservice () 
    {
        return view('shop_owner.addservice');
    }

    public function store (Request $request) 
    {
    
        $postData = [
            'sname' => $request->service_name,
            'dcreated' => $request->date_created,
            'price' => $request->price, 
        ];
        $postRef = $this->database->getReference($this->tablename01)->push($postData);
        if($postRef)
        {
            return redirect('shop_owner/services')->with('status', 'Services Added Succesfully');
        }
        else
        {
            return redirect('shop_owner/services')->with('status', 'Services Not Added');
        }
    }


    public function edit($id) 
    {
        $key = $id;
        $editdata = $this->database->getReference($this->tablename01)->getChild($key)->getValue();
        if($editdata)
        {
            return view('shop_owner.edit', compact('editdata', 'key'));
        }
        else
        {
            return redirect('shop_owner/services')->with('status', 'Services ID Not Found');
        }
        
    }

    public function update(Request $request, $id)
    {
        $key = $id;
        $updateData = [
            'sname' => $request->service_name,
            'dcreated' => $request->date_created,
            'price' => $request->price, 
        ];
        $res_updated = $this->database->getReference($this->tablename01.'/'.$key)->update($updateData);
        if($res_updated)
        {
            return redirect('shop_owner/services')->with('status', 'Services Updated Succesfully!');
        }
        else
        {
            return redirect('shop_owner/services')->with('status', 'Services Not Updated');
        }
    }

    public function destroy01($id)
    {
        $key = $id;
        $del_data = $this->database->getReference($this->tablename01.'/'.$key)->remove();
        if($del_data)
        {
            return redirect('shop_owner/services')->with('status', 'Services Deleted Succesfully!');
        }
        else
        {
            return redirect('shop_owner/services')->with('status', 'Services Not Deleted');
        }
    }


    //CRUD Products
    public function addproducts () 
    {
        return view('shop_owner.addproducts');
    }

    public function storeproducts (Request $request) 
    {
        $postData = [
            'images' => $request->image,
            'date_created' => $request->product_date,
            'product_name' => $request->product_name,
            'price' => $request->price, 
        ];
        $postRef = $this->database->getReference($this->tablename02)->push($postData);
        if($postRef)
        {
            return redirect('shop_owner/products')->with('status', 'Products Added Succesfully');
        }
        else
        {
            return redirect('shop_owner/products')->with('status', 'Products Not Added');
        }
    }

    public function editproducts($id)
    {
        $key = $id;
        $editdata = $this->database->getReference($this->tablename02)->getChild($key)->getValue();
        
        if($editdata)
        {
            return view('shop_owner.editproducts', compact('editdata', 'key'));
        }
        else
        {
            return redirect('shop_owner/products')->with('status', 'Product ID Not Found');
        }
    }


    public function updateproducts(Request $request, $id)
    {
        $key = $id;
        $updatedata = [
            'image' => $request->image,
            'date_created' => $request->product_date,
            'product_name' => $request->product_name,
            'price' => $request->price, 
        ];
        $res_updated = $this->database->getReference($this->tablename02.'/'.$key)->update($updatedata);
        if($res_updated)
        {
            return redirect('shop_owner/products')->with('status', 'Products Updated Succesfully!');
        }
        else
        {
            return redirect('shop_owner/products')->with('status', 'Products Not Updated');
        }
    }

    public function destroy02($id)
    {
        $key = $id;
        $del_data = $this->database->getReference($this->tablename02.'/'.$key)->remove();
        if($del_data)
        {
            return redirect('shop_owner/products')->with('status', 'Products Deleted Succesfully!');
        }
        else
        {
            return redirect('shop_owner/products')->with('status', 'Products Not Deleted');
        }
    }
  
}


