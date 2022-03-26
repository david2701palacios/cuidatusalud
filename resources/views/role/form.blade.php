<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('NAME_ROL') }}
            {{ Form::text('NAME_ROL', $role->NAME_ROL, ['class' => 'form-control' . ($errors->has('NAME_ROL') ? ' is-invalid' : ''), 'placeholder' => 'Name Rol']) }}
            {!! $errors->first('NAME_ROL', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>