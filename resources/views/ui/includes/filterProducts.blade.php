@if(count($filterProducts))
	@foreach($filterProducts as $f)
		<div class="l-col-lg-4 l-col-md-6 l-col-int">
				<div class="product">
						<a href="{{ url('/inner/'.$f->id) }}" class="product__link">
								<div class="product__cover {{ $f->urgent ? 'urgent' : ''}}">
										<img src="{{ $f->main_image }}" alt="">
								</div>
								<h4 class="product__name">{{ getPropByLang($f->manufacturer,'name') }} {{ getPropByLang($f->models,'name') }}</h4>
								<div class="product__info">
										<div class="product__info-col">
												<span class="product__info-item">{{ $f->year }}</span>
										</div>
										<div class="product__info-col">
												<span class="product__info-item">{{ $f->gearbox }}</span>
										</div>
										<div class="product__info-col">
												<span class="product__info-item">{{ $f->odometer }}km</span>
										</div>
								</div>
								<div class="product__desc">
										<p>
												{{ substr(getPropByLang($f,'desc'), 0, 85)  . '...' }}
										</p>
								</div>
								<span class="product__price {{ $f->urgent ? 'product__price--urgent' : ''}}">${{ $f->price }}</span>
						</a>
				</div>
		</div>
		@endforeach
		@else
		<p style="margin:auto">Nothing found</p>
		@endif
		<script>
				var blabla = {{ $filterProductsCount }}
				console.log(blabla)
				$(".primary-btn--search").text(blabla)
		</script>
		