$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$('.filemanager').fancybox({
    'width'		: 900,
    'height'	: 600,
    'type'		: 'iframe',
    'autoScale'    	: false
});

$(document).on('focusin', function () {
    $(".zoom").fancybox();
})


function responsive_filemanager_callback(field_id){
    var url=$('#'+field_id).val();
    $('#filemanager-album').prepend(`
        <div class="col-md-2 mb-2 prod-img">
            <div class="img-ramk">
                <a class="zoom" href="`+url+`"><img class="filemanager-image choosed" src="`+url+`"></a> 
            </div>
            <input type="hidden" name="product-image[]" value="`+url+`">
            <div class="mt-1">
                <button class="btn btn-danger remove-image" type="button" title="Remove image from this product images list"><i class="fa fa-trash"></i></button>
                <button class="btn btn-success set-general" type="button" title="Set as main image for this product"><i class="fa fa-check-square"></i></button>
            </div>
        </div>
    `)
}

$(document).on('click', '.remove-image', function () {
    if($(this).closest('.prod-img').children('.img-ramk').hasClass('main-image')){
        $('input[name=main-image]').val('')
    }
    $(this).closest('.prod-img').remove()
})

$(document).on('click', '.set-general', function () {
    $('.set-general').show();
    $(this).hide();
    $('.img-ramk').removeClass('main-image')
    $('input[name=main-image]').val($(this).closest('.prod-img').children('input').val())
    $(this).closest('.prod-img').children('.img-ramk').addClass('main-image')
})

$(window).on('load', function(){ 
    $('#preloader').fadeOut('slow');
});

$(document).ajaxStart(function () {
    $('#preloader').fadeIn();
})
$(document).ajaxStop(function () {
    $( "#preloader" ).fadeOut();
})