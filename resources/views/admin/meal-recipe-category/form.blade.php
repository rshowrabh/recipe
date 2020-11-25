<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name"
           value="{{ isset($mealrecipecategory->name) ? $mealrecipecategory->name : ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description"
              required>{{ isset($mealrecipecategory->description) ? $mealrecipecategory->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('created_by') ? 'has-error' : ''}}">
    <label for="created_by" class="control-label">{{ 'Created By' }}</label>
    <input class="form-control" name="created_by" type="text" id="created_by"
           value="{{ isset($mealrecipecategory->created_by) ? $mealrecipecategory->created_by : ''}}">
    {!! $errors->first('created_by', '<p class="help-block">:message</p>') !!}
</div>
@can('isAdmin')
<div class="form-group {{ $errors->has('approved') ? 'has-error' : ''}}">
    <label for="approved" class="control-label">{{ 'Approved' }}</label>
    <select class="form-control" name="approved" type="number" id="approved">
        <option value='0' selected>No</option>
        <option value='1'>Yes</option>
    </select>
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
           value="{{ isset($mealrecipecategory->slug) ? $mealrecipecategory->slug : ''}}" required>
    {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
