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
            <div class="col-sm-5">
                <label>Manufacturer</label>
                <select name="manufacture" class="form-control boxed">
                    @foreach($manufacturers as $manufacturer)
                        <option value="{{ $manufacturer['id'] }}">{{ $manufacturer['en_name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-5">
                <label>Model</label>
                <select name="model" class="form-control boxed">
                    <option value="">------------</option>
                </select>
            </div>
            <div class="col-sm-2">
                <label>Sold</label>
                <select name="sold" class="form-control boxed">
                    <option value="[0,1]">All</option>
                    <option value="[0]">Not sold</option>
                    <option value="[1]">Sold</option>
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
        <div class="for-pagination">
            {!! $products->links('admin.includes.pagination') !!}
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
                    <p>Are you sure want to do this?</p>
                    <div class="form-group sold-price" hidden>
                        <input type="number" class="form-control boxed sold-price-value" placeholder="Sold price">
                    </div>
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
            var sold = $('select[name=sold]').val()
            var url = '/admin/search/'+manufacture + '/' + sold
            var model = $('select[name=model]').val()
            if(model){
                url = url + '/' + model;
            }
            $('.filter-data').load(url)
        })


        $('#confirm-remove').on('show.bs.modal', function (event) {

            var icons = {
                sold: "<i class='fa fa-money'></i>",
                remove: "<i class='fa fa-trash'></i>"
            }
            var button = $(event.relatedTarget);
            var icon = button.attr('data-icon');
            var title = icons[icon] +' '+ button.attr('data-original-title');

            var prod_id = button.attr('data-id');
            if(icon == 'sold'){
                $(this).find('.sold-price').prop('hidden', false)
                $(this).find('.sold-price-value').val(button.attr('data-price'))
            }else{
                $(this).find('.sold-price').prop('hidden', true)
            }

            $(this).find('h4').html(title)
            $(this).find('.end-remove-product').click(function () {
                if(icon == 'sold') {
                    prod_id = prod_id + '/' + $('.sold-price-value').val()
                }
                location.replace('/admin/'+icon+'/'+prod_id)
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

        $('.with-tooltip').tooltip({placement: 'bottom'})
    </script>
@endpush