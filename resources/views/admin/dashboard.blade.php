@extends('admin.layout')
@section('dashboardContent')
<!-- Navbar Start -->
@include('admin.components.navbar');
<!-- Navbar End -->


<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Posts</h6>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User</th>
                            <th scope="col">Title</th>
                            <th scope="col">Content</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>John</td>
                            <td>Doe</td>
                            <td>jhon@email.com</td>
                            <td>
                                <a href="{{route('EditPost')}}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <form action="{{route('AddPost')}}" style="display:inline;">
                <button type="submit" class="btn btn-primary">Add New Post</button>
            </form>
        </div>
    </div>
</div>
<!-- Table End -->

@endsection