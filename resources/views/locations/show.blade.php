@extends('locations.index')

@section('location')
<div class="panel panel-default">
    <div class="panel-body">
        <div class="form-group">
            <label for="name" class="control-label">*Name</label>
            <input type="text" class="form-control" name="name" value="{{ $location['name'] }}" required>        
        </div>
        <div class="form-group">
            <label for="address" class="control-label">*Address</label>
            <input type="text" class="form-control" name="address" value="{{ $location['address'] }}" required>        
        </div>
        <div class="form-group">
            <label for="address2" class="control-label">*Address (continued)</label>
            <input type="text" class="form-control" name="address2" value="{{ $location['address2'] }}" required>        
        </div>
        <div class="form-group">
            <label for="phone" class="control-label">*Main Phone</label>
            <input type="tel" class="form-control" name="phone" value="{{ $location['phone'] }}" required>        
        </div>
        <div class="form-group">
            <label for="phone2" class="control-label">Secondary Phone</label>
            <input type="tel" class="form-control" name="phone2" value="{{ $location['phone2'] }}">        
        </div>
        <div class="form-group">
            <label for="email" class="control-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ $location['email'] }}">        
        </div>
        <div class="form-group">
            <label for="hoursMT" class="control-label">Monday to Thursday Hours</label>
            <input type="text" class="form-control" name="hoursMT" value="{{ $location['hoursMT'] }}">        
        </div>
        <div class="form-group">
            <label for="hoursSa" class="control-label">Saturday Hours</label>
            <input type="text" class="form-control" name="hoursSa" value="{{ $location['hoursSa'] }}">        
        </div>
        <div class="form-group">
            <label for="hoursSu" class="control-label">Sunday Hours</label>
            <input type="text" class="form-control" name="hoursSu" value="{{ $location['hoursSu'] }}">        
        </div>
    </div>
</div>
@endsection
