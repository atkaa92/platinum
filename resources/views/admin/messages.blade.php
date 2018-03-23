@if(isset($errors) && count($errors) > 0)
    <div class="card card-danger ">
        <div class="card-header">
            <div class="header-block">
                @foreach($errors->all() as $error)
                    <p class="title"> {{ $error }} </p>
                
                    {{$error}}<br><br>
                @endforeach
            </div>
        </div>
    </div>
@endif

@if(session('success'))
    <div class="card card-success">
        <div class="card-header">
            <div class="header-block">
                <p class="title"> {{session('success')}} </p>
            </div>
        </div>
    </div>
@endif

@if(session('error'))
    <div class="card card-danger">
        <div class="card-header">
            <div class="header-block">
                <p class="title"> {{session('error')}} </p>
            </div>
        </div>
    </div>
@endif