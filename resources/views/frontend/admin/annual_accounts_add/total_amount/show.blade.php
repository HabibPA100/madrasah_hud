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
        <div class="container mt-4">
            <a href="{{ route('total.index') }}" class="btn btn-primary">Go Back</a>
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
                        <tr>
                            <td>{{ $show->id }}</td>
                            <td>{{ $show->total_income }}</td>
                            <td>{{ $show->total_cost }}</td>
                            <td>{{ $show->total_debt }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @include('frontend.layout.java_script_link')
</body>
</html>

