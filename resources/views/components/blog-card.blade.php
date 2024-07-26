<a href="/blogs/">
    <div>
        <div class="bg-[#F6F7FB] overflow-hidden h-[300px] product-card relative rounded-md">
            <img
                class="w-full h-full transition-all hover:scale-[1.1]"
                src="https://new.axilthemes.com/demo/template/etrade/assets/images/product/electric/product-01.png"
                alt=""
            />
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
                {{$blog->title}}
            </h1>
            <div class="flex items-center gap-3">
                <p class="text-2xl font-bold">
                    {{$blog->intro}}
                </p>
            </div>
        </div>
    </div>
</a>