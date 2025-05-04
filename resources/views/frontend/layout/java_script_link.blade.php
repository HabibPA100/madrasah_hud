<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 {{-- Sweet Alert cdn is here  --}}
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- My java script is here --}}

<script src="{{ asset('frontend/js/admission_form.js') }}"></script>
<script src="{{ asset('frontend/js/copyPayNum.js') }}"></script>
<script src="{{ asset('frontend/js/donation.js') }}"></script>

@if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
            });
        </script>
@endif




<!--Start of Tawk.to Script-->
{{-- <script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function(){
        var s1 = document.createElement("script"),s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/676a96fb49e2fd8dfefcfde0/1ifs5rhq6';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
    
    Tawk_API.onLoad = function() {
        var tawkIframe = document.querySelector("iframe[title='chat widget']");
        if (tawkIframe) {
            tawkIframe.style.bottom = "8rem"; // এখানে 50px পরিবর্তন করুন আপনার চাহিদা অনুযায়ী
        }
    }; 
</script> --}}

<!--End of Tawk.to Script-->