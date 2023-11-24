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

    .contact-section {
        margin-top: 30px;
    }

    .contact-form {
        max-width: 500px;
        margin: auto;
    }
</style>
<div class="container contact-section">
    <h2>Contact Me</h2>

    <div class="row">
        <div class="col-md-6">
            <p>
                I would love to hear from you! Feel free to reach out using the contact form or through the
                provided contact details below.
            </p>

            <form class="contact-form">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="col-md-6 ">
            
            <div class="mx-3">
                <h4>Contact Details</h4>
            <p>Email: mdrifatbd5@gmail.com</p>
            <p>Phone: +880 17579 5016</p>
            <p>Address: Dhaka, Bangladesh</p>
            </div>
        </div>
    </div>
</div>
@endsection