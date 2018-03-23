$(document).ready(function() {
    $(".addUkFeature").click(function(){
        $(this).before(`
            <div class="form-group has-error input-group">
                <input name="hy_features[]" type="text" class="form-control boxed" placeholder="Feature"> 
                <span style="cursor:pointer; background-color:#fff;margin:9px" class="input-group-addon fa fa-times form-control-feedback text-right removeFeature"></span>
            </div>`)
    })

    $(".addEnFeature").click(function(){
        $(this).before(`
            <div class="form-group has-error input-group">
                <input name="en_features[]" type="text" class="form-control boxed" placeholder="Feature"> 
                <span style="cursor:pointer; background-color:#fff;margin:9px" class="input-group-addon fa fa-times form-control-feedback text-right removeFeature"></span>
            </div>`)
    })

    $(".addRuFeature").click(function(){
        $(this).before(`
            <div class="form-group has-error input-group">
                <input name="ru_features[]" type="text" class="form-control boxed" placeholder="Feature"> 
                <span style="cursor:pointer; background-color:#fff;margin:9px" class="input-group-addon fa fa-times form-control-feedback text-right removeFeature"></span>
            </div>`)
    })
    
    $(document).on('click', '.removeFeature', function() {
        $(this).closest('.has-error').remove();
    })
})
    