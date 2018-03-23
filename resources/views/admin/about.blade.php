@extends('layouts.admin')

@section('admin')
    <div class="title-block">
        <h3 class="title"> About </h3>
        <p class="title-description"> {{ $about->en_title }} </p>
    </div>
    @include('admin/messages')
    <form method="post" action="/admin/about/{{ $about->id }}">
        {{ csrf_field() }}
        <section class="section">
            <div class="row sameheight-container">
                <div class="col-md-4">
                    <div class="card card-block">
                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="header-block">
                                    <p class="title"> Armenian section </p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <input name="hy_title" value="{{ $about->hy_title }}" type="text" class="form-control boxed" placeholder="title" required> </div>
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <textarea name="hy_desc" value="{{ $about->hy_desc }}" rows="3" class="form-control boxed" required>{{ $about->hy_desc }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-block">
                        <div class="card card-warning">
                            <div class="card-header">
                                <div class="header-block">
                                    <p class="title"> English section </p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <input name="en_title" value="{{ $about->en_title }}" type="text" class="form-control boxed" placeholder="title" required> </div>
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <textarea name="en_desc" value="{{ $about->en_desc }}" rows="3" class="form-control boxed" required>{{ $about->en_desc }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-block">
                        <div class="card card-danger">
                            <div class="card-header">
                                <div class="header-block">
                                    <p class="title"> Russian section </p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <input name="ru_title" value="{{ $about->ru_title }}" type="text" class="form-control boxed" placeholder="title" required> </div>
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <textarea name="ru_desc" value="{{ $about->ru_desc }}" rows="3" class="form-control boxed" required>{{ $about->ru_desc }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card card-block text-right">
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success btn-lg">Update About</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    @push('scripts')
        <script type="text/javascript" src="{{ asset("js/about.js") }}"></script>
    @endpush
@endsection
