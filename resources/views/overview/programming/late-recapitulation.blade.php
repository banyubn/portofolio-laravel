@extends('layouts.preview')
@section('content')
    <div class="container my-5">
        <p class="radjhani dark-purple">- PROJECT</p>
        <h1 class="dark-blue fw-bold display-3 mb-0 p-0 mt-5">Late Recapitulation</h1>
        <h4 class="dark-purple mt-0 pt-0 mb-4 fw-bold">Recapitulation & Organizer</h4>
        <p class="dark-blue fs-5">The Late Recapitulation application helps manage and record student tardiness. It supports two user roles: "admin" and "pembimbing" (mentor). Admins can manage users, student data, and generate tardiness reports. Mentors can log and view student tardiness, adding comments as needed.</p>
    </div>
    <div class="project-img my-5 container">
        <div class="row mb-2 gy-2">
            <div class="col-md-6">
                <img src="{{ asset('assets/overview/late-recap/late-recapitulation-1.png') }}" alt="" class="w-100 shadow">
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/overview/late-recap/late-recapitulation-2.png') }}" alt="" class="w-100 shadow">
            </div>
        </div>
        <div class="row gy-2">
            <div class="col-md-6">
                <img src="{{ asset('assets/overview/late-recap/late-recapitulation-3.png') }}" alt="" class="w-100 shadow">
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/overview/late-recap/late-recapitulation-4.png') }}" alt="" class="w-100 shadow">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-start">
                <p class="radjhani dark-purple">- SOFTWARE USED</p>
                <p class="dark-blue fs-5">Visual Studio Code, Git</p>
            </div>
            <div class="col-md-6">
                <p class="radjhani dark-purple">- LANGUAGE USED</p>
                <p class="dark-blue fs-5">LARAVEL, PHP, JavaScript</p>
            </div>
        </div>
    </div>
@endsection
