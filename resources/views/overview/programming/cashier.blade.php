@extends('layouts.preview')
@section('content')
    <div class="container my-5">
        <p class="radjhani dark-purple">- PROJECT</p>
        <h1 class="dark-blue fw-bold display-3 mb-0 p-0 mt-5">Cashier</h1>
        <h4 class="dark-purple mt-0 pt-0 mb-4 fw-bold">Calculation & Organizer</h4>
    <p class="dark-blue fs-5">The Cashier Payment Simulation application is designed to simulate and manage payment transactions efficiently. Users can create and delete data entries, simulating typical cashier functions. Additionally, the application allows for printing bills, providing a complete transaction record. Its user-friendly interface ensures smooth operation, making it an ideal tool for training and managing cashier-related tasks.</p>
    </div>
    <div class="project-img my-5">
        <img src="{{ asset('assets/overview/cashier/cashier.png') }}" alt="" class="w-100" style="margin: 101px 0;">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-start">
                <p class="radjhani dark-purple">- SOFTWARE USED</p>
                <p class="dark-blue fs-5">Visual Studio Code</p>
            </div>
            <div class="col-md-6 left-align-md">
                <p class="radjhani dark-purple">- LANGUAGE USED</p>
                <p class="dark-blue fs-5">PHP, JavaScript</p>
            </div>
        </div>
    </div>
@endsection
