<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($mealtag->name) ? $mealtag->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($mealtag->description) ? $mealtag->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
@can('isAdmin')
<div class="form-group {{ $errors->has('approved') ? 'has-error' : ''}}">
    <label for="approved" class="control-label">{{ 'Approved' }}</label>
    <select class="form-control" name="approved" type="number" id="approved">
        <option value="0" selected>No</option>
        <option value="1" >Yes</option>
    </select>    
    {!! $errors->first('approved', '<p class="help-block">:message</p>') !!}
</div>
@endcan
<div class="form-group {{ $errors->has('color_code') ? 'has-error' : ''}}">
    <label for="color_code" class="control-label">{{ 'Color Code' }}</label>
    <input class="form-control" name="color_code" type="text" id="color_code" value="{{ isset($mealtag->color_code) ? $mealtag->color_code : ''}}" >
    {!! $errors->first('color_code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('meal_tag_categories_id') ? 'has-error' : ''}}">
    <label for="meal_tag_categories_id" class="control-label">{{ 'Meal Tag Categories Id' }}</label>
    <input class="form-control" name="meal_tag_categories_id" type="number" id="meal_tag_categories_id" value="{{ isset($mealtag->meal_tag_categories_id) ? $mealtag->meal_tag_categories_id : ''}}" >
    {!! $errors->first('meal_tag_categories_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
