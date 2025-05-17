<x-app-layout>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900">Edit Company</h2>
            <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 lg:grid-cols-2">
                   <div class="flex justify-between">

                     <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">
                            Name</label>
                        <input type="text" name="name" id="name" value="{{ $category->name }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5">
                    </div>
                     <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">
                            Change Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1" {{ $category->status==1 ? 'selected': '' }}>Active</option>
                                <option value="0" {{ $category->status==0 ? 'selected': '' }}>Inactive</option>
                            </select>
                    </div>
                   </div>



                    <div class="w-full">
                        <label for="meta_keywords" class="block mb-2 text-sm font-medium text-gray-900">Keywords</label>
                        <textarea name="meta_keywords" id="meta_keywords" cols="30" rows="10"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">{{ $category->meta_keywords }}</textarea>
                    </div>

                    <div class="w-full">
                        <label for="meta_description"
                            class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                        <textarea name="meta_description" id="meta_description" cols="30" rows="10"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">{{ $category->meta_description }}</textarea>
                    </div>




                </div>
                <button type="submit" class="btn btn-primary p-2 rounded-2xl m-2">
                    Update Category
                </button>
            </form>
        </div>
    </section>
</x-app-layout>
