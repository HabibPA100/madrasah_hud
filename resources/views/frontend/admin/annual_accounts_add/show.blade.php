<!DOCTYPE html>
<html lang="bn">
<head>
   @include('frontend.layout.meta_tag')
    <title>Admin Dashboard</title>
    <style>
        label{
            font-family: 'Noto Sans Bengali', sans-serif;
        }
    </style>
</head>
<body>
        <div class="container mt-4">
            <a href="{{ route('account.index') }}" class="btn btn-primary">Go Back</a>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Year</th>
                            <th>Income</th>
                            <th>Cost</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $show->id }}</td>
                            <td>{{ $show->year_name }}</td>
                            <td>{{ $show->income }}</td>
                            <td>{{ $show->cost }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @include('frontend.layout.java_script_link')
</body>
</html>

