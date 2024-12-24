<!DOCTYPE html>
<html lang="bn">
<head>
   @include('frontend.layout.meta_tag')
    <title>Teacher Dashboard</title>
    <style>
        label{
            font-family: 'Kalpurush';
        }
        textarea,input{
            padding:5px;
        }
        iframe{
            width: 100%; 
            height: 100%;
            border: none;
        }
    </style>
</head>
<body>
    <section>
        <div class="container bg-success w-100 p-2 mt-3">
            <h3 class="text-center text-white">Welcome to Teacher Dashboard</h3>
        </div>
    </section>
    <section>
        <div class="container mt-3">
            <div class="card">
                    <a class="btn btn-primary btn-sm border-0" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"  style="width: 100px;"> <i class="bi bi-list text-danger fs-3"></i></a>
                  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel"
                  style="width: 250px;">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Teacher Dashboard</h5>
                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <nav class="bg-dark text-white p-3" style="width: 250px; height: 100vh;">
                        <h3 class="text-center">Admin</h3>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link text-white bnt bg-primary" href="{{ route('teacher-post.index') }}"> <i class="fa-regular fa-pen-to-square"></i> নতুন পোষ্ট </a>
                            </li>
                            <li class="nav-item">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Logout <i class="fa-solid fa-right-from-bracket"></i> </button>
                                </form>                                
                            </li>
                        </ul>
                    </nav>
                  </div>
            </div>
        </div>
    </section>
<hr>
<section>
  <div class="container">
    <div class="table-responsive" style="width: 100%; height: 100vh; margin: 0; padding: 0; overflow: hidden;">
        <iframe src="https://docs.google.com/document/d/17-WVFVQ-RdMrwbHQG0icxXt3gD1ZjHDvEKKjYuCeoBg/edit?embedded=true"></iframe>
    </div>
  </div>
</section>
    @include('frontend.layout.java_script_link')
</body>
</html>
