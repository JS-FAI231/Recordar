<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $permission->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('guard_name') }}
            {{ Form::text('guard_name', $permission->guard_name, ['class' => 'form-control' . ($errors->has('guard_name') ? ' is-invalid' : ''), 'placeholder' => 'Guard Name', 'readonly'=>'true']) }}
            {!! $errors->first('guard_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
    <a class="btn btn-primary" href="{{ route('permissions.index') }}"> {{ __('Back') }}</a>
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>