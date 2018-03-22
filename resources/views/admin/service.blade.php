@extends('layouts.admin')

@section('admin')
    <div class="title-block">
        <h3 class="title"> {{ $service->title }} </h3>
        <p class="title-description"> Service </p>
    </div>
    <form method="post" action="/admin/service/{{ $service->id }}">
        {{ csrf_field() }}
        <section class="section">
            <div class="row sameheight-container">
                <div class="col-md-12">
                    <div class="card card-block ">
                        <div class="form-group">
                            <label class="control-label">Service Title</label>
                            <input name="title" type="text" value="{{ $service->title }}" class="form-control boxed" placeholder="Description Title"> 
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-block sameheight-item">
                        <div class="form-group">
                            <label class="control-label">Description Title</label>
                            <input name="desc_title" type="text" value="{{ $service->desc_title }}" class="form-control boxed" placeholder="Description Title"> 
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <textarea name="desc" rows="3" class="form-control boxed"> {{ $service->desc }} </textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-block featureBlock">
                        <div class="form-group">
                            <label class="control-label">Features Title</label>
                            <input name="features_title" type="text" value="{{ $service->features_title }}" class="form-control boxed" placeholder="Features Title"> 
                        </div>
                        <div class="form-group  has-error">
                            <label class="control-label">Features</label>
                            <input name="features[]" type="text" class="form-control boxed" placeholder="Feature"> 
                        </div>
                        <button type="button" class="btn btn-info-outline addFeature">Add Feature</button>
                    </div>
                    
                </div>
                <div class="col-md-12">
                    <div class="card card-block text-right">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Update Service</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    @push('scripts')
        <script type="text/javascript" src="{{ asset("js/service.js") }}"></script>
    @endpush
@endsection
