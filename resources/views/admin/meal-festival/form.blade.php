<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($mealfestival->name) ? $mealfestival->name : ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('holiday') ? 'has-error' : ''}}">
    <label for="holiday" class="control-label">{{ 'Holiday' }}</label>
    <input class="form-control" name="holiday" type="text" id="holiday" value="{{ isset($mealfestival->holiday) ? $mealfestival->holiday : ''}}" required>
    {!! $errors->first('holiday', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($mealfestival->description) ? $mealfestival->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('festival_date') ? 'has-error' : ''}}">
    <label for="festival_date" class="control-label">{{ 'Festival Date' }}</label>
    <input class="form-control" name="festival_date" type="date" id="festival_date" value="{{ isset($mealfestival->festival_date) ? $mealfestival->festival_date : ''}}" required>
    {!! $errors->first('festival_date', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
