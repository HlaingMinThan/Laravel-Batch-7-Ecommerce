<x-layout>
    <!-- hero-section -->
    <section class="bg-[#F9F3F0] min-h-[100vh] z-[5]">
        <div
            class="flex items-center min-h-[100vh] md:flex-row flex-col md:gap-0 gap-[40px] overflow-hidden relative z-[8] mx-auto w-[90%] pt-[50px]">
            <div
                class="lg:basis-[40%] flex flex-col md:items-start items-center md:justify-start justify-center basis-[100%] w-full">
                <div class="flex md:mt-0 mt-[100px] gap-3">
                    <div
                        class="w-[25px] h-[25px] bg-[#ff497c] rounded-full text-white flex items-center justify-center">
                        <i class="fa-solid fa-fire-flame-curved"></i>
                    </div>
                    <p class="text-[#ff497c] font-bold">Hot Deal In this Week</p>
                </div>
                <h1
                    class="xl:text-[60px] lg:text-[50px] md:w-full sm:w-[70%] w-full md:text-[40px] text-[30px] md:text-start text-center font-bold leading-[1.2] py-[10px]">
                    Smart Digital Watch
                </h1>
                <div
                    class="flex w-full lg:items-center md:items-start items-center lg:flex-row flex-col gap-[30px] mt-[40px]">
                    <!-- button -->
                    <div
                        class="flex bg-white lg:w-[40%] w-[70%] animate-btn py-[15px] rounded-[5px] transition-all items-center justify-center gap-2">
                        <i class="fa-solid block pt-[2px] fa-cart-shopping"></i>
                        <p class="font-bold">Shop Now</p>
                    </div>
                    <!-- images -->
                    <div class="flex gap-1">
                        <div class="flex items-center">
                            <img
                                class="border border-[2px] border-white rounded-full w-[35px] h-[35px]"
                                src="https://new.axilthemes.com/demo/template/etrade/assets/images/others/author2.png"
                                alt=""
                            /><img
                                class="border ml-[-15px] border-[2px] border-white rounded-full w-[35px] h-[35px]"
                                src="https://new.axilthemes.com/demo/template/etrade/assets/images/others/author2.png"
                                alt=""
                            /><img
                                class="border ml-[-15px] border-[2px] border-white rounded-full w-[35px] h-[35px]"
                                src="https://new.axilthemes.com/demo/template/etrade/assets/images/others/author2.png"
                                alt=""
                            /><img
                                class="border ml-[-15px] border-[2px] border-white rounded-full w-[35px] h-[35px]"
                                src="https://new.axilthemes.com/demo/template/etrade/assets/images/others/author2.png"
                                alt=""
                            />
                        </div>
                        <div class="text-yellow-400 text-xs">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <p class="text-gray-500 text-sm font-semibold">
                                <span class="font-bold text-black">100+</span> Reviews
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="lg:basis-[60%] basis-[100%] w-full flex md:items-start md:justify-start items-center justify-center">
                <div class="ml-[50px] relative">
                    <img
                        class="lg:h-[350px] h-[300px]"
                        src="https://new.axilthemes.com/demo/template/etrade/assets/images/product/product-38.png"
                        alt=""
                    />
                    <div
                        class="w-[100px] absolute top-[14%] left-[20%] h-[100px] bg-white rounded-full flex items-center justify-center flex-col">
                        <p>From</p>
                        <p class="text-lg font-semibold text-blue-400">$49.00</p>
                    </div>
                </div>
            </div>
            <img
                class="absolute z-[-1] left-[40%] top-[20%] lg:block hidden"
                src="https://new.axilthemes.com/demo/template/etrade/assets/images/others/shape-1.png"
                alt=""
            />
        </div>
    </section>
    <!-- categories section -->
    <section class="mx-auto w-[90%]">
        <div class="pt-[100px] flex gap-[10px]">
            <div class="w-[30px] h-[30px] rounded-full bg-[#ff497c] flex items-center justify-center text-white">
                <i class="fa-solid fa-tags"></i>
            </div>
            <p class="font-bold text-[#ff497c]">Categories</p>
        </div>
        <div class="flex justify-between">
            <p class="text-[37px] font-bold">Browse By Category</p>
            <div class="flex gap-1">
                <div
                    id="swiper-prev-button"
                    class="w-[50px] cursor-pointer arrow-container h-[50px] bg-slate-200 flex items-center justify-center rounded-md"
                >
                    <i class="fa-solid fa-arrow-left arrow-animation"></i>
                </div>
                <div
                    id="swiper-next-button"
                    class="w-[50px] cursor-pointer arrow-container h-[50px] bg-slate-200 flex items-center justify-center rounded-md"
                >
                    <i class="fa-solid fa-arrow-right arrow-right-animation"></i>
                </div>
            </div>
        </div>
        <div class=" py-[40px] px-[20px]">
            <div class=" mt-[20px]">
                @foreach ($categories as $category)
                <div class="bg-white shadow-md rounded-md category-card py-[20px] flex items-center flex-col">
                    <img
                        src="{{$category->icon}}"
                        alt=""
                    />
                    <p class="font-semibold pt-2">{{$category->name}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- discount section   /  -->
    <section id="discount">
        <div class="mx-auto w-[90%] p-[70px] mt-[150px] relative bg-[#F6F7FB]">
            <div>
                <div class="flex md:mt-0 mt-[100px] gap-3">
                    <div
                        class="w-[25px] h-[25px] bg-[#ff497c] rounded-full text-white flex items-center justify-center">
                        <i class="fa-solid fa-fire-flame-curved"></i>
                    </div>
                    <p class="text-[#ff497c] font-bold">Don’t Miss!!</p>
                </div>
                <h1 class="text-[50px] font-bold w-[40%] leading-[1.2] pt-[10px]">
                    {{$latestDiscountProduct->name}}
                </h1>
                <div class="flex items-center gap-4 my-[30px]">
                    <div class="w-[90px] flex-col h-[90px] rounded-full bg-white flex items-center justify-center">
                        <p class="text-2xl font-medium">0</p>
                        <p class="text-sm font-medium text-gray-600">Days</p>
                    </div>
                    <div class="w-[90px] flex-col h-[90px] rounded-full bg-white flex items-center justify-center">
                        <p class="text-2xl font-medium">00</p>
                        <p class="text-sm font-medium text-gray-600">Hrs</p>
                    </div>
                    <div class="w-[90px] flex-col h-[90px] rounded-full bg-white flex items-center justify-center">
                        <p class="text-2xl font-medium">00</p>
                        <p class="text-sm font-medium text-gray-600">Mins</p>
                    </div>
                    <div class="w-[90px] flex-col h-[90px] rounded-full bg-white flex items-center justify-center">
                        <p class="text-2xl font-medium">00</p>
                        <p class="text-sm font-medium text-gray-600">Secs</p>
                    </div>
                </div>
                <div
                    class="flex w-[20%] text-white bg-blue-500 blue-button animate-btn py-[15px] rounded-[5px] transition-all items-center justify-center gap-2">
                    <p class="font-bold">Check it Out!</p>
                </div>
            </div>
            <div class="absolute left-[50%] top-[-80px]">
                <div class="relative">
                    <img
                        src="https://new.axilthemes.com/demo/template/etrade/assets/images/product/poster/poster-03.png"
                        alt=""
                    />
                    <div class="absolute top-[59%] left-[60%]">
                        <div class="wave"></div>
                        <div class="wave2 wave"></div>
                        <div class="wave3 wave"></div>
                        <div class="wave4 wave"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-[90%] mx-auto mt-[100px]">
        <div class="flex md:mt-0 mt-[100px] gap-3">
            <div class="w-[25px] h-[25px] bg-[#ff497c] rounded-full text-white flex items-center justify-center">
                <i class="fa-solid fa-fire-flame-curved"></i>
            </div>
            <p class="text-[#ff497c] font-bold">Our Products</p>
        </div>
        <h1 class="text-[50px] font-bold leading-[1.2] pt-[10px]">
            Explore our Products
        </h1>
        <div class="grid mt-[40px] gap-[20px] lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1">
            @foreach ($products as $product)
            <x-product-card :product="$product"></x-product-card>
            @endforeach
        </div>
        <div
            class="flex w-[20%] mx-auto text-white my-[60px] blue-button animate-btn py-[15px] rounded-[5px] transition-all items-center justify-center gap-2">
            <p class="font-bold">View All Product</p>
        </div>
    </section>
    <section class="w-[90%] mx-auto mt-[100px]">
        <div class="flex md:mt-0 mt-[100px] justify-center gap-3">
            <div class="w-[25px] h-[25px] bg-[#ff497c] rounded-full text-white flex items-center justify-center">
                <i class="fa-solid fa-fire-flame-curved"></i>
            </div>
            <p class="text-[#ff497c] font-bold">Most Sold</p>
        </div>
        <h1 class="text-center text-[50px] font-semibold">
            Most Sold in eTrade Store
        </h1>
        <div class="grid md:grid-cols-2 mt-[30px] gap-[30px] mb-[100px] grid-cols-1">
            <div class="border hover:shadow-lg transition-all flex gap-[30px] border-[1px] border-[#eee] p-[30px]">
                <div class="w-[150px] bg-[#F7F7F7] rounded-lg overflow-hidden flex items-center justify-center">
                    <img
                        class="w-full h-full hover:scale-[1.1] transition-all"
                        src="https://new.axilthemes.com/demo/template/etrade/assets/images/product/electric/product-09.png"
                        alt=""
                    />
                </div>
                <div class="flex items-center justify-between w-full">
                    <div c>
                        <div class="flex items-center gap-[10px]">
                            <div class="text-yellow-400 text-xs">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <p class="text-gray-500 text-sm font-semibold">
                                <span class="font-bold text-black">100+</span> Reviews
                            </p>
                        </div>
                        <h1 class="text-lg font-semibold py-[10px] hover:text-blue-500 cursor-pointer">
                            Media Remote
                        </h1>
                        <div class="flex items-center gap-3">
                            <p class="text-2xl font-bold">$29.99</p>
                            <p class="text-xl font-bold text-slate-300 line-through">
                                $49.99
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3">
                        <div
                            class="w-[40px] h-[40px] hover:text-white flex items-center hover:bg-blue-500 transition-all justify-center rounded-md bg-white border border-[1px] border-[#eee]">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <div
                            class="w-[40px] h-[40px] hover:text-white flex items-center hover:bg-blue-500 transition-all justify-center rounded-md bg-white border border-[1px] border-[#eee]">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border hover:shadow-lg transition-all flex gap-[30px] border-[1px] border-[#eee] p-[30px]">
                <div class="w-[150px] bg-[#F7F7F7] rounded-lg overflow-hidden flex items-center justify-center">
                    <img
                        class="w-full h-full hover:scale-[1.1] transition-all"
                        src="https://new.axilthemes.com/demo/template/etrade/assets/images/product/electric/product-09.png"
                        alt=""
                    />
                </div>
                <div class="flex items-center justify-between w-full">
                    <div c>
                        <div class="flex items-center gap-[10px]">
                            <div class="text-yellow-400 text-xs">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <p class="text-gray-500 text-sm font-semibold">
                                <span class="font-bold text-black">100+</span> Reviews
                            </p>
                        </div>
                        <h1 class="text-lg font-semibold py-[10px] hover:text-blue-500 cursor-pointer">
                            Media Remote
                        </h1>
                        <div class="flex items-center gap-3">
                            <p class="text-2xl font-bold">$29.99</p>
                            <p class="text-xl font-bold text-slate-300 line-through">
                                $49.99
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3">
                        <div
                            class="w-[40px] h-[40px] hover:text-white flex items-center hover:bg-blue-500 transition-all justify-center rounded-md bg-white border border-[1px] border-[#eee]">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <div
                            class="w-[40px] h-[40px] hover:text-white flex items-center hover:bg-blue-500 transition-all justify-center rounded-md bg-white border border-[1px] border-[#eee]">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border hover:shadow-lg transition-all flex gap-[30px] border-[1px] border-[#eee] p-[30px]">
                <div class="w-[150px] bg-[#F7F7F7] rounded-lg overflow-hidden flex items-center justify-center">
                    <img
                        class="w-full h-full hover:scale-[1.1] transition-all"
                        src="https://new.axilthemes.com/demo/template/etrade/assets/images/product/electric/product-09.png"
                        alt=""
                    />
                </div>
                <div class="flex items-center justify-between w-full">
                    <div c>
                        <div class="flex items-center gap-[10px]">
                            <div class="text-yellow-400 text-xs">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <p class="text-gray-500 text-sm font-semibold">
                                <span class="font-bold text-black">100+</span> Reviews
                            </p>
                        </div>
                        <h1 class="text-lg font-semibold py-[10px] hover:text-blue-500 cursor-pointer">
                            Media Remote
                        </h1>
                        <div class="flex items-center gap-3">
                            <p class="text-2xl font-bold">$29.99</p>
                            <p class="text-xl font-bold text-slate-300 line-through">
                                $49.99
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3">
                        <div
                            class="w-[40px] h-[40px] hover:text-white flex items-center hover:bg-blue-500 transition-all justify-center rounded-md bg-white border border-[1px] border-[#eee]">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <div
                            class="w-[40px] h-[40px] hover:text-white flex items-center hover:bg-blue-500 transition-all justify-center rounded-md bg-white border border-[1px] border-[#eee]">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border hover:shadow-lg transition-all flex gap-[30px] border-[1px] border-[#eee] p-[30px]">
                <div class="w-[150px] bg-[#F7F7F7] rounded-lg overflow-hidden flex items-center justify-center">
                    <img
                        class="w-full h-full hover:scale-[1.1] transition-all"
                        src="https://new.axilthemes.com/demo/template/etrade/assets/images/product/electric/product-09.png"
                        alt=""
                    />
                </div>
                <div class="flex items-center justify-between w-full">
                    <div c>
                        <div class="flex items-center gap-[10px]">
                            <div class="text-yellow-400 text-xs">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <p class="text-gray-500 text-sm font-semibold">
                                <span class="font-bold text-black">100+</span> Reviews
                            </p>
                        </div>
                        <h1 class="text-lg font-semibold py-[10px] hover:text-blue-500 cursor-pointer">
                            Media Remote
                        </h1>
                        <div class="flex items-center gap-3">
                            <p class="text-2xl font-bold">$29.99</p>
                            <p class="text-xl font-bold text-slate-300 line-through">
                                $49.99
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3">
                        <div
                            class="w-[40px] h-[40px] hover:text-white flex items-center hover:bg-blue-500 transition-all justify-center rounded-md bg-white border border-[1px] border-[#eee]">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <div
                            class="w-[40px] h-[40px] hover:text-white flex items-center hover:bg-blue-500 transition-all justify-center rounded-md bg-white border border-[1px] border-[#eee]">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border hover:shadow-lg transition-all flex gap-[30px] border-[1px] border-[#eee] p-[30px]">
                <div class="w-[150px] bg-[#F7F7F7] rounded-lg overflow-hidden flex items-center justify-center">
                    <img
                        class="w-full h-full hover:scale-[1.1] transition-all"
                        src="https://new.axilthemes.com/demo/template/etrade/assets/images/product/electric/product-09.png"
                        alt=""
                    />
                </div>
                <div class="flex items-center justify-between w-full">
                    <div c>
                        <div class="flex items-center gap-[10px]">
                            <div class="text-yellow-400 text-xs">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <p class="text-gray-500 text-sm font-semibold">
                                <span class="font-bold text-black">100+</span> Reviews
                            </p>
                        </div>
                        <h1 class="text-lg font-semibold py-[10px] hover:text-blue-500 cursor-pointer">
                            Media Remote
                        </h1>
                        <div class="flex items-center gap-3">
                            <p class="text-2xl font-bold">$29.99</p>
                            <p class="text-xl font-bold text-slate-300 line-through">
                                $49.99
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3">
                        <div
                            class="w-[40px] h-[40px] hover:text-white flex items-center hover:bg-blue-500 transition-all justify-center rounded-md bg-white border border-[1px] border-[#eee]">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <div
                            class="w-[40px] h-[40px] hover:text-white flex items-center hover:bg-blue-500 transition-all justify-center rounded-md bg-white border border-[1px] border-[#eee]">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border hover:shadow-lg transition-all flex gap-[30px] border-[1px] border-[#eee] p-[30px]">
                <div class="w-[150px] bg-[#F7F7F7] rounded-lg overflow-hidden flex items-center justify-center">
                    <img
                        class="w-full h-full hover:scale-[1.1] transition-all"
                        src="https://new.axilthemes.com/demo/template/etrade/assets/images/product/electric/product-09.png"
                        alt=""
                    />
                </div>
                <div class="flex items-center justify-between w-full">
                    <div c>
                        <div class="flex items-center gap-[10px]">
                            <div class="text-yellow-400 text-xs">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <p class="text-gray-500 text-sm font-semibold">
                                <span class="font-bold text-black">100+</span> Reviews
                            </p>
                        </div>
                        <h1 class="text-lg font-semibold py-[10px] hover:text-blue-500 cursor-pointer">
                            Media Remote
                        </h1>
                        <div class="flex items-center gap-3">
                            <p class="text-2xl font-bold">$29.99</p>
                            <p class="text-xl font-bold text-slate-300 line-through">
                                $49.99
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3">
                        <div
                            class="w-[40px] h-[40px] hover:text-white flex items-center hover:bg-blue-500 transition-all justify-center rounded-md bg-white border border-[1px] border-[#eee]">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <div
                            class="w-[40px] h-[40px] hover:text-white flex items-center hover:bg-blue-500 transition-all justify-center rounded-md bg-white border border-[1px] border-[#eee]">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div></div>
        </div>
    </section>
</x-layout>