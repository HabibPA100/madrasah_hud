<!DOCTYPE html>
<html lang="bn">
<head>
   @include('frontend.layout.meta_tag')
    <title>User Dashboard</title>
    <style>
        label{
            font-family: 'Kalpurush';
        }
    </style>
</head>
<body> 
        <div class="container mt-4">
            <a href="{{ route('user-post.index') }}" class="btn btn-primary">Go Back</a>
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
                        <tr>
                            <td>{{ $show->id }}</td>
                            <td>{{ $show->title }}</td>
                            <td>{{ $show->description }}</td>
                            <td>
                                @if ($show->image)
                                    <img src="{{ asset('storage/' . $show->image) }}" alt="Image" style="max-width: 200px;">
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @include('frontend.layout.java_script_link')
</body>
</html>

