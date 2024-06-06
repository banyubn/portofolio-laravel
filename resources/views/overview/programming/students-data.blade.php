@extends('layouts.preview')
@section('content')
    <div class="container my-5">
        <p class="radjhani dark-purple">- PROJECT</p>
        <h1 class="dark-blue fw-bold display-3 mb-0 p-0 mt-5">Students Data</h1>
        <h4 class="dark-purple mt-0 pt-0 mb-4 fw-bold">Organizer & Classify</h4>
        <p class="dark-blue fs-5">The Students Data application is a robust tool for managing student information. It allows users to create, update, and delete student records, including fields for "nama" (name), "nis" (student ID), and "rayon" (region). This application ensures efficient and organized handling of student data, making it easy to maintain accurate and up-to-date records.</p>
    </div>
    <div class="project-img my-5 container">
        <div class="row mb-2">
            <div class="col-md-6">
                <img src="{{ asset('assets/overview/students-data/students-data-1.png') }}" alt="" class="w-100 shadow">
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/overview/students-data/students-data-2.png') }}" alt="" class="w-100 shadow">
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
                <p class="dark-blue fs-5">PHP, JavaScript</p>
            </div>
        </div>
    </div>
@endsection
