<x-app-layout>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900">Create a new Category</h2>
            <form action="{{ route('admin.category.store') }}" method="POST">
                @csrf
                @method('post')
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">
                            Name</label>
                        <input type="text" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Category name">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="meta_keywords" class="block mb-2 text-sm font-medium text-gray-900">
                            keywords</label>
                        <textarea name="meta_keywords" id="" cols="30" rows="6"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Meta keywords"></textarea>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="meta_description" class="block mb-2 text-sm font-medium text-gray-900">
                            metaa Description</label>
                        <textarea name="meta_description" id="" cols="30" rows="6"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Metaa Description"></textarea>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary p-2 rounded-2xl m-2">
                    Add Category
                </button>
            </form>
        </div>
    </section>
</x-app-layout>
