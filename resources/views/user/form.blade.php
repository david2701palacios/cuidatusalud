<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ID_ROL_FK') }}
            {{ Form::text('ID_ROL_FK', $user->ID_ROL_FK, ['class' => 'form-control' . ($errors->has('ID_ROL_FK') ? ' is-invalid' : ''), 'placeholder' => 'Id Rol Fk']) }}
            {!! $errors->first('ID_ROL_FK', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>