@foreach($products as $product)
    <div class="col-3 mb-5">
        <div class="card">
            <img class="card-img-top" src="{{ $product->main_image }}" alt="Card image cap">
            <div class="card-body text-center">
                <h6 class="card-title">{{ $product->models->manufacture()->first()->en_name }}</h6>
                <p class="card-text">{{ $product->year.' '.$product->models()->first()->en_name }}</p>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{ url('admin/new-product/'.$product->id) }}" class="btn btn-primary btn-block">
                            <i class="fa fa-edit"></i> </a>
                    </div>
                    <div class="col-sm-6">
                        <button class="btn btn-danger btn-block remove-product" data-id="{{ $product->id }}" data-toggle="modal" data-target="#confirm-remove"><i class="fa fa-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach