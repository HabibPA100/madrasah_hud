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
            <a href="{{ route('donor.index') }}" class="btn btn-primary">Go Back</a>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>দাতার নাম</th>
                            <th>দাতার ধরণ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $show->id }}</td>
                            <td>{{ $show->donor_name }}</td>
                            <td>{{ $show->donor_type }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @include('frontend.layout.java_script_link')
</body>
</html>

