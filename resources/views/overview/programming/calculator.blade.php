@extends('layouts.preview')
@section('content')
    <div class="container">
        <p class="radjhani dark-purple">- PROJECT</p>
        <h1 class="dark-blue fw-bold display-3 mb-0 p-0 mt-5">Calculator</h1>
        <h4 class="dark-purple mt-0 pt-0 mb-4 fw-bold">Calculation</h4>
        <p class="dark-blue fs-5">Calculator application is an easy-to-use tool designed for basic arithmetic operations. It allows users to perform addition, subtraction, multiplication, and division with a user-friendly interface. Ideal for quick calculations, this application provides accurate results instantly, making it a convenient tool for everyday math needs.</p>
    </div>
    <div class="project-img my-5 container">
        <div class="row mb-2 gy-2">
            <div class="col-md-6">
                <img src="{{ asset('assets/overview/calculator/calculator-1.png') }}" alt="" class="w-100 shadow">
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/overview/calculator/calculator-2.png') }}" alt="" class="w-100 shadow">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-start">
                <p class="radjhani dark-purple">- SOFTWARE USED</p>
                <p class="dark-blue fs-5">Visual Studio Code</p>
            </div>
            <div class="col-md-6">
                <p class="radjhani dark-purple">- LANGUAGE USED</p>
                <p class="dark-blue fs-5">HTML, CSS, JavaScript</p>
            </div>
        </div>
    </div>
@endsection
