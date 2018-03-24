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
                    <h3 class="text-center">Armenian</h3>
                    <hr>
                    <div class="form-group">
                        <label for="hy_name">HY Name</label>
                        <input class="form-control boxed" placeholder="Armenian name" name="hy_name" id="hy_name"
                               required>
                    </div>
                    <div class="form-group mt-5">
                        <label for="hy_desc">HY Description</label>
                        <textarea class="form-control boxed" rows="10" name="hy_desc" id="hy_desc"
                                  placeholder="Armenian description"></textarea>
                    </div>
                </div>
            </div>
            <div class="product-features">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Year</label>
                                    <input name="year" placeholder="Year - only number" type="number"
                                           class="form-control boxed input-block">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>In store</label>
                                <div class="in-store">
                                    <label>
                                        <input type="checkbox" checked="">
                                        <i></i>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label>Price</label>
                                <input name="price" placeholder="Price - only number" type="number"
                                       class="form-control boxed input-block">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Color</label>
                                <input name="color" type="color" class="form-control boxed input-block">
                                <span class="color-picker">
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Odometer</label>
                            <input name="odometer" placeholder="Odometer - only number" type="number"
                                   class="form-control boxed input-block">
                        </div>
                        <div class="form-group">
                            <label>Doors</label>
                            <input name="doors" placeholder="Door - only number" type="number"
                                   class="form-control boxed input-block">
                        </div>

                        <div class="form-group">
                            <label>Interior Type</label>
                            <input name="interior" placeholder="Interior - Text about Interior Type" type="text"
                                   class="form-control boxed input-block">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Gearbox</label>
                            <select name="gearbox" class="form-control boxed">
                                <option value="Semi-automatic">Semi-automatic</option>
                                <option value="Manual">Manual</option>
                                <option value="Automatic">Automatic</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Manufacturer</label>
                            <select name="brand" class="form-control boxed">
                                @foreach($manufacturers as $manufacturer)
                                    <option value="{{ $manufacturer['en_name'] }}">{{ $manufacturer['en_name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <select name="location" class="form-control boxed">
                                <option value="Armenia">Armenia</option>
                                <option value="USA">USA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Fuel Used</label>
                            <select name="fuel" class="form-control boxed">
                                <option value="0"></option>
                                <option value="6">Not Specified</option>
                                <option value="5">Electric</option>
                                <option value="4">Ethanol</option>
                                <option value="3">Hybrid</option>
                                <option value="2">Diesel</option>
                                <option value="1">Gasoline</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Body</label>
                            <select name="body" class="form-control boxed">
                                <option value="0"></option>
                                <option value="Bike">Bike</option>
                                <option value="Scooter">Scooter</option>
                                <option value="Electric Car">Electric Car</option>
                                <option value="Crossover">Crossover</option>
                                <option value="Luxury Car">Luxury Car</option>
                                <option value="Hybrid Car">Hybrid Car</option>
                                <option value="Convertible">Convertible</option>
                                <option value="Sports Car">Sports Car</option>
                                <option value="Wagon">Wagon</option>
                                <option value="Van">Van</option>
                                <option value="SUV">SUV</option>
                                <option value="Truck">Truck</option>
                                <option value="Sedan">Sedan</option>
                                <option value="Coupe">Coupe</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

@endsection

@push('scripts')
    <script>
        $('input[name=color]').change(function () {
            $('.color-picker').css({backgroundColor: $(this).val()})
        })
    </script>
@endpush