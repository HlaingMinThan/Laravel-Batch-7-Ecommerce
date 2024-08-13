<x-layout>
    <div class="mt-32">
        <h1 class="text-center font-bold text-2xl my-3">{{__('products.products')}}</h1>
        <form action="">
            <div class="w-[60%] mx-auto flex py-2 bg-black rounded-lg px-3">
                <input
                    name="search"
                    type="text"
                    class="outline-none py-3 text-white w-full  bg-transparent"
                    placeholder="What are you looking for?"
                />
                <button
                    type="submit"
                    class="h-full px-5 rounded-lg py-3 bg-white"
                >
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </form>
    </div>
    <div class="mt-32 px-[40px]">
        <div class="grid mt-[40px] gap-[20px] lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1">
            @forelse ($products->load('category') as $product)
            <x-product-card :product="$product"></x-product-card>
            @empty
            <p>no products found...</p>
            @endforelse
        </div>
    </div>
</x-layout>