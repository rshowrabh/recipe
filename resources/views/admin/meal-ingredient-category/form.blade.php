<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name"
           value="{{ isset($mealingredientcategory->name) ? $mealingredientcategory->name : ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description"
              required>{{ isset($mealingredientcategory->description) ? $mealingredientcategory->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
@can('isAdmin')
<div class="form-group {{ $errors->has('approved') ? 'has-error' : ''}}">
    <label for="approved" class="control-label">{{ 'Approved' }}</label>
    <input class="form-control" name="approved" type="number" id="approved"
           value="{{ isset($mealingredientcategory->approved) ? $mealingredientcategory->approved : '0'}}">
    {!! $errors->first('approved', '<p class="help-block">:message</p>') !!}
</div>
@endcan
<div class="form-group {{ $errors->has('icon') ? 'has-error' : ''}}">
    <label for="icon" class="control-label">{{ 'Icon' }}</label>
    <input class="form-control" name="icon" type="file" id="icon" required>
    {!! $errors->first('icon', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">
    <label for="slug" class="control-label">{{ 'Slug' }}</label>
    <input class="form-control" name="slug" type="text" id="slug"
           value="{{ isset($mealingredientcategory->slug) ? $mealingredientcategory->slug : ''}}" required>
    {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
