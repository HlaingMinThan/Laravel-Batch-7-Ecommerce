<x-admin-layout>
    <div>
        <h1 class="my-5 text-3xl font-bold ml-4">Create Product</h1>

        <div class="max-w-3xl ml-4">
            <form
                method="POST"
                action="/admin/products"
                enctype="multipart/form-data"
            >
                @csrf
                <div class="space-y-4">
                    <label for="">Image</label>
                    <input
                        name="image"
                        type="file"
                        class="w-full bg-white p-2 border-2 "
                    >
                    @error('image')
                    <p class="text-red-400 my-4">{{$message}}</p>
                    @enderror
                </div>
                <div class="space-y-4">
                    <label for="">Name</label>
                    <input
                        value="{{old('name')}}"
                        name="name"
                        type="text"
                        class="w-full bg-white p-2 border-2 "
                    >
                    @error('name')
                    <p class="text-red-400 my-4">{{$message}}</p>
                    @enderror
                </div>
                <div class="space-y-4">
                    <label for="">Slug</label>
                    <input
                        value="{{old('slug')}}"
                        name="slug"
                        type="text"
                        class="w-full bg-white p-2 border-2 "
                    >
                    @error('slug')
                    <p class="text-red-400 my-4">{{$message}}</p>
                    @enderror
                </div>
                <div class="space-y-4">
                    <label for="">Category</label>
                    <select
                        name="category_id"
                        id=""
                        class="w-full bg-white p-2 border-2 "
                    >
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('slug')
                    <p class="text-red-400 my-4">{{$message}}</p>
                    @enderror
                </div>
                <div class="space-y-4">
                    <label for="">Price</label>
                    <input
                        value="{{old('price')}}"
                        name="price"
                        type="number"
                        class="w-full bg-white p-2 border-2 "
                    >
                    @error('price')
                    <p class="text-red-400 my-4">{{$message}}</p>
                    @enderror
                </div>
                <div class="space-y-4">
                    <label for="">Discount Percent</label>
                    <input
                        value="{{old('discount_percentage')}}"
                        name="discount_percentage"
                        type="number"
                        class="w-full bg-white p-2 border-2 "
                    >
                    @error('discount_percentage')
                    <p class="text-red-400 my-4">{{$message}}</p>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="bg-blue-500 py-2 px-3 rounded-md text-white my-3 w-full"
                >Create</button>
            </form>
        </div>
    </div>
</x-admin-layout>