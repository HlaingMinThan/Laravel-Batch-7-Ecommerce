<x-admin-layout>
    <div>
        <h1 class="my-5 text-3xl font-bold ml-4">Orders Lists</h1>
    </div>
    <table class="w-full text-center text-lg">
        <tr class="border-b-[1px] border-gray-300 ">
            <th>Order ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Total Amount</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <tbody>
            @foreach ($orders as $order)
            <tr class="mt-5">
                <td>{{$order->id}}</td>
                <td>{{$order->user->name}}</td>
                <td>{{$order->user->email}}</td>
                <td>{{$order->total_amount}}</td>
                <td class="{{$order->status === 'pending' ? 'text-yellow-500' : 'text-green-500'}}">{{$order->status}}
                </td>
                <td>
                    <a
                        class="text-white bg-yellow-500 px-2 py-1 rounded-lg"
                        type="submit"
                        href="/admin/orders/{{$order->id}}"
                    >View Detail</a>
                </td>
                <td>
                    <form
                        action="/admin/orders/{{$order->id}}/delete"
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

    {{$orders->links()}}
</x-admin-layout>