<!DOCTYPE html>
<html lang="bn">
<head>
   @include('frontend.layout.meta_tag')
    <title>Parent Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        label{
            font-family: 'Kalpurush';
        }
    </style>
</head>
<body>
  <div class="container">
    {{-- @if(session('success'))
       <div class="alert alert-success">
           {{ session('success') }}
       </div>
    @endif --}}
    <div class="card">
        <div class="card-header">
            <a href="{{ route('parent.dashboard') }}" class="btn btn-primary">Go Home</a>
            <a href="{{ route('parent-post.create') }}" class="btn btn-primary float-end">Create Post</a>
        </div>
        <div class="card-body">
            <div class="container mt-4">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($posts->isNotEmpty())
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->description }}</td>
                                <td>@if ($post->image)
                                     <img src="{{ asset('storage/' . $post->image) }}" alt="Image" style="max-width: 200px;">
                                    @endif
                                </td>
                                <td>
                                    <span style="display: inline-block;">
                                        <a href="{{ route('parent-post.edit', $post->id) }}" class="btn btn-warning btn-sm" style="margin-right: 10px;">Edit</a>
                                        <a href="{{ route('parent-post.show', $post->id) }}" class="btn btn-info btn-sm" style="margin-right: 10px;">Show</a>
                                        <form action="{{ route('parent-post.destroy', $post->id) }}" method="POST" style="display: inline-block; margin: 0;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                            @else
                              <p class="text-center">No Data Found For You</p>                              
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>
    @include('frontend.layout.java_script_link')
    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
        });
        </script>
    @endif
</body>
</html>

