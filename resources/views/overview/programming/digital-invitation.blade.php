@extends('layouts.preview')
@section('content')
    <div class="container my-5">
        <p class="radjhani dark-purple">- PROJECT</p>
        <h1 class="dark-blue fw-bold display-3 mb-0 p-0 mt-5">Digital Invitation</h1>
        <h4 class="dark-purple mt-0 pt-0 mb-4 fw-bold">Organizer & Presences</h4>
        <p class="dark-blue fs-5">The Digital Invitation application is designed to simplify and manage event invitations and attendance tracking. Admins have the ability to create, update, and delete invitation data, as well as generate unique QR codes for each invite. Employees can then scan these QR codes at the event to instantly mark attendees as "hadir" (present). This application ensures an efficient and accurate system for managing event invitations and tracking attendance, providing a seamless experience for both organizers and attendees.</p>
    </div>
    <div class="project-img my-5 container">
        <h4 class="dark-blue">Admins View :</h4>
        <div class="row mb-5">
            <div class="col-md-6">
                <img src="{{ asset('assets/overview/digital-inv/digital-invitation-1.png') }}" alt="" class="w-100 shadow">
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/overview/digital-inv/digital-invitation-2.png') }}" alt="" class="w-100 shadow">
            </div>
        </div>
        <h4 class="dark-blue">Employees View :</h4>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('assets/overview/digital-inv/digital-invitation-3.png') }}" alt="" class="w-100 shadow">
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/overview/digital-inv/digital-invitation-4.png') }}" alt="" class="w-100 shadow">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-start">
                <p class="radjhani dark-purple">- SOFTWARE USED</p>
                <p class="dark-blue fs-5">Visual Studio Code, Git</p>
            </div>
            <div class="col-md-6 ">
                <p class="radjhani dark-purple">- LANGUAGE USED</p>
                <p class="dark-blue fs-5">LARAVEL, PHP, JavaScript</p>
            </div>
        </div>
    </div>
@endsection
