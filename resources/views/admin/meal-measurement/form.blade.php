<div class="form-group {{ $errors->has('unit') ? 'has-error' : ''}}">
    <label for="unit" class="control-label">{{ 'Unit' }}</label>
    <input class="form-control" name="unit" type="text" id="unit" value="{{ isset($mealmeasurement->unit) ? $mealmeasurement->unit : ''}}" required>
    {!! $errors->first('unit', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
