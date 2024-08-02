<x-layout>
    <div class="mt-[150px] mx-auto max-w-lg">
        <h1 class="text-3xl font-bold text-blue-500 mb-5">Register form</h1>
        <form method="POST">
            @csrf
            <div class="space-y-4">
                <label for="">Name</label>
                <input
                    name="name"
                    type="text"
                    class="w-full bg-white p-2 border-2 "
                >
            </div>
            <div class="space-y-4">
                <label for="">Username</label>
                <input
                    name="username"
                    type="text"
                    class="w-full bg-white p-2 border-2 "
                >
            </div>
            <div class="space-y-4">
                <label for="">Email</label>
                <input
                    name="email"
                    type="email"
                    class="w-full bg-white p-2 border-2 "
                >
            </div>
            <div class="space-y-4">
                <label for="">Password</label>
                <input
                    name="password"
                    type="password"
                    class="w-full bg-white p-2 border-2 "
                >
            </div>
            <button
                type="submit"
                class="bg-blue-500 py-2 px-3 rounded-md text-white my-3 w-full"
            >Register</button>
        </form>
    </div>
</x-layout>