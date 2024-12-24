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
    <h4 class="text-center text-danger">ভর্তি ফি পরিশোধ এর তালিকা</h4>
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
                        <table class="table table-success table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Amount</th>
                                    <th>Transaction Number</th>
                                    <th>Student Name</th>
                                    <th>Donar Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($admissionFee as $fees)
                              <tr>
                                <td>{{ $fees->id }}</td>
                                <td>{{ $fees->amount }}</td>
                                <td>{{ $fees->transaction_number }}</td>
                                <td>{{ $fees->donor_name }}</td>
                                <td>{{ $fees->donor_contact }}</td>
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
