<div class="form-group {{ $errors->has('recipe_id') ? 'has-error' : ''}}">
    <label for="recipe_id" class="control-label">{{ 'Recipe' }}</label>
    <select class="form-control" name="recipe_id" id="recipe_id">
        @foreach($recipes as $recipe)
            <option value="{{$recipe->id}}"
                    @if(isset($mealrecipetag->recipe_id) && $mealrecipetag->recipe_id==$recipe->id) selected @endif>{{$recipe->name}}</option>
        @endforeach
    </select>
    {!! $errors->first('recipe_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tag_id') ? 'has-error' : ''}}">
    <label for="tag_id" class="control-label">{{ 'Tag' }}</label>
    <select class="form-control" name="tag_id" id="tag_id">
        @foreach($tags as $tag)
            <option value="{{$tag->id}}"
                    @if(isset($mealrecipetag->tag_id) && $mealrecipetag->tag_id==$tag->id) selected @endif>{{$tag->name}}</option>
        @endforeach
    </select>
    {!! $errors->first('tag_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
