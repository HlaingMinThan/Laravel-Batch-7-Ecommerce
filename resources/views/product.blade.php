<x-layout>
    <div class="mt-32">
        <div class="flex items-center w-[60%] mx-auto gap-10">
            <div class="w-[50%]">
                <img
                    src="https://cdn.prod.website-files.com/66010b96fb3d1aa198478236/6619440b10530ec35eb0ab72_wepik-export-20240412141328GIah-p-1080.webp"
                    alt=""
                />
            </div>
            <div class="w-[50%]">
                <h1 class="text-4xl font-bold">{{$product->name}}</h1>
                <p class="mt-10 text-2xl font-bold">$ {{$product->price}} USD</p>
                <p class="mt-10">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum error
                    reprehenderit omnis, eveniet placeat incidunt et assumenda, vel
                    natus repudiandae non quaerat esse praesentium alias voluptatem
                    officiis blanditiis debitis. Iusto aliquid voluptatibus error
                    blanditiis dolor sint, deleniti sapiente repellendus cupiditate
                    doloribus aut suscipit, velit, facere modi fuga commodi consequatur
                    quis!
                </p>
                <button class="px-14 py-5 font-bold bg-[#0067C7] text-white rounded-lg mt-10">
                    Checkout
                </button>
            </div>
        </div>
    </div>
</x-layout>