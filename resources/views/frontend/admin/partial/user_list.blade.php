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
<section>
    <div class="container bg-success w-100 p-2 mt-3">
        <h3 class="text-center text-white">Welcome to Admin Dashboard</h3>
    </div>
    <h4 class="text-center text-danger">রেজিস্টারক্রিত ব্যাবহারকারীদের তালিকা</h4>
</section>
    <section>
        <div class="container mt-3">
            <div class="card">
                    <a class="btn btn-primary btn-sm border-0 my-2 float-right" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"  style="width: 125px;">Link with href</a>
                  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel"
                  style="width: 250px;">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Admin Dashboard</h5>
                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <nav class="bg-dark text-white p-3" style="width: 250px; height: 100vh;">
                        <h3 class="text-center">Admin</h3>
                        {{-- all ul is here  --}}
                        @include('frontend.admin.partial.ul')
                        {{-- all ul is here  --}}
                    </nav>
                  </div>
                <section>
                  <div class="table-responsive">
                    @if(session('status'))
                                <div class="alert alert-success mt-2">{{ session('status') }}</div>
                    @endif 
                    <table class="table table-success table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Update</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($user_data as $user)
                          <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td><a href="{{ route('role.edit', $user->id) }}" class="btn btn-sm btn-danger">Role Update</a>
                            </td>
                          </tr>
                          @endforeach  
                        </tbody>
                      </table>
                  </div>  
                </section>
            </div>
        </div>
    </section>
    
    @include('frontend.layout.java_script_link')
</body>
</html>
