<x-admin-layout>
    <div class="flex justify-between items-center">
        <h1 class="my-5 text-3xl font-bold ml-4">Products Lists</h1>
        <div>
            <a
                href="/admin/products/create"
                class="text-white bg-indigo-500 px-3 py-3 rounded-lg"
                type="submit"
            >create product</a>
        </div>
    </div>
    <table class="w-full text-center text-lg">
        <tr class="border-b-[1px] border-gray-300 ">
            <th>Product ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Discount Percent</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
        <tbody>
            @foreach ($products as $product)
            <tr class="mt-5">
                <td>{{$product->id}}</td>
                <td>
                    <img
                        src="{{$product->image}}"
                        width="40"
                        height="40"
                        alt=""
                    >
                </td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->discount_percentage}}%</td>
                <td>abc</td>
                <td>
                    <form
                        action="/admin/products/{{$product->id}}/delete"
                        method="POST"
                    >
                        @method('delete')
                        @csrf
                        <button
                            class="text-white bg-red-500 px-2 py-1 rounded-lg"
                            type="submit"
                        >delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{$products->links()}}
</x-admin-layout>