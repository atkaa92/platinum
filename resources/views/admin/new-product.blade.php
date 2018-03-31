@extends('layouts.admin')

@section('admin')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

    <div class="title-block">
        <h3 class="title"> Add new product </h3>
        <p class="title-description"> Add new product </p>
    </div>
    @include('admin.messages')
    <section class="section">
        <form class="add-prod-form" action="{{ !$gen_id ? '/admin/add-new-product' : '/admin/add-new-product/'.$gen_id }}" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12">
                    {!! fileManager('btn-block mb-5') !!}
                    <input type="hidden" id="filemanager-url">
                    <input type="hidden" value="{{ $gen_id ? $edit_data->main_image : ''}}" name="main-image">
                </div>
            </div>
            <div id="filemanager-album" class="row mb-5">
                @if($edit_data)
                    @foreach(unserialize($edit_data->images) as $image)
                    <div class="col-md-2 mb-2 prod-img">
                        <div class="img-ramk {{ $image == $edit_data->main_image ? 'main-image' : '' }}">
                            <a class="zoom" href="{{ $image }}"><img class="filemanager-image choosed" src="{{ $image }}"></a>
                        </div>
                        <input type="hidden" name="product-image[]" value="{{ $image }}">
                        <div class="mt-1">
                            <button class="btn btn-danger remove-image" type="button" title="Remove image from this product images list"><i class="fa fa-trash"></i></button>
                            <button class="btn btn-success set-general" style="{{ $image != $edit_data->main_image ?: 'display:none' }}" type="button" title="Set as main image for this product"><i class="fa fa-check-square"></i></button>
                        </div>
                    </div>
                    @endforeach
                @endif
                <div class="col-md-2 mb-2">
                    <img class="filemanager-image" src="{{ asset('images/no-image-car.png') }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <div class="header-block">
                                <p class="title"> Armenian description </p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-5">
                        <textarea required class="form-control boxed" rows="5" name="hy_desc" id="hy_desc"
                                  placeholder="Armenian description">{{ $gen_id ? $edit_data->hy_desc : '' }}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <div class="header-block">
                                <p class="title"> English description </p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-5">
                        <textarea required class="form-control boxed" id="en-name" rows="5" name="en_desc"
                                  placeholder="English description">{{ $gen_id ? $edit_data->en_desc : ''}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <div class="header-block">
                                <p class="title"> Russian description </p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-5">
                        <textarea required class="form-control boxed" id="ru-desc" rows="5" name="ru_desc"
                                  placeholder="Russian description">{{ $gen_id ? $edit_data->ru_desc : ''}}</textarea>
                    </div>
                </div>
            </div>
            <div class="product-features">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row" style="margin-bottom: 7px;">
                            <div class="col-md-4">
                                <label>In store</label>
                                <div class="in-store">
                                    <label>
                                        <input type="checkbox" {{ $gen_id && $edit_data->in_store ? 'checked' : ''}} name="in-store">
                                        <i></i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Urgent</label>
                                <div class="in-store">
                                    <label>
                                        <input type="checkbox" {{ $gen_id && $edit_data->urgent ? 'checked' : ''}} name="urgent">
                                        <i></i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Color</label>
                                <input required name="color" value="{{ $gen_id ? $edit_data->color : false }}" type="color" class="form-control boxed input-block">
                                <span class="color-picker" style="background: {{!$gen_id ?: $edit_data->color}}">
                                </span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label>Year</label>
                                <input required name="year" placeholder="Year - only number" value="{{ $gen_id ? $edit_data->year : ''}}" type="number"
                                        class="form-control boxed input-block">
                            </div>
                            <div class=" col-md-6">
                                <label>Price</label>
                                <input required name="price" placeholder="Price - only number" value="{{ $gen_id ? $edit_data->price : ''}}" type="number"
                                        class="form-control boxed input-block">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label>Odometer</label>
                                <input required name="odometer" value="{{ $gen_id ? $edit_data->odometer : '' }}" placeholder="Odometer - only number" type="number"
                                    class="form-control boxed input-block">
                            </div>
                            <div class="col-md-6">
                                <label>Doors</label>
                                <input value="{{ $gen_id ? $edit_data->doors : '' }}" required name="doors" placeholder="Door - only number" type="number"
                                    class="form-control boxed input-block">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label>Interior Type</label>
                                <select name="interior" class="form-control boxed">
                                    <option value="" {{ $gen_id && !$edit_data->interior ? 'selected' : '' }}>-----------</option>
                                    <option value="leather" {{ $gen_id && $edit_data->interior == 'leather' ? 'selected' : '' }}>Leather</option>
                                    <option value="cloth" {{ $gen_id && $edit_data->interior == 'cloth' ? 'selected' : '' }}>Cloth</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Gearbox</label>
                                <select required name="gearbox" class="form-control boxed">
                                    <option value="semi-automatic" {{ $gen_id && $edit_data->gearbox == 'semi-automatic' ? 'selected' : '' }}>Semi-automatic</option>
                                    <option value="manual" {{ $gen_id && $edit_data->gearbox == 'manual' ? 'selected' : '' }}>Manual</option>
                                    <option value="automatic" {{ $gen_id && $edit_data->gearbox == 'automatic' ? 'selected' : '' }}>Automatic</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label>Body</label>
                                <select required name="body" class="form-control boxed">
                                    @foreach(config('extra.body') as $bval => $name)
                                        <option value="{{ $bval }}" {{ $gen_id && $edit_data->body == $bval ? 'selected' : '' }}>{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Location</label>
                                <select required name="location" class="form-control boxed">
                                    <option value="armenia" {{ $gen_id && $edit_data->location == 'armenia' ? 'selected' : ''}}>Armenia</option>
                                    <option value="usa" {{ $gen_id && $edit_data->location == 'usa' ? 'selected' : '' }}>USA</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label>Fuel Used</label>
                                <select name="fuel" class="form-control boxed">
                                    <option value="" {{ !$gen_id ?: $edit_data->fuel ?: 'selected' }}>-----------</option>
                                    @foreach(config('extra.fuel') as $val => $name)
                                        <option value="{{ $val }}" {{ !$gen_id ?: $edit_data->fuel != $val ?: 'selected' }}>{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Manufacturer</label>
                                    <select required name="manufacture" class="form-control boxed">
                                        <option value="">--------------</option>
                                        @foreach($manufacturers as $manufacturer)
                                            <option value="{{ $manufacturer['id'] }}" {{ !$gen_id ?: $edit_data->manufacture != $manufacturer['id'] ?: 'selected' }}>{{ $manufacturer['en_name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group model-form" style="{{ $gen_id ?: 'display: none'}}">
                                    <label>Model</label>
                                    <div class="row">
                                        <div class="col-10">
                                            <select required name="model" class="form-control boxed">
                                                @if($gen_id)
                                                    @foreach($edit_data->manufacturer()->first()->models as $model)
                                                        <option value="{{ $model->id }}" {{ $edit_data->model_id != $model->id ?: 'selected' }}>{{ $model->en_name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-2">
                                            <button data-target="#model-modal" data-toggle="modal" class="btn btn-primary" type="button" style=" height: 100%;" title="Add new model">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-success btn-lg btn-block">{{ $gen_id ? 'Update product' :'Add product'  }}</button>
            </div>
        </form>
    </section>


    <div class="modal fade" id="model-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="new-model-form">
                        <div class="form-group">
                            <label>Model Armenian name</label>
                            <input type="text" placeholder="Armenian name" name="hy_name" class="form-control boxed">
                        </div>
                        <div class="form-group">
                            <label>Model English name</label>
                            <input type="text" placeholder="English name" name="en_name" class="form-control boxed">
                        </div>
                        <div class="form-group">
                            <label>Model Russian name</label>
                            <input type="text" placeholder="Russian name" name="ru_name" class="form-control boxed">
                        </div>
                        <input type="hidden" name="mark_id" value="">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary add-new-model">
                     <i class="fa fa-plus mr-1"></i>  Add
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $('input[name=color]').change(function () {
            $('.color-picker').css({backgroundColor: $(this).val()})
        })

        $(window).on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var manufacture_name = $('select[name=manufacture] option:selected').text()
            var manufacture_id = $('select[name=manufacture]').val()
            $('#model-modal').find('h4').text('Add new model for '+manufacture_name)
            $('#model-modal').find('input[name=mark_id]').val(manufacture_id)
            $('#model-modal').modal('show');
        });

        $(document).on('click', '.add-new-model', function () {
            var data = $('.new-model-form').serializeArray().reduce(function(obj, item) {
                obj[item.name] = item.value;
                return obj;
            }, {});
            $.ajax({
                url: 'admin/add-new-model',
                type: 'post',
                data: data,
                success: function (res) {
                    $('select[name=model]').prepend("<option value='"+res+"' selected>"+data.en_name+"</option>")
                    $('.new-model-form').find('input').val('')
                    $('.modal').modal('hide')
                }
            })
        })

        $('select[name=manufacture]').change(function () {
            var $this = $(this)
            $.ajax({
                url: '/admin/get-models/'+$this.val(),
                data: {},
                type: 'get',
                dataType: 'html',
                success: function (res) {
                    $('select[name=model]').html(res)
                    $('.model-form').css({display: 'block'})
                }
            })
        })

        $('.add-prod-form').submit(function (e) {
            if(!$('.filemanager-image.choosed').length){
                e.preventDefault()
                alert('Please choose images. Images are required!')
            }
        })

        $('select[name=manufacture]').select2()
    </script>
@endpush