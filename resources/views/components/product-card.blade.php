<a href="/products/{{$product->slug}}">
    <div>
        <div class="bg-[#F6F7FB] overflow-hidden h-[300px] product-card relative rounded-md">
            <img
                class="w-full h-full transition-all hover:scale-[1.1]"
                src="https://new.axilthemes.com/demo/template/etrade/assets/images/product/electric/product-01.png"
                alt=""
            />
            @if ($product->discount_percentage)
            <div
                class="absolute discount-btn top-[30px] right-0 bg-blue-500 py-1 rounded-md text-white font-semibold px-4">
                {{$product->discount_percentage}}% off
            </div>
            @endif
            <div class="flex translate-y-[40px] button-group opacity-0 mx-2 gap-3">
                <div class="w-[50px] h-[50px] rounded-md flex items-center justify-center bg-white">
                    <i class="fa-regular fa-eye"></i>
                </div>
                <div
                    class="flex h-[50px] button-pink text-white animate-btn grow py-[15px] rounded-[5px] transition-all items-center justify-center gap-2">
                    <p class="font-bold">Select Option</p>
                </div>
                <div class="w-[50px] h-[50px] rounded-md flex items-center justify-center bg-white">
                    <i class="fa-regular fa-heart"></i>
                </div>
            </div>
        </div>
        <div class="pb-[40px]">
            <h1 class="pt-[20px] text-lg font-semibold text-slate-600 hover:text-blue-500 cursor-pointer">
                {{$product->name}}

                <span class="text-blue-500">({{$product->discount_percentage}} % off)</span>
                <span class="text-blue-500">({{$product->category->name}})</span>
            </h1>
            <div class="flex items-center gap-3">
                <p class="text-2xl font-bold">
                    @php
                    $discountPrice = ($product->price/100) * $product->discount_percentage;
                    @endphp
                    ${{$product->price - $discountPrice}}
                </p>
                @if ($product->discount_percentage)
                <p class="text-xl font-bold text-slate-300 line-through">
                    {{-- ${{$product->price}} --}}
                    ${{$product->price}}
                </p>
                @endif
            </div>
        </div>
    </div>
</a>