<select name="model" class="selectpicker models-select filters__select">
    <option  value="">-------</option>
    @foreach($models as $model)
        <option  value="{{ $model->id }}">{{ getPropByLang($model, 'name') }}</option>
    @endforeach
</select>
<script>
    $(document).ready(function () {
        $('.models-select').selectpicker({
            style: 'btn-info',
            size: 1000
        });
    })
</script>