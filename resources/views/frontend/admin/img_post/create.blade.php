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
        </div>
        <div class="card-body">
            <form action="{{ route('admin-image-post.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="title">Title</label>
                <input type="text" name="title" class="w-100 p-3" />
                <label for="description">Description</label>
                <textarea name="description"cols="30"  class="w-100 p-3" required></textarea>
                <label for="image">Upload Image (Optional)</label>
                <input type="file" name="image" class="w-100">
                @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                <button type="submit" class="btn btn-success float-end my-3" onclick="return confirm('Are you sure you want to create a new post?')">Submit</button>
            </form>            
        </div>
    </div>
  </div>
    @include('frontend.layout.java_script_link')
</body>
</html>
