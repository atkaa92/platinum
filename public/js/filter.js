// http://platinum.local/filter/make/model/yfrom/yto/all/all/all/fprice/tprice
var filterQuery = {
			make:"make", 
			model:"model", 
			yfrom:"yfrom",
			yto:"yto",
			mech:"all",
			auto:"all",
			other:"all",
			fprice:"fprice",
			tprice:"tprice",
		};

	$(document).on('change', 'select[name=make]', function () {
			var make = $(this).val()
			filterQuery.make = make
	})
	
	
	$(document).on('change', 'select[name=model]', function () {
		var model = $(this).val()
		filterQuery.model = model
	})

	$(document).on('change', 'input[name=mech]', function () {
		if(this.checked) {
			filterQuery.mech = 'mechanical'
		}else{
			filterQuery.mech = 'all'
		}
	})

	$(document).on('change', 'input[name=auto]', function () {
		if(this.checked) {
			filterQuery.auto = 'automat'
		}else{
			filterQuery.auto = 'all'
		}
	})

	$(document).on('change', 'input[name=other]', function () {
		if(this.checked) {
			filterQuery.other = 'other'
		}else{
			filterQuery.other = 'all'
		}
	})
	
	$(document).on('click', '.primary-btn--search', function () {
		var yfrom = $("input[name=yfrom]").val();
		var yto = $("input[name=yto]").val();
		if(yfrom == "") yfrom = 'yfrom';
		if(yto == "") yto = 'yto';
		filterQuery.yfrom = yfrom
		filterQuery.yto = yto
		var filterQueryCode = "/filter"
		$.each(filterQuery, function (k, v) {
			filterQueryCode += "/"+v
		});
		$('.forSearchLoadCover').css('display', 'block');
		$(".forSearchLoad .product").addClass('afterSearch')
		$('.forSearchLoad .l-row').load(filterQueryCode,function () {
			$('.forSearchLoadCover').css('display', 'none');
		})
		// $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
		// $.post(filterQueryCode, {}, function(data, status){
		// 		console.log(data)
		// }, "json")
	})
	



	