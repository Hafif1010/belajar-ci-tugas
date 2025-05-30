<?php

namespace App\Controllers;

use App\Models\ProductCategoryModel;

class ProductCategoryController extends BaseController
{
    protected $productcategory; 

    function __construct()
    {
        $this->productcategory = new ProductCategoryModel();
    }

    public function index()
    {
        $productcategory = $this->productcategory->findAll();
        $data['productcategory'] = $productcategory;

        return view('v_productcategory', $data);
    }

    public function create()
{
    $dataForm = [
        'nama_kategori' => $this->request->getPost('nama_kategori'),
        'nama_benda' => $this->request->getPost('nama_benda'),
        'deskripsi' => $this->request->getPost('deskripsi')
    ];

    $this->productcategory->insert($dataForm);

    return redirect('productcategory')->with('success', 'Data Berhasil Ditambah');
} 
public function edit($id)
{
    $dataProduk = $this->productcategory->find($id);

    $dataForm = [
        'nama_kategori' => $this->request->getPost('nama_kategori'),
        'nama_benda' => $this->request->getPost('nama_benda'),
        'deskripsi' => $this->request->getPost('deskripsi')
    ];

    $this->productcategory->update($id, $dataForm);

    return redirect('productcategory')->with('success', 'Data Berhasil Diubah');
}

public function delete($id)
{
    $dataProduk = $this->productcategory->find($id);

    $this->productcategory->delete($id);

    return redirect('productcategory')->with('success', 'Data Berhasil Dihapus');
}
}