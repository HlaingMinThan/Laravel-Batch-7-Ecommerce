<x-layout>
    <div class="max-w-[80%] mx-auto mt-32">
        <h1 class="text-center text-3xl font-bold">{{$category->name}}</h1>
        <div class="grid mt-[40px] gap-[20px] lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1">
            @php
            $products = $category->products()->with('category')->paginate(8);
            @endphp
            @foreach ($products as $product)
            <x-product-card :product="$product"></x-product-card>
            @endforeach
            {{$products->links()}}
        </div>
    </div>
</x-layout>