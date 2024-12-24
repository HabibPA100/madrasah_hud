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
        </div>
        <div class="card-body">
            <form action="{{ route('donor.store') }}" method="POST">
                @csrf
                <label for="donor_name">দাতার নাম</label>
                <input type="text" name="donor_name" class="w-100 p-3" required>
                <label for="donor_type">দাতার ধরণ</label>
                <input name="donor_type" class="w-100 p-3" required>
                <button type="submit" class="btn btn-success float-end my-3" onclick="return confirm('Are you sure you want to create a new donar ?')">Submit</button>
            </form>            
        </div>
    </div>
  </div>
    @include('frontend.layout.java_script_link')
</body>
</html>
