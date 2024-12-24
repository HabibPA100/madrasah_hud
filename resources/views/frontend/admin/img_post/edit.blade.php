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
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin-image-post.index') }}" class="btn btn-primary">Go Back</a>
            <h5 class="text-center text-dark">Edit a new post</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin-image-post.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label for="title">Title</label>
                <input type="text" name="title" class="w-100 p-3" value="{{ $edit->title }}" >
                <label for="description">Description</label>
                <textarea name="description"  cols="30" class="w-100 p-3">{{ $edit->description}}</textarea>
                @if ($edit->image)
                    <p>Current Image:</p>
                    <img src="{{ asset('storage/' . $edit->image) }}" alt="Image" style="max-width: 200px;">
                @endif
                <button type="submit" class="btn btn-warning float-end my-3" onclick="return confirm('Are you sure you want to update a new post?')">Update</button>
            </form>                  
        </div>
    </div>
  </div>
    
    @include('frontend.layout.java_script_link')
</body>
</html>
