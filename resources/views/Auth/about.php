@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>Contact Form</title>
</head>
<body>

  <div class="container">
    <h1 class="mt-5">Contact Us</h1>

    <form>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your name">
      </div>

      <div class="form-group">
        <label for="age">Age</label>
        <input type="number" class="form-control" id="age" placeholder="Enter your age">
      </div>

      <div class="form-group">
        <label for="gender">Gender</label>
        <select class="form-control" id="gender">
          <option value="">Select gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email address">
      </div>

      <button type="submit" class="btn btn-primary">Send Message</button>
    </form>

  </div>
  

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
@endsection