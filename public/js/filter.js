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

$(document).ready(function () {
	if(window.location.href.split('/')[5] != null){
		// var filterPiece = '/filter/make/model/yfrom/yto/all/all/all/6500/80000?page=2';
		var filterPiece = window.location.href.split('shop')[1];
	}else{
		var filterPiece = '/filter/make/model/yfrom/yto/all/all/all/fprice/tprice';
	}
	$('.forSearchLoad .l-row').load(filterPiece,function () {
		$('.forSearchLoadCover').css('display', 'none');
	})
})

$(document).on('change', 'select[name=make]', function () {
		var lang = window.location.href.split('/')[3];
		var make = $(this).val()
		if(make == 'make'){
				$('select[name=model]').html(`<option  value="model">-------</option>`)
		}else{

			$('.models-selectpicker').load('/getMakeModels/'+make)

			// $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
			// $.post('/getMakeModels', {make, lang}, function(data, status){
			// 	console.log(data);
			// 	var options = '<option  value="model">-------</option>'
			// 	$.each(data, function( k, v ) {
             //        options += `<option value="`+v.id+`">`+v.name+`</option>`
			// 	})
             //    $('.models-select').html(options)
			// 	$('.models-select').selectpicker({
             //        style: 'btn-info',
             //        size: 1000
             //    });
			// }, "json")
		}
		filterQuery.make = make
})


$(document).on('change', 'select[name=model]', function () {
	var model = $(this).val()
	filterQuery.model = model
})

$(document).on('change', 'input[name=mech]', function () {
	if(this.checked) {
		filterQuery.mech = 'manual'
	}else{
		filterQuery.mech = 'all'
	}
})

$(document).on('change', 'input[name=auto]', function () {
	if(this.checked) {
		filterQuery.auto = 'automatic'
	}else{
		filterQuery.auto = 'all'
	}
})

$(document).on('change', 'input[name=other]', function () {
	if(this.checked) {
		filterQuery.other = 'semi-automatic'
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
	var lang = window.location.href.split('/')[3];
	var filterQueryCodeWithLang = '/'+lang+'/shop'+filterQueryCode;
	$(".forSearchLoad .product").addClass('afterSearch')
	$('.forSearchLoad .l-row').load(filterQueryCode,function () {
			history.pushState(null, null,filterQueryCodeWithLang);			
	})
})

$(document).on('click', '.pagination li a', function (event) {
	event.preventDefault();
	var nnewHref = $(this).attr('href').split('shop')[1];
	var lang = window.location.href.split('/')[3];
	var nnewHrefWithLang = '/'+lang+'/shop'+nnewHref;
	$(".forSearchLoad .product").addClass('afterSearch')
	$('.forSearchLoad .l-row').load(nnewHref,function () {
			history.pushState(null, null,nnewHrefWithLang);			
	})
})