@extends('layouts.admin')

@section('admin')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>


    <div class="title-block">
        <h3 class="title"> All products </h3>
        <p class="title-description"> Products list </p>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-sm-6">
                <label>Manufacturer</label>
                <select required name="manufacture" class="form-control boxed">
                    @foreach($manufacturers as $manufacturer)
                        <option value="{{ $manufacturer['id'] }}">{{ $manufacturer['en_name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-6">
                <label>Model</label>
                <select required name="model" class="form-control boxed">
                    <option value="">------------</option>
                </select>
            </div>
        </div>
        <div class="mt-3">
            <button class="btn btn-success search btn-block">
                <i class="fa fa-search"></i> Search
            </button>
        </div>
        <hr>
        <div class="row filter-data">
            @include('admin.includes.products-list')
        </div>
    </section>

@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $('select[name=manufacture]').select2()

        $('.search').click(function () {
            var manufacture = $('select[name=manufacture]').val()
            var url = '/admin/search/'+manufacture
            var model = $('select[name=model]').val()
            if(model){
                url = url + '/' +model;
            }
            $('.filter-data').load(url)
        })

        $('select[name=manufacture]').change(function () {
            var $this = $(this)
            $.ajax({
                url: '/admin/get-models/' + $this.val(),
                data: {},
                type: 'get',
                dataType: 'html',
                success: function (res) {
                    res = '<option value="">------------</option>' + res
                    $('select[name=model]').html(res)
                }
            })
        })
    </script>
@endpush