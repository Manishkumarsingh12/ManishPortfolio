@include('layout.header')
@include('layout.navbar')

<main>

    {{-- Send Mail --}}
    @if (session('mailSended'))
    <script>
        Swal.fire({
  position: "center",
  icon: "success",
  title: "🎉 Success! Your email has been sent successfully.",
  showConfirmButton: false,
  timer: 2500
});
    </script>
 @endif

 {{-- Send Fail --}}
 @if (session('mailSendedFailed'))
<script>
    Swal.fire({
  position: "center",
  icon: "error",
  title: "Something seems to have gone wrong.",
  showConfirmButton: false,
  timer: 2500
});
</script>
@endif



    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar Section -->
            @include('layout.sidebar')
            <!-- Content Section -->
            @include('home')
            @include('about')
            @include('skills')
            @include('resume')
            @include('project')
            @include('service')
            @include('contactus')
        </div>
    </div>
    </div>
    </div>
</main>
