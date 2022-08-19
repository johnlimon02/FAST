<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Database;

class AdminController extends Controller
{
    //Database
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'municipality_table';
    }

    //Admin Dashboard
    public function dashboard () 
    {
        return view('admin.dashboard');
    }

    //Municipality
    public function municipality () 
    {
        $municipality_table = $this->database->getReference($this->tablename)->getValue();
        return view('admin.municipality', compact('municipality_table'));
    }

    //CRUD Municipality
    public function addmunicipality () 
    {
        return view('admin.CRUD.addmunicipality');
    }

    public function storeMunicipality (Request $request) 
    {
    
        $postData = [
            'municipal_name' => $request->munName,
            'municipal_date' => $request->munDate,
        ];
        $postRef = $this->database->getReference($this->tablename)->push($postData);
        if($postRef)
        {
            return redirect('admin/municipalitys')->with('status', 'Municipality Added Succesfully');
        }
        else
        {
            return redirect('admin/municipalitys')->with('status', 'Municipality Not Added');
        }
    }

    public function editmunicipal($id) 
    {
        $key = $id;
        $editdata = $this->database->getReference($this->tablename)->getChild($key)->getValue();
        if($editdata)
        {
            return view('admin.CRUD.editmunicipal', compact('editdata', 'key'));
        }
        else
        {
            return redirect('admin.municipality')->with('status', 'Services ID Not Found');
        }
        
    }

    public function updatemunicipal(Request $request, $id)
    {
        $key = $id;
        $updateData = [
            'municipal_name' => $request->munName,
            'municipal_date' => $request->munDate,
        ];
        $res_updated = $this->database->getReference($this->tablename.'/'.$key)->update($updateData);
        if($res_updated)
        {
            return redirect('admin/municipalitys')->with('status', 'Municipality Updated Succesfully!');
        }
        else
        {
            return redirect('admin/municipalitys')->with('status', 'Municipality Not Updated');
        }
    }

    public function destroy03($id)
    {
        $key =$id;
        $del_data = $this->database->getReference($this->tablename.'/'.$key)->remove();
        if($del_data)
        {
            return redirect('admin/municipalitys')->with('status', 'Municipality Deleted Succesfully!');
        }
        else
        {
            return redirect('admin/municipalitys')->with('status', 'Municipality Not Deleted');
        }
    }

    //Shop Approval
    public function shopapproval () 
    {
        return view('admin.shopapproval');
    }   

    //Carshop
    public function carshop () 
    {
        return view('admin.carshop');
    }

    //Motorshop
    public function motorshop () 
    {
        return view('admin.motorshop');
    }  

    //Bikeshop
    public function bikeshop () 
    {
        return view('admin.bikeshop');
    }  

   



}
