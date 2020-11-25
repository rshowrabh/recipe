<div class="form-group {{ $errors->has('ingredent_id') ? 'has-error' : ''}}">
    <label for="ingredent_id" class="control-label">{{ 'Ingredient' }}</label>
    <select class="form-control" name="ingredent_id" id="ingredent_id">
        @foreach($ingredients as $ingredient)
            <option value="{{$ingredient->id}}"
                    @if(isset($mealvitaminmineral->ingredent_id) && $mealvitaminmineral->ingredent_id==$ingredient->id) selected @endif>{{$ingredient->name}}</option>
        @endforeach
    </select>
    {!! $errors->first('ingredent_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('saturated_fat') ? 'has-error' : ''}}">
    <label for="saturated_fat" class="control-label">{{ 'Saturated Fat' }}</label>
    <input class="form-control" name="saturated_fat" type="text" id="saturated_fat"
           value="{{ isset($mealfat->saturated_fat) ? $mealfat->saturated_fat : ''}}">
    {!! $errors->first('saturated_fat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mono_unsaturated_fat') ? 'has-error' : ''}}">
    <label for="mono_unsaturated_fat" class="control-label">{{ 'Mono Unsaturated Fat' }}</label>
    <input class="form-control" name="mono_unsaturated_fat" type="text" id="mono_unsaturated_fat"
           value="{{ isset($mealfat->mono_unsaturated_fat) ? $mealfat->mono_unsaturated_fat : ''}}">
    {!! $errors->first('mono_unsaturated_fat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('poly_unsaturated_fat') ? 'has-error' : ''}}">
    <label for="poly_unsaturated_fat" class="control-label">{{ 'Poly Unsaturated Fat' }}</label>
    <input class="form-control" name="poly_unsaturated_fat" type="text" id="poly_unsaturated_fat"
           value="{{ isset($mealfat->poly_unsaturated_fat) ? $mealfat->poly_unsaturated_fat : ''}}">
    {!! $errors->first('poly_unsaturated_fat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('trans_fat') ? 'has-error' : ''}}">
    <label for="trans_fat" class="control-label">{{ 'Trans Fat' }}</label>
    <input class="form-control" name="trans_fat" type="text" id="trans_fat"
           value="{{ isset($mealfat->trans_fat) ? $mealfat->trans_fat : ''}}">
    {!! $errors->first('trans_fat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('omega_3_fatty_acid') ? 'has-error' : ''}}">
    <label for="omega_3_fatty_acid" class="control-label">{{ 'Omega 3 Fatty Acid' }}</label>
    <input class="form-control" name="omega_3_fatty_acid" type="text" id="omega_3_fatty_acid"
           value="{{ isset($mealfat->omega_3_fatty_acid) ? $mealfat->omega_3_fatty_acid : ''}}">
    {!! $errors->first('omega_3_fatty_acid', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('omega_6_fatty_acid') ? 'has-error' : ''}}">
    <label for="omega_6_fatty_acid" class="control-label">{{ 'Omega 6 Fatty Acid' }}</label>
    <input class="form-control" name="omega_6_fatty_acid" type="text" id="omega_6_fatty_acid"
           value="{{ isset($mealfat->omega_6_fatty_acid) ? $mealfat->omega_6_fatty_acid : ''}}">
    {!! $errors->first('omega_6_fatty_acid', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
