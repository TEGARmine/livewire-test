<div>

    <h1>Product List</h1>
    <button  class="bg-blue-600 text-white rounded-sm px-5 py-2" wire:click="$toggle('formCreate')" >Create Product</button>
    @if ($formCreate)
        <livewire:product.create :product="$product" />
    @endif
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>price</th>
                <th>Stock</th>
                <th class="px-5">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="px-5">{{ $product->name }}</td>
                    <td class="px-5">Rp {{ number_format($product->price, 0,',','.') }}</td>
                    <td class="px-5">{{ $product->stock }}</td>
                    <td>
                        <button wire:click="formEdit({{ $product->id }})" class="px-5" href="#">Edit</button>
                        <button wire:click="delete({{ $product->id }})">delete</button>
                    </td>
                </tr> 
            @endforeach
        </tbody>
    </table>

    {{ $products->links() }}
</div>
