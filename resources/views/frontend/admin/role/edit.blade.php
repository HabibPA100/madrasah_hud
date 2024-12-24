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
            <h5 class="text-center text-dark">Edit Role</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <td>
                            <form method="POST" action="{{ route('update.role', $edit->id) }}">
                                @csrf
                                @method('PUT')
                                <label for="role">Role:</label>
                                <select name="role" id="role" class="form-control">
                                    <option value="user" {{ $edit->role == 'user' ? 'selected' : '' }}>User</option>
                                    <option value="admin" {{ $edit->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="parent" {{ $edit->role == 'parent' ? 'selected' : '' }}>Parent</option>
                                    <option value="teacher" {{ $edit->role == 'teacher' ? 'selected' : '' }}>Teacher</option>
                                </select>
                                <button type="submit" class="btn btn-primary mt-2">Update Role</button>
                            </form>
                          
                        </td>
                    </tr>
            </table>
                  
        </div>
    </div>
  </div>
    
    @include('frontend.layout.java_script_link')
</body>
</html>
