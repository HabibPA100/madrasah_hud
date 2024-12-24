<!DOCTYPE html>
<html lang="bn">
<head>
   @include('frontend.layout.meta_tag')
    <title>Parent Dashboard</title>
    <style>
        label{
            font-family: 'Kalpurush';
        }
        textarea,input{
            padding:5px;
        }
        mark {
            background-color: rgb(255, 255, 7);
            color: black;
        }
    </style>
</head>
<body>
<section>
    <div class="container bg-success w-100 p-2 mt-3">
        <h3 class="text-center text-white">Welcome to Parent Dashboard</h3>
    </div>
</section>
    <section>
        <div class="container mt-3">
            <div class="card">
                    <a class="btn btn-success btn-sm border-0 my-2 float-right" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"  style="width: 125px; color:black">Link with href</a>
                  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel"
                  style="width: 250px;">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Parent Dashboard</h5>
                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <nav class="bg-dark text-white p-3" style="width: 250px; height: 100vh;">
                        <h3 class="text-center">Parent</h3>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link text-white bnt bg-primary" href="{{ route('parent-post.index') }}"> <i class="fa-regular fa-pen-to-square"> </i> নতুন পোষ্ট </a>
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
                  <hr>
                  <section>
                    @include('frontend.parent.partial.parentInfo')
                </section>
            </div>
        </div>
    </section>
    @include('frontend.layout.java_script_link')
</body>
</html>

