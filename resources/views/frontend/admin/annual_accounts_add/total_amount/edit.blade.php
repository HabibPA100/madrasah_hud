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
            <a href="{{ route('total.index') }}" class="btn btn-primary">Go Back</a>
            <h5 class="text-center text-dark">Edit a new post</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('total.update', $edit->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="total_income">Total Income</label>
                <input type="text" name="total_income" class="w-100 p-3" value="{{ $edit->total_income }}" >
                <label for="total_cost">Total Cost</label>
                <input name="total_cost" class="w-100 p-3" value="{{ $edit->total_cost }}">
                <label for="total_debt">Total Debt</label>
                <input name="total_debt" class="w-100 p-3" value="{{ $edit->total_debt }}">
                <button type="submit" class="btn btn-warning float-end my-3" onclick="return confirm('Are you sure you want to create a new post?')">Update</button>
            </form>                  
        </div>
    </div>
  </div>
    
    @include('frontend.layout.java_script_link')
</body>
</html>
