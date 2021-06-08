<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ALL Category
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                      <div class="card-header">
                          All Category
                      </div>
<div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">SL NO.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created_at</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                      </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Add Category
                        </div>
                        <div class="card-body">
                            <form action="{{ route('store.category') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" name="category_name">
                                    @error('category_name')
                                     <span class="text-danger">{{ $message}}</span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
