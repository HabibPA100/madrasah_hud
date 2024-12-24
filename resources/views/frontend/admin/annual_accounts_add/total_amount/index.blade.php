<!DOCTYPE html>
<html lang="bn">
<head>
   @include('frontend.layout.meta_tag')
    <title>Admin Dashboard</title>
    <style>
        label{
            font-family: 'Kalpurush';
        }
    </style>
</head>
<body>
  <div class="container">
    @if(session('success'))
       <div class="alert alert-success">
           {{ session('success') }}
       </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Go Home</a>
            <a href="{{ route('total.create') }}" class="btn btn-primary float-end">Create Post</a>
        </div>
        <div class="card-body">
            <div class="container mt-4">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Total Income</th>
                                <th>Total Cost</th>
                                <th>Total Debt</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Total as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->total_income }}</td>
                                <td>{{ $post->total_cost }}</td>
                                <td>{{ $post->total_debt }}</td>
                                <td>
                                    <span style="display: inline-block;">
                                        <a href="{{ route('total.edit', $post->id) }}" class="btn btn-warning btn-sm" style="margin-right: 10px;">Edit</a>
                                        <a href="{{ route('total.show', $post->id) }}" class="btn btn-info btn-sm" style="margin-right: 10px;">Show</a>
                                        <form action="{{  route('total.destroy', $post->id) }}" method="POST" style="display: inline-block; margin: 0;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </span>
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
    @include('frontend.layout.java_script_link')
</body>
</html>

