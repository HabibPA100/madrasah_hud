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
            <a href="{{ route('account.index') }}" class="btn btn-primary">Go Back</a>
            <h5 class="text-center text-dark">Edit Annual Account</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('account.update', $edit->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="year_name">অর্ধ বছরের নাম লিখুন</label>
                <input type="text" name="year_name" class="w-100 p-3" value="{{ $edit->year_name }}" >
                <label for="income">কত টাকা আয় হয়েছে ? </label>
                <input type="text" name="income"  class="w-100 p-3" value="{{ $edit->income }}">
                <label for="cost">কত টাকা ব্যয় হয়েছে ?</label>
                <input type="text" name="cost"  class="w-100 p-3" value="{{ $edit->cost }}">
                <button type="submit" class="btn btn-warning float-end my-3" onclick="return confirm('Are you sure you want to create a new post?')">Update</button>
            </form>                  
        </div>
    </div>
  </div>
    
    @include('frontend.layout.java_script_link')
</body>
</html>
