<x-app-layout>

    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header flex justify-between">
                            <h4>Category DataTables</h4>

                            <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Add Category</a>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Title</th>
                                            <th>Slug</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $index=>$category)
                                            <tr>
                                                <td>{{++$index}}</td>
                                                <td>
                                                    {{ $category->name }}
                                                </td>
                                                <td>
                                                        {{ $category->slug }}
                                                </td>

                                                <td>
                                                        @if ($category->status==1)
                                                            <span class=" badge bg-success text-white">Active</span>

                                                        @else
                                                            <span class="badge bg-danger text-white">Inactive</span>

                                                        @endif



                                                </td>

                                                <td>
                                                    <div class="flex gap-4">
                                                        <a href="{{ route('admin.category.edit', $category->id) }}"
                                                            class="btn btn-primary px-4">Edit</a>
                                                        <form action="{{ route('admin.category.destroy',$category->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger submit">Delete</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
</x-app-layout>
