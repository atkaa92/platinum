@foreach($products as $product)
    <div class="col-3 mb-5">
        <div class="card">
            <img class="card-img-top" src="{{ $product->main_image }}" alt="Card image cap">
            <div class="card-body text-center">
                <h6 class="card-title">{{ $product->models->manufacture()->first()->en_name }}</h6>
                <p class="card-text">{{ $product->year.' '.$product->models()->first()->en_name }}</p>
                <div class="btn-group">
                    <a href="{{ url('admin/new-product/'.$product->id) }}" title="Edit product" class="btn btn-primary with-tooltip">
                        <i class="fa fa-edit"></i>
                    </a>
                    @if(!$product->buyed)
                        <button class="btn btn-warning buyed with-tooltip" data-icon="sold" data-price="{{ $product->price }}" title="Considered as sold" data-id="{{ $product->id }}" data-toggle="modal" data-target="#confirm-remove"><i class="fa fa-money"></i></button>
                    @endif
                    <button class="btn btn-danger remove-product with-tooltip" data-icon="remove" title="Remove product" data-id="{{ $product->id }}" data-toggle="modal" data-target="#confirm-remove"><i class="fa fa-trash"></i></button>
                </div>
            </div>
        </div>
    </div>
@endforeach
<div class="col-12">
    {!! $products->links('admin.includes.pagination') !!}
</div>