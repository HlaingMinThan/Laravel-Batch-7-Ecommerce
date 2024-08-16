<x-layout>
    <div class="mt-32">
        <div class="w-[70%] mx-auto">
            <h1 class="text-3xl font-bold mb-10">Shopping Cart</h1>
            <table class="w-full border-[1px] border-gray-300">
                <tr>
                    <td class="py-6 px-4">Image</td>
                    <td class="py-6 px-4">Name</td>
                    <td class="py-6 px-4">Price</td>
                    <td class="py-6 px-4">Action</td>
                </tr>
                @php
                $cartItems = auth()->user()->cart?->cart_items()->paginate(3);
                @endphp
                @if ($cartItems->count())
                @foreach ($cartItems->load('product') as $cart_item)
                <tr class="border-b-[1px] border-gray-300">
                    <td class="py-6 px-4">
                        <img
                            class="w-[70px] h-[70px]"
                            src="https://cdn.prod.website-files.com/66010b96fb3d1aa198478236/6619440b10530ec35eb0ab72_wepik-export-20240412141328GIah-p-1080.webp"
                            alt=""
                        />
                    </td>
                    <td class="py-6 px-4">{{$cart_item->product->name}}</td>
                    <td class="py-6 px-4">${{$cart_item->product->price}}</td>
                    <td class="py-6 px-4">
                        <form
                            action="/cart_items/{{$cart_item->id}}/delete"
                            method="POST"
                        >
                            @csrf
                            <button
                                type="submit"
                                class="border-[1px] border-gray-300 py-3 px-5"
                            >
                                Cancel
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach

                @endif

            </table>
            <div class="my-4">
                {{$cartItems?->links()}}
            </div>
            <div class="flex items-center text-2xl gap-10 mt-10 font-bold">
                <p>Total :</p>
                <p>${{$cartItems->load('product')->sum('product.price') ?? 0}}</p>
            </div>
            <form
                action="/orders/store"
                method="POST"
            >
                @csrf
                <input
                    type="hidden"
                    name="total_amount"
                    value="{{$cartItems->load('product')->sum('product.price') ?? 0}}"
                >
                <label
                    for=""
                    class="font-bold mt-3"
                >Shipping address</label>
                <textarea
                    class="w-full border-[1px] border-gray-300 mt-5 p-5"
                    name="shipping_address"
                    id=""
                    placeholder="Enter your address"
                    cols="30"
                    rows="5"
                ></textarea>
                @error('shipping_address')
                <p class="text-red-400">{{$message}}</p>
                @enderror
                <button
                    type="submit"
                    class="py-5 px-20 bg-[#0067C7] text-white font-bold rounded-lg mt-10"
                >
                    Order
                </button>
            </form>
        </div>
    </div>
</x-layout>