<div class="form-group {{ $errors->has('ingredent_id') ? 'has-error' : ''}}">
    <label for="ingredent_id" class="control-label">{{ 'Ingredient' }}</label>
    <select class="form-control" name="ingredent_id" id="ingredent_id">
        @foreach($ingredients as $ingredient)
            <option value="{{$ingredient->id}}"
                    @if(isset($mealingredientmeasurement->ingredent_id) && $mealingredientmeasurement->ingredent_id==$ingredient->id) selected @endif>{{$ingredient->name}}</option>
        @endforeach
    </select>
    {!! $errors->first('ingredent_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('measurement_id') ? 'has-error' : ''}}">
    <label for="measurement_id" class="control-label">{{ 'Measurement' }}</label>
    <select class="form-control" name="measurement_id" id="measurement_id">
        @foreach($measurements as $measurement)
            <option value="{{$measurement->id}}"
                    @if(isset($mealingredientmeasurement->measurement_id) && $mealingredientmeasurement->measurement_id==$measurement->id) selected @endif>{{$measurement->unit}}</option>
        @endforeach
    </select>
    {!! $errors->first('measurement_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('measure') ? 'has-error' : ''}}">
    <label for="measure" class="control-label">{{ 'Measure' }}</label>
    <input class="form-control" name="measure" type="text" id="measure"
           value="{{ isset($mealingredientmeasurement->measure) ? $mealingredientmeasurement->measure : ''}}">
    {!! $errors->first('measure', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
