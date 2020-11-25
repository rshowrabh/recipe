<div class="form-group {{ $errors->has('recipe_id') ? 'has-error' : ''}}">
    <label for="recipe_id" class="control-label">{{ 'Recipe' }}</label>
    <select class="form-control" name="recipe_id" id="recipe_id">
        @foreach($recipes as $recipe)
            <option value="{{$recipe->id}}"
                    @if(isset($mealrecipeingredient->recipe_id) && $mealrecipeingredient->recipe_id==$recipe->id) selected @endif>{{$recipe->name}}</option>
        @endforeach
    </select>
    {!! $errors->first('recipe_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ingredent_id') ? 'has-error' : ''}}">
    <label for="ingredent_id" class="control-label">{{ 'Ingredient' }}</label>
    <select class="form-control" name="ingredent_id" id="ingredent_id">
        @foreach($ingredients as $ingredient)
            <option value="{{$ingredient->id}}"
                    @if(isset($mealrecipeingredient->ingredent_id) && $mealrecipeingredient->ingredent_id==$ingredient->id) selected @endif>{{$ingredient->name}}</option>
        @endforeach
    </select>
    {!! $errors->first('ingredent_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('quantity') ? 'has-error' : ''}}">
    <label for="quantity" class="control-label">{{ 'Quantity' }}</label>
    <input class="form-control" name="quantity" type="text" id="quantity"
           value="{{ isset($mealrecipeingredient->quantity) ? $mealrecipeingredient->quantity : ''}}">
    {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('unit_measure') ? 'has-error' : ''}}">
    <label for="unit_measure" class="control-label">{{ 'Unit Measure' }}</label>
    <input class="form-control" name="unit_measure" type="number" id="unit_measure"
           value="{{ isset($mealrecipeingredient->unit_measure) ? $mealrecipeingredient->unit_measure : ''}}">
    {!! $errors->first('unit_measure', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('main_ingredient') ? 'has-error' : ''}}">
    <label for="main_ingredient" class="control-label">{{ 'Main Ingredient' }}</label>
    <select class="form-control" name="main_ingredient" id="main_ingredient">
        @foreach($ingredients as $ingredient)
            <option value="{{$ingredient->id}}"
                    @if(isset($mealrecipeingredient->main_ingredient) && $mealrecipeingredient->main_ingredient==$ingredient->id) selected @endif>{{$ingredient->name}}</option>
        @endforeach
    </select>
    {!! $errors->first('main_ingredient', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
