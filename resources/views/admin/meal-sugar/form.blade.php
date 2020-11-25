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
<div class="form-group {{ $errors->has('sugar') ? 'has-error' : ''}}">
    <label for="sugar" class="control-label">{{ 'Sugar' }}</label>
    <input class="form-control" name="sugar" type="text" id="sugar"
           value="{{ isset($mealsugar->sugar) ? $mealsugar->sugar : ''}}">
    {!! $errors->first('sugar', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sucrose') ? 'has-error' : ''}}">
    <label for="sucrose" class="control-label">{{ 'Sucrose' }}</label>
    <input class="form-control" name="sucrose" type="text" id="sucrose"
           value="{{ isset($mealsugar->sucrose) ? $mealsugar->sucrose : ''}}">
    {!! $errors->first('sucrose', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('glucose') ? 'has-error' : ''}}">
    <label for="glucose" class="control-label">{{ 'Glucose' }}</label>
    <input class="form-control" name="glucose" type="text" id="glucose"
           value="{{ isset($mealsugar->glucose) ? $mealsugar->glucose : ''}}">
    {!! $errors->first('glucose', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fructose') ? 'has-error' : ''}}">
    <label for="fructose" class="control-label">{{ 'Fructose' }}</label>
    <input class="form-control" name="fructose" type="text" id="fructose"
           value="{{ isset($mealsugar->fructose) ? $mealsugar->fructose : ''}}">
    {!! $errors->first('fructose', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lactose') ? 'has-error' : ''}}">
    <label for="lactose" class="control-label">{{ 'Lactose' }}</label>
    <input class="form-control" name="lactose" type="text" id="lactose"
           value="{{ isset($mealsugar->lactose) ? $mealsugar->lactose : ''}}">
    {!! $errors->first('lactose', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maltose') ? 'has-error' : ''}}">
    <label for="maltose" class="control-label">{{ 'Maltose' }}</label>
    <input class="form-control" name="maltose" type="text" id="maltose"
           value="{{ isset($mealsugar->maltose) ? $mealsugar->maltose : ''}}">
    {!! $errors->first('maltose', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('glactose') ? 'has-error' : ''}}">
    <label for="glactose" class="control-label">{{ 'Glactose' }}</label>
    <input class="form-control" name="glactose" type="text" id="glactose"
           value="{{ isset($mealsugar->glactose) ? $mealsugar->glactose : ''}}">
    {!! $errors->first('glactose', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
