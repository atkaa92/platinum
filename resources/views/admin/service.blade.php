@extends('layouts.admin')

@section('admin')
    <div class="title-block">
        <h3 class="title"> Service </h3>
        <p class="title-description"> {{ $service->en_title }} </p>
    </div>
    @include('admin/messages')
    <form method="post" action="/admin/service/{{ $service->id }}">
        {{ csrf_field() }}
        <section class="section">
            <div class="row sameheight-container">
                <div class="col-md-4">
                    <div class="card card-block ">
                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="header-block">
                                    <p class="title"> Armenian section </p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Service Title</label>
                            <input  name="hy_title" type="text" value="{{ $service->hy_title }}" class="form-control boxed" placeholder="Description Title" required> 
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description Title</label>
                            <input name="hy_desc_title" type="text" value="{{ $service->hy_desc_title }}" class="form-control boxed" placeholder="Description Title" required> 
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <textarea name="hy_desc" rows="3" class="form-control boxed" required> {{ $service->hy_desc }} </textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Features Title</label>
                            <input name="hy_features_title" type="text" value="{{ $service->hy_features_title }}" class="form-control boxed" placeholder="Features Title" required> 
                        </div>
                        <label class="control-label">Features</label>
                        @if($service->hy_features)
                            @foreach(unserialize($service->hy_features) as $i => $uks)
                                <div class="form-group  has-error {{ $i ? 'input-group' : '' }}">
                                        <input name="hy_features[]" value="{{$uks}}" type="text" class="form-control boxed" placeholder="Feature" required>
                                        {!! $i ? '<span style="cursor:pointer; background-color:#fff;margin:9px" class="input-group-addon fa fa-times form-control-feedback text-right removeFeature"></span>' : '' !!} 
                                </div>
                            @endforeach
                        @else
                            <div class="form-group  has-error ">
                                <input name="hy_features[]"  type="text" class="form-control boxed" placeholder="Feature" required>
                            </div>
                        @endif
                        <button type="button" class="btn btn-info-outline addUkFeature">Add Feature</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-block ">
                        <div class="card card-warning">
                            <div class="card-header">
                                <div class="header-block">
                                    <p class="title"> English section </p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label">Service Title</label>
                            <input  name="en_title" type="text" value="{{ $service->en_title }}" class="form-control boxed" placeholder="Description Title" required> 
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description Title</label>
                            <input name="en_desc_title" type="text" value="{{ $service->en_desc_title }}" class="form-control boxed" placeholder="Description Title" required> 
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <textarea name="en_desc" rows="3" class="form-control boxed" required> {{ $service->en_desc }} </textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Features Title</label>
                            <input name="en_features_title" type="text" value="{{ $service->en_features_title }}" class="form-control boxed" placeholder="Features Title" required> 
                        </div>
                        <label class="control-label">Features</label>
                        @if($service->en_features)
                            @foreach(unserialize($service->en_features) as $j => $ens)
                                <div class="form-group  has-error {{ $j ? 'input-group' : '' }}">
                                        <input name="en_features[]" value="{{$ens}}" type="text" class="form-control boxed" placeholder="Feature" required>
                                        {!! $j ? '<span style="cursor:pointer; background-color:#fff;margin:9px" class="input-group-addon fa fa-times form-control-feedback text-right removeFeature"></span>' : '' !!} 
                                </div>
                            @endforeach
                        @else
                            <div class="form-group  has-error ">
                                <input name="en_features[]"  type="text" class="form-control boxed" placeholder="Feature" required>
                            </div>
                        @endif
                        <button type="button" class="btn btn-info-outline addEnFeature">Add Feature</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-block ">
                        <div class="card card-danger">
                            <div class="card-header">
                                <div class="header-block">
                                    <p class="title"> Russian section </p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Service Title</label>
                            <input  name="ru_title" type="text" value="{{ $service->ru_title }}" class="form-control boxed" placeholder="Description Title" required> 
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description Title</label>
                            <input name="ru_desc_title" type="text" value="{{ $service->ru_desc_title }}" class="form-control boxed" placeholder="Description Title" required> 
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <textarea name="ru_desc" rows="3" class="form-control boxed" required> {{ $service->ru_desc }} </textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Features Title</label>
                            <input name="ru_features_title" type="text" value="{{ $service->ru_features_title }}" class="form-control boxed" placeholder="Features Title" required> 
                        </div>
                        <label class="control-label">Features</label>
                        @if($service->ru_features)
                            @foreach(unserialize($service->ru_features) as $g => $rus)
                                <div class="form-group  has-error {{ $g ? 'input-group' : '' }}">
                                        <input name="ru_features[]" value="{{$rus}}" type="text" class="form-control boxed" placeholder="Feature" required>
                                        {!! $g ? '<span style="cursor:pointer; background-color:#fff;margin:9px" class="input-group-addon fa fa-times form-control-feedback text-right removeFeature"></span>' : '' !!} 
                                </div>
                            @endforeach
                        @else
                            <div class="form-group  has-error ">
                                <input name="ru_features[]"  type="text" class="form-control boxed" placeholder="Feature" required>
                            </div>
                        @endif
                        <button type="button" class="btn btn-info-outline addRuFeature">Add Feature</button>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card card-block text-right">
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success btn-lg">Update Service</button>
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
