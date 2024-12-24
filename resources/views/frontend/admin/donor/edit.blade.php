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
            <a href="{{ route('donor.index') }}" class="btn btn-primary">Go Back</a>
            <h5 class="text-center text-dark">Edit a new post</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('donor.update', $edit->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="donor_name">দাতার নাম</label>
                <input type="text" name="donor_name" class="w-100" value="{{ $edit->donor_name }}" class="p-3">
                
                <label for="donor_type">দাতার ধরণ</label>
                <input type="text" name="donor_type" class="w-100" value="{{ $edit->donor_type }}" class="p-3"> 
                {{-- @if ($post->image)
                    <p>Current Image:</p>
                    <img src="{{ asset('storage/' . $post->image) }}" alt="Image" style="max-width: 200px;">
                @endif --}}
                <button type="submit" class="btn btn-warning float-end my-3" onclick="return confirm('Are you sure you want to create a new donar?')">Update</button>
            </form>                  
        </div>
    </div>
  </div>
    
    @include('frontend.layout.java_script_link')
</body>
</html>
