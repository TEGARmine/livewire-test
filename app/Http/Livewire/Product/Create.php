<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

use function PHPUnit\Framework\isEmpty;

class Create extends Component
{

    public $products;
    public $product;
    public $status = false;

    protected $rules = [
        'products.name' => 'required',
        'products.price' => 'required',
        'products.stock' => 'required',
    ];

    public function mount(){
        $this->products['name'] = $this->product->name ?? null;
        $this->products['price'] = $this->product->price ?? null;
        $this->products['stock'] = $this->product->stock ?? null;
        if ($this->products['name'] != null) $this->status = true;
    }

    public function store()
    {
        $this->validate();
        if($this->status){
            $product = Product::find($this->product->id);
            $product->name = $this->products['name'];
            $product->price = $this->products['price'];
            $product->stock = $this->products['stock'];
            $this->emit('createdProduct', $product);
            $product->save();
        }else{
            $product = Product::create($this->products);
            $this->emit('createdProduct', $product);
        }
    }

    public function render()
    {
        return view('livewire.product.create');
    }
}
