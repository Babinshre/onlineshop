@extends('layout.app')
@section('title')
    category
@endsection
@section('content')
    <h4>This is category page</h4>
    <a class="btn btn-sm btn-primary mt-3" href="{{ route('category.create') }}" >
        Add category
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>title</th>
                            <th>slug</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->title }}</td>
                            <td>{{ $category->slug }}</td>
                            <td class="">
                                <a class="btn btn-sm btn-secondary" href="{{ route('category.edit',$category->id) }}">
                                    Edit
                                </a>
                               <a href="">
                                    <form action="{{ route('category.destroy',$category->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">delete</button>
                                    </form>
                               </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
@endsection