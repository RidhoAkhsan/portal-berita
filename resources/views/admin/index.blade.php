@extends('admin.parent')
        
@section('content')
<div class="card">
    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

        <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}" alt="Profile" class="rounded-circle">
        <h2>{{ auth()->user()->name }}</h2>
        <h3>Web Designer</h3>
        <div class="social-links mt-2">
            <a href="https://github.com/RidhoAkhsan" class="twitter"><i class="bi bi-github"></i></a>
            <a href="tel:0895357518654" class="facebook"><i class="bi bi-whatsapp"></i></a>
            <a href="https://instagramcom/ridhoakhsan.idn" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/ridho-akhsan-maulana-8138b6252" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
    </div>
</div>
@endsection