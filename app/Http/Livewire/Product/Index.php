<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{

    public $formCreate = false;
    public $product = [];
    protected $listeners = ['createdProduct'];

    public function createdProduct()
    {

    }

    public function render()
    {
        $products = Product::latest()->paginate(10);

        return view('livewire.product.index', compact('products'));
    }

    public function delete($id){
        $product = Product::where('id', $id)->first();
        $product->delete();
    }

    public function formEdit($id)
    {
        // $this->formCreate = false;
        $product = Product::where('id', $id)->first();
        $this->product = $product;
        $this->formCreate = !$this->formCreate;
    }
}
