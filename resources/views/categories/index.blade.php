<x-layout>
    <div class="max-w-[80%] mx-auto mt-32">
        <div class="grid mt-[40px] gap-[20px] lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1">
            @foreach ($products as $product)
            <x-product-card :product="$product"></x-product-card>
            @endforeach
            {{$products->links()}}
        </div>
    </div>
</x-layout>