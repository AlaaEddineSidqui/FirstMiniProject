@extends('pages.master')
@section('content')
<div class="row py-5 g-5">
        <div class="col-12 col-lg-6">
                <img src="{{asset('images/front.jpg')}}" class="m-1 w-100 sliderMainImage" data-bs-toggle="modal" data-bs-target="#imageModal"/>
            <div>
                <img src="{{asset('images/front.jpg')}}" width="60" class="m-1 sliderThumb"/>
                <img src="{{asset('images/side.jpg')}}" width="60" class="m-1 sliderThumb"/>
            </div>
        </div>
    <div class="col-12 col-lg-6">
            <h2 id="productName">
                Mercedes A45S AMG
            </h2>
            <small class="text-muted">
                Type: W177
            </small>
            <h4 class="my-4">
                from USD
            <span id="price">36.999</span>
            $
            </h4>
            <label for="selectModel" class="text-muted">
                Model
            </label>
            <select class="form-select" name="selectModel" id="model">
                <option>First Edition</option>
                <option selected>Black Series</option>
                <option>Luxury Line</option>
                <option>Business Line</option>
            </select>
            <div class="d-grid my-4">
                <button class="btn btn-lg btn-dark" type="button" id="purchaseBtn">
                    Purchase Now
                </button>
            </div>
@endsection