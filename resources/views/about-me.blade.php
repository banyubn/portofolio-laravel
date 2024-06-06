@extends('layouts.about-me')
@section('content')
    <div class="container pt-5">
        <div class="row d-flex align-items-center justify-content-around">
            <div class="col-lg-6">
                <p class="radjhani dark-purple">- INTRODUCTION</p>
                <p class="fs-5 mb-5">My name is <span class="fs-4 fw-bold">Banyu Bagastara Nugroho</span>, I am
                    a Fullstack Developer, my point in Technology is to make the digital world to be better and useful for
                    everybody</p>
                <p class="dark-blue p-0 m-0 fs-5">Currently, I am a Student on</p>
                <h1 class="poppins-bold dark-blue mb-5 fs-4">Wikrama Vocational Highschool</h1>
                <h1 class="poppins-bold dark-blue mb-5 display-4">Fullstack Developer</h1>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <img src="{{ asset('assets/banyu-profile.png') }}" alt="banyu"
                    class="profile-img img-fluid float-right shadow">

                <p class="mt-2 mb-5 dark-blue" style="font-style: italic">- "Bagaimana mimpi bisa terwujud, sedangkan hidup
                    tidak pernah bersujud"</p>
            </div>
        </div>
    </div>
@endsection
