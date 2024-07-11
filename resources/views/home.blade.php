<x-layout>
    <h1>Home Page</h1>

    @foreach ($products as $product)
    <h1><a href="/products/{{$product->id}}">{{$product->name}}
            @if ($product->is_discount)
            <span>(discount)</span>
            @endif
        </a></h1>
    <h1>Price = {{$product->price}}</h1>
    <hr>
    @endforeach
</x-layout>