<div class="form-group {{ $errors->has('cusine_id') ? 'has-error' : ''}}">
    <label for="cusine_id" class="control-label">{{ 'Cuisine Id' }}</label>
    <select class="form-control" name="cusine_id" id="cusine_id">
        @foreach($mealCuisines as $mealCuisine)
            <option value="{{$mealCuisine->id}}"
                    @if(isset($mealregion->cusine_id) && $mealregion->cusine_id==$mealCuisine->id) selected @endif>{{$mealCuisine->name}}</option>
        @endforeach
    </select>
    {!! $errors->first('cusine_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name"
           value="{{ isset($mealregion->name) ? $mealregion->name : ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
