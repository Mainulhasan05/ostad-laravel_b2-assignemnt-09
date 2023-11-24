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

    .about-section {
        margin-top: 30px;
    }

    .profile-img {
        max-width: 200px;
        border-radius: 50%;
    }
</style>
<div class="container about-section">
    <h2>About Me</h2>

    <div class="row">
        <div class="col-md-4">
            <img src="https://media.licdn.com/dms/image/D5603AQEugzkSuwtAfw/profile-displayphoto-shrink_800_800/0/1700570146786?e=1706140800&v=beta&t=z3Zn-idD_L27kt7zdP8PnW30fjMa0qL9jZL-PDD2j-o" alt="Profile Image" class="profile-img">
        </div>
        <div class="col-md-8">
            <p>
                Hello! I'm Md. Mainul Hasan, a passionate software developer based in Dhaka, Bangladesh. I recently
                graduated from East West University in May 2023 with a degree in [Your Degree].
            </p>
            <p>
                I am currently working at Microdeft, a dynamic software company where I contribute to various
                projects. My expertise includes working with technologies such as Flutter, React.js, Next.js,
                Node.js, Python Selenium Automation, and sometimes Electron.js.
            </p>
            <p>
                Alongside my professional work, I have successfully completed several projects, including an Online
                Classroom using the MERN stack, a Mess Management Android App, and a Tutor Finder Site. I am
                continuously learning and exploring new technologies, with my current focus on mastering Laravel.
            </p>
            <p>
                I am passionate about creating efficient and innovative solutions. My goal is to contribute to the
                tech community and make a positive impact through my work.
            </p>
        </div>
    </div>
</div>
@endsection