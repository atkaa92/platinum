@extends('layouts.admin')

@section('admin')
    <div class="title-block">
        <h3 class="title"> Add new product </h3>
        <p class="title-description"> Add new product </p>
    </div>
    <section class="section">
        <form>
            <div class="row">
                <div class="col-md-12">
                    {!! fileManager('btn-block mb-5') !!}
                    <input type="hidden" id="filemanager-url">
                    <input type="hidden" value="" name="main-image">
                </div>
            </div>
            <div id="filemanager-album" class="row mb-5">
                <div class="col-md-2 mb-2">
                    <img class="filemanager-image" src="{{ asset('images/no-image-car.png') }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h3 class="text-center">English</h3>
                    <hr>
                    <div class="form-group">
                        <label for="en-name">EN Name</label>
                        <input class="form-control boxed" placeholder="English name" name="en-name" id="en-name"
                               required>
                    </div>
                    <div class="form-group mt-5">
                        <label for="en-desc">EN Description</label>
                        <textarea class="form-control boxed" id="en-name" rows="10" name="en-desc"
                                  placeholder="English description"></textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="text-center">Russian</h3>
                    <hr>
                    <div class="form-group">
                        <label for="ru-name">RU Name</label>
                        <input class="form-control boxed" placeholder="Russian name" name="ru-name" id="ru-name"
                               required>
                    </div>
                    <div class="form-group mt-5">
                        <label for="ru-desc">RU Description</label>
                        <textarea class="form-control boxed" id="ru-desc" rows="10" name="en-desc"
                                  placeholder="Russian description"></textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="text-center">Ukraine</h3>
                    <hr>
                    <div class="form-group">
                        <label for="uk-name">UK Name</label>
                        <input class="form-control boxed" placeholder="Ukraine name" name="uk-name" id="uk-name"
                               required>
                    </div>
                    <div class="form-group mt-5">
                        <label for="uk-desc">UK Description</label>
                        <textarea class="form-control boxed" rows="10" name="uk-desc" id="uk-desc"
                                  placeholder="Ukraine description"></textarea>
                    </div>
                </div>
            </div>
            <div class="product-features">
                <div class="form-group">
                    <label>Year</label>
                    <input name="year" type="number" class="form-control boxed input-block">
                </div>
                <div class="form-group">
                    <label>Doors</label>
                    <input name="doors" type="number" class="form-control boxed input-block">
                </div>
            </div>
        </form>
    </section>

@endsection