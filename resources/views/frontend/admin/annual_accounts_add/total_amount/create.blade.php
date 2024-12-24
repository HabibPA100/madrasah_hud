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
            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Go Back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('total.store') }}" method="POST">
                @csrf
                <label for="total_income">Total Income</label>
                <input type="text" name="total_income" class="w-100 p-3" required >
                <label for="total_cost">Total Cost</label>
                <input name="total_cost" class="w-100 p-3" required>
                <label for="total_debt">Total Debt</label>
                <input name="total_debt" class="w-100 p-3" required>
                <button type="submit" class="btn btn-success float-end my-3" onclick="return confirm('Are you sure you want to create a new post?')">Submit</button>
            </form>            
        </div>
    </div>
  </div>
    @include('frontend.layout.java_script_link')
</body>
</html>
