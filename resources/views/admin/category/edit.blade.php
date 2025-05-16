<x-app-layout>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900">Edit Company</h2>
            <form action="{{ route('admin.company.update',$company->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">
                            Name</label>
                        <input type="text" name="name" id="name" value="{{ $company->name }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            >
                    </div>
                    <div class="w-full">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" name="email" id="email" value="{{ $company->email }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                            </div>
                        <div class="w-full">
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Phone</label>
                            <input type="number" name="phone" id="phone" value="{{ $company->phone }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="">
                        </div>
                        <div class="w-full">
                            <label for="facebook" class="block mb-2 text-sm font-medium text-gray-900">Facebook
                                Link</label>
                            <input type="text" name="facebook" id="facebook" value="{{ $company->facebook }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2."
                                placeholder="">
                        </div>
                        <div>
                            <label for="youtube" class="block mb-2 text-sm font-medium text-gray-900">Youtube
                                Link</label>
                            <input type="text" name="youtube" id="youtube" value="{{ $company->youtube }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="">
                        </div>
                        <div>
                            <label for="instagram" class="block mb-2 text-sm font-medium text-gray-900">Instagram
                                Link</label>
                            <input type="text" name="instagram" id="instagram" value="{{ $company->instagram }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="">
                        </div>

                        <div>
                            <label for="logo"
                                class="block mb-2 text-sm font-medium text-gray-900 sm:col-span-2">Company
                                Logo</label>
                            <input type="file" name="logo" id="logo"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                placeholder="">
                                <img src="{{ asset($company->logo) }}" alt="" height="50px" width="100px">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary p-2 rounded-2xl m-2">
                        Update Product
                    </button>
            </form>
        </div>
    </section>
</x-app-layout>
