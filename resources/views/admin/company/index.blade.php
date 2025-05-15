<x-app-layout>

    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header flex justify-between">
                            <h4>Company DataTables</h4>
                            @if (!$company)
                            <a href="{{ route('admin.company.create') }}" class="btn btn-primary">Add Company</a>

                            @endif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Company Name</th>
                                            <th>logo</th>
                                            <th>E-mail</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>{{$company->name}}</td>
                                            <td>
                                                <img alt="image" src="{{ asset($company->logo) }}" width="50">
                                            </td>

                                            <td>
                                                    {{ $company->email }}
                                            </td>
                                            <td>
                                                {{ $company->phone }}
                                            </td>
                                            <td>
                                                <div class="flex gap-4">
                                                    <a href="{{ route('admin.company.edit',$company->id) }}" class="btn btn-primary px-4">Edit</a>
                                                    <form action="{{ route('admin.company.destroy', $company->id ) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger submit">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
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
