<div>
    <div>
        <form wire:submit.prevent="store">
            {{-- @dump($product->name) --}}
            <label>Name</label>
            <input wire:model="products.name" type="text" placeholder="Name"><br>
            <label>Price</label>
            <input wire:model="products.price" type="number" placeholder="Price"><br>
            <label>Stock</label>
            <input wire:model="products.stock" type="number" placeholder="Stock"><br>

            <button class="mt-5 bg-blue-600 text-white" type="submit">Submit</button>
        </form>
    </div>
</div>
