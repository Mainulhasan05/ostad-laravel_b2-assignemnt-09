@extends('layouts.master')

@section('content')
<style>
    body {
        background-color: #f8f9fa;
    }

    .jumbotron {
        background-color: #007bff;
        color: #fff;
        padding: 2rem 1rem;
        margin-bottom: 2rem;
    }

    .profile-img {
        max-width: 200px;
        border-radius: 50%;
    }

    .project-list {
        list-style: none;
        padding: 0;
    }

    .project-list li {
        margin-bottom: 10px;
    }
</style>
<div class="jumbotron text-center">
    <img src="https://media.licdn.com/dms/image/D5603AQEugzkSuwtAfw/profile-displayphoto-shrink_800_800/0/1700570146786?e=1706140800&v=beta&t=z3Zn-idD_L27kt7zdP8PnW30fjMa0qL9jZL-PDD2j-o" alt="Profile Image" class="profile-img">
    <h1 class="display-4">Md. Mainul Hasan</h1>
    <p class="lead">Graduated from East West University in May 2023</p>
    <p class="lead">Currently working at Microdeft as a Software Developer</p>
</div>

<div class="container">
    <h2>My Skills</h2>
    <p>Technologies I work with:</p>
    <ul>
        <li>Flutter</li>
        <li>React.js</li>
        <li>Next.js</li>
        <li>Node.js</li>
        <li>Python Selenium Automation</li>
        <li>Electron.js</li>
        <li>Currently learning Laravel</li>
    </ul>

    <h2>My Projects</h2>
    <ul class="project-list">
        <li>Online Classroom using MERN stack</li>
        <li>Mess Management Android App</li>
        <li>Tutor Finder Site</li>
        <li>E-commerce website</li>
            </ul>
</div>
@endsection