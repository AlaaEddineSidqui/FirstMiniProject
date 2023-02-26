@extends('pages.master')
@section('content')
    <div class="container position-relative text-center mt-4">
        <h1>Contact Us</h1>
        <p>We do our best to respond within 1 working day.<br>
            Need help? Fill in the form below as soon as possible!
        </p>
    </div>
    <div class="container">
        <form>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" placeholder="First Name" id="firstName" name="firstName">
                    </div>
                    <div class="col">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" id="lastName" name="lastName">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" >
            </div>
            <div class="form-group">
              <label for="products">Model</label>
              <select class="form-control" id="products" >
                <option selected>Mercedes A45S AMG</option>
                <option>Mercedes C63S AMG</option>
                <option>Mercedes E63S AMG</option>
              </select>
            </div>
            <div class="form-group">
                <label for="message">Question</label>
                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
            </div>
            <div class="form-group mt-3">
                <button class="btn btn-secondary" type="submit" name="submit" value="Submit" id="btnSubmit">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection