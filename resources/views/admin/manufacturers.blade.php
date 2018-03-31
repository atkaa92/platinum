@extends('layouts.admin')

@section('admin')
    <div class="title-block">
        <h3 class="title"> Manufacturers </h3>
        <p class="title-description"> All brands </p>
    </div>
    @include('admin.messages')
    <section class="section">
        <form action="/admin/save-manufactures" method="POST">
            {{ csrf_field() }}
            <table class="table table-inverse">
                <thead>
                    <th>#</th>
                    <th>English</th>
                    <th>Russian</th>
                    <th>Armenian</th>
                    <th>Remove</th>
                </thead>

                <tbody class="man-body">
                @foreach($manufactures as $index => $manufacture)
                    <tr>
                        <td>
                            {{ $index + 1 }}
                        </td>
                        <td>
                            <input class="form-control boxed" name="{{ $manufacture['id'] }}[en_name]"
                                   value="{{ $manufacture['en_name'] }}">
                        </td>
                        <td>
                            <input class="form-control boxed" name="{{ $manufacture['id'] }}[ru_name]"
                                   value="{{ $manufacture['ru_name'] }}">
                        </td>
                        <td>
                            <input class="form-control boxed" name="{{ $manufacture['id'] }}[hy_name]"
                                   value="{{ $manufacture['hy_name'] }}">
                        </td>
                        <td class="trash-manufacture-button">
                            <button type="button" class="btn btn-danger" data-target="#confirm-modal" data-toggle="modal" data-id="{{ $manufacture['id'] }}">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row">
                <button type="button" class="btn btn-primary btn-success btn-block add-new-brand">
                    <i class="fa fa-plus"></i> Add new brand
                </button>
            </div>
            <div class="row">
                <button type="submit" class="btn btn-primary btn-block">
                    <i class="fa fa-save"></i> Save all Brands
                </button>
            </div>
        </form>
    </section>

@endsection

@push('scripts')
    <script>

        $(window).on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var manufacture_remove_id = button.data('id');

            $('#confirm-modal').find('.modal-footer').children('button:first').click(function () {
                if(manufacture_remove_id){
                    window.location.replace('/admin/remove-manufacture/'+manufacture_remove_id);
                }else{
                    button.closest('tr').remove()
                }

            })
            $('#confirm-modal').modal('show');
        });


        var last_manufactur_id = {{ $manufactures[count($manufactures)-1]->id + 1 }}
        var count_manufactur = {{ count($manufactures) + 1 }}
        $(document).on('click', '.add-new-brand', function () {
            $('.man-body').append(`
                <tr>
                    <td>
                       ` + count_manufactur + `
                    </td>
                    <td>
                        <input class="form-control boxed" name="` + last_manufactur_id + `[en_name]">
                    </td>
                    <td>
                        <input class="form-control boxed" name="` + last_manufactur_id + `[ru_name]">
                    </td>
                    <td>
                        <input class="form-control boxed" name="` + last_manufactur_id + `[hy_name]">
                    </td>
                    <td class="trash-manufacture-button">
                        <button type="button" class="btn btn-danger" data-target="#confirm-modal" data-toggle="modal">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            `)
            count_manufactur++
            last_manufactur_id++
        })
    </script>
@endpush