<x-layout>
    <div class="max-w-[80%] mx-auto mt-32">
        <h1 class="text-center text-3xl font-bold">Blogs</h1>
        <div class="grid mt-[40px] gap-[20px] lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1">
            @foreach ($blogs as $blog)
            <x-blog-card :blog="$blog"></x-blog-card>
            @endforeach

            {{$blogs->links()}}
        </div>
    </div>
</x-layout>