<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link text-white bnt bg-danger" href="{{ route('admin.dashboard') }}"><i class="fa-solid fa-bars"></i> Dashboard</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white bnt bg-primary" href="{{ route('admin-image-post.index') }}"><i class="fa-solid fa-pen-to-square"></i> নতুন পোষ্ট</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-primary btn bg-white" href="{{ route('admin.add.result') }}"> রিজাল্ট যুক্ত করুন </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white bnt bg-danger" href="{{ route('admin.user') }}"> <i class="fa-solid fa-users"></i> ব্যবহারকারীর তালিকা</a>
    </li>
    <li class="nav-item">
        <a class="nav-link bg-light" href="{{ route('admin.contact') }}"> <i class="fa-regular fa-envelope"></i> ম্যাসেজ দেখুন</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white bg-success" href="{{ route('donor.index') }}"> <i class="fa-solid fa-tree"></i>  দাতা যোগ করুন</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white bg-success" href="{{ route('account.index') }}"> <i class="fa-solid fa-hand-holding-medical"></i> বার্ষিক হিসাব যোগ করুন</a>
    </li>
    <li class="nav-item">
        <a class="nav-link bg-light" href="{{ route('admin.student_salary') }}"> <i class="fa-solid fa-money-bill"></i> মাসিক বেতন </a>
    </li>
    <li class="nav-item">
        <a class="nav-link bg-light" href="{{ route('admin.exam_fee') }}"> <i class="fa-solid fa-money-bill"></i> পরীক্ষার ফি</a>
    </li>
    <li class="nav-item">
        <a class="nav-link bg-light" href="{{ route('admin.admission_fee') }}"> <i class="fa-regular fa-address-book"></i> ভর্তি ফি</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white bg-success" href="{{ route('admin.donation') }}"> <i class="fa-solid fa-circle-dollar-to-slot"></i> সাধারণ দান</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white bg-success" href="{{ route('admin.zakat') }}"><i class="fa-regular fa-handshake"></i> জাকাত ফান্ড</a>
    </li>
    <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Logout <i class="fa-solid fa-right-from-bracket"></i> </button>
        </form>                                
    </li>
</ul>