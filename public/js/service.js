$(document).ready(function() {
    $(".addFeature").click(function(){
        $(this).before(`
            <div class="form-group has-error input-group">
                <input name="features[]" type="text" class="form-control boxed" placeholder="Feature"> 
                <span style="cursor:pointer; background-color:#fff;margin:9px" class="input-group-addon fa fa-times form-control-feedback text-right removeFeature"></span>
            </div>`)
    })

    
    $(document).on('click', '.removeFeature', function() {
        $(this).closest('.has-error').remove();
    })
})
    