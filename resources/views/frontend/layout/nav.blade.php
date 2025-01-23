 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-danger"><i class="fa fa-building-columns me-3 text-success"></i><span class="humdAnimation h1">M H U D</span></h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ url('/about') }}" class="nav-item nav-link fs-5"></a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle fs-5" data-bs-toggle="dropdown">আমাদের সম্পর্কে
                </a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{ url('/about') }}" class="dropdown-item fs-5">আমাদের সম্পর্কে</a>
                    <a href="{{ url('contact') }}" class="dropdown-item fs-5"> যোগাযোগ </a>
                    <a href="{{ route('annul') }}" class="dropdown-item fs-5"> বাৎসরিক আয়-ব্যয়ের হিসাব </a>
                    <a href="{{ route('donor-name.list') }}" class="dropdown-item fs-5">দাতাদের নাম </a>
                    <a href="{{ route('hafez.list') }}" class="dropdown-item fs-5">হাফেয ছাত্রদের তালিকা দেখুন </a>
                </div>
            </div>
            {{-- --------------------  --}}
            <a href="{{ url('admission') }}" class="nav-item nav-link fs-5">ভর্তি ফরম</a>
            <a href="{{ url('routine') }}" class="nav-item nav-link fs-5">ক্লাস রুটিন</a>
            <a href="{{ url('/result') }}" class="nav-item nav-link fs-5">রেজাল্ট সিট</a>
            <a href="{{ route('register') }}" class="nav-item nav-link fs-5">আমার একাউন্ট</a>
            <a href="{{ url('/') }}" class="nav-item nav-link active fs-5">হোম</a>
            {{-- <div class="nav-item dropdown">
                <a href="{{ url('/nuraniResult') }}" class="nav-link dropdown-toggle fs-5" data-bs-toggle="dropdown">নুরানী রেজাল্ট</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{ url('/error') }}" class="dropdown-item fs-5">প্লে জামাত</a>
                    <a href="{{ url('/error') }}" class="dropdown-item fs-5"> নার্সারি জামাত</a>
                    <a href="{{ url('/error') }}" class="dropdown-item fs-5">প্রথম শ্রেণী</a>
                    <a href="{{ url('/error') }}" class="dropdown-item fs-5">দ্বিতীয় শ্রেণী</a>
                    <a href="{{ url('/error') }}" class="dropdown-item fs-5">তৃতীয় শ্রেণী</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="{{ url('/hifjoResult') }}" class="nav-link dropdown-toggle fs-5" data-bs-toggle="dropdown">হিফয বিভাগ
                </a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{ url('/error') }}" class="dropdown-item fs-5">নাজেরা বিভাগ</a>
                    <a href="{{ url('/error') }}" class="dropdown-item fs-5"> হিফয</a>
                </div>
            </div> --}}
        </div>
        <a href="{{ url('pay') }}" class="btn btn-primary py-4 d-none d-lg-block fs-5">Pay Now<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->