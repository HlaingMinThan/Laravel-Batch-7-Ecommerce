<x-layout>
    <div class="mt-[150px] mx-auto max-w-lg">
        <h1 class="text-3xl font-bold text-blue-500 mb-5">Login form</h1>
        <form method="POST">
            @csrf
            <div class="space-y-4">
                <label for="">Email</label>
                <input
                    value="{{old('email')}}"
                    name="email"
                    type="email"
                    class="w-full bg-white p-2 border-2 "
                >
                @error('email')
                <p class="text-red-400 my-4">{{$message}}</p>
                @enderror
            </div>
            <div class="space-y-4">
                <label for="">Password</label>
                <input
                    name="password"
                    type="password"
                    class="w-full bg-white p-2 border-2 "
                >
                @error('password')
                <p class="text-red-400 my-4">{{$message}}</p>
                @enderror
            </div>
            <button
                type="submit"
                class="bg-blue-500 py-2 px-3 rounded-md text-white my-3 w-full"
            >Login</button>
        </form>
    </div>
</x-layout>