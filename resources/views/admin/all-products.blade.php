@extends('layouts.admin')

@section('admin')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>


    <div class="title-block">
        <h3 class="title"> All products </h3>
        <p class="title-description"> Products list </p>
    </div>
    @include('admin.messages')
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


    <div class="modal fade" id="confirm-remove">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        <i class="fa fa-warning"></i> Remove </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure want to remove this product?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary end-remove-product" data-dismiss="modal">Yes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

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


        $('#confirm-remove').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var prod_id = button.attr('data-id');
            $(this).find('.end-remove-product').click(function () {
                location.replace('/admin/remove-product/'+prod_id)
            })
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