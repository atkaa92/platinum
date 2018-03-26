@extends('layouts.admin')

@section('admin')
    <div class="title-block">
        <h3 class="title"> Configs </h3>
        <p class="title-description"> Config list </p>
    </div>
    @include('admin/messages')
    <form method="post" action="/admin/config">
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
                            <label class="control-label">Address</label>
                            <textarea name="hy_address" value="{{ $configs->hy_address }}" rows="3" class="form-control boxed" required>{{ $configs->hy_address }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-block">
                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="header-block">
                                    <p class="title"> English section </p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Address</label>
                            <textarea name="en_address" value="{{ $configs->en_address }}" rows="3" class="form-control boxed" required>{{ $configs->en_address }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-block">
                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="header-block">
                                    <p class="title"> Russian section </p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Address</label>
                            <textarea name="ru_address" value="{{ $configs->ru_address }}" rows="3" class="form-control boxed" required>{{ $configs->ru_address }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card card-block">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input value="{{ $configs->phone }}" type="text" class="form-control boxed" placeholder="Phone" name="phone" id="phone" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    <input value="{{ $configs->mobile }}" class="form-control boxed" placeholder="Mobile" name="mobile" id="mobile"
                                    type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input value="{{ $configs->email }}" class="form-control boxed" placeholder="Email" name="email" id="email"
                                    type="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label >Working hours 'Monday to Friday'</label>
                                    <select name="wday_from" class="form-control boxed">
                                        <option value='0'>from</option>
                                        @for($i=1; $i <=12;  $i++ )
                                            <option {{ $configs->wday_from == $i ? 'selected' : '' }} value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label style="visibility:hidden">0</label>
                                <div class="form-group">
                                    <select name="wday_to" class="form-control boxed">
                                        <option value='0'>to</option>
                                        @for($i=1; $i <=12;  $i++ )
                                            <option {{ $configs->wday_to == $i ? 'selected' : '' }} value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label >Working hours 'Saturday'</label>
                                    <select name="wend_from" class="form-control boxed">
                                        <option value='0'>from</option>
                                        @for($i=1; $i <=12;  $i++ )
                                            <option {{ $configs->wend_from == $i ? 'selected' : '' }} value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label style="visibility:hidden">0</label>
                                <div class="form-group">
                                    <select name="wend_to" class="form-control boxed">
                                        <option value='0'>to</option>
                                        @for($i=1; $i <=12;  $i++ )
                                            <option {{ $configs->wend_to == $i ? 'selected' : '' }} value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success btn-lg">Update About</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>

@endsection