<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.layout.meta_tag')
</head>
<body>
    <header>
        @include('frontend.layout.nav')
    </header>
    <main>
        <div>
            @yield('withoutPaddingContainer')
        </div>
        <div class="container">
            @yield('main-contant')
        </div>
    </main>
    <footer>
        @include('frontend.layout.footer')
        @include('frontend.layout.sm_nav')
    </footer>
    <section>
        @include('frontend.layout.java_script_link')
    <div class="container">
        @yield('write-js')
    </div>
    </section>
</body>
</html> 