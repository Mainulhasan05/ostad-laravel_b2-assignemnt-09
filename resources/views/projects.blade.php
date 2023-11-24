@extends('layouts.master')

@section('content')
<style>
    body {
        background-color: #f8f9fa;
    }

    .navbar {
        background-color: #343a40;
        color: #fff;
    }

    .project-card {
        margin-bottom: 20px;
    }

    .project-img {
        max-height: 200px;
        object-fit: cover;
    }
</style>
<div class="container mt-4">
    <h2>My Projects</h2>

    <!-- Project Cards -->
    <div class="card-deck">
        <!-- Project 1 -->
        <div class="card project-card">
            <img src="project1.jpg" class="card-img-top project-img" alt="Project 1 Image">
            <div class="card-body">
                <h5 class="card-title">Online Classroom using MERN stack</h5>
                <p class="card-text">Description of the project goes here.</p>
            </div>
        </div>

        <!-- Project 2 -->
        <div class="card project-card">
            <img src="project2.jpg" class="card-img-top project-img" alt="Project 2 Image">
            <div class="card-body">
                <h5 class="card-title">Mess Management Android App</h5>
                <p class="card-text">Description of the project goes here.</p>
            </div>
        </div>

        <!-- Add more projects as needed -->
    </div>
</div>
@endsection