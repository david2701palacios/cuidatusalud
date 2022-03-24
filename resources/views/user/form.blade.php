<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('EMAIL_USER') }}
            {{ Form::text('EMAIL_USER', $user->EMAIL_USER, ['class' => 'form-control' . ($errors->has('EMAIL_USER') ? ' is-invalid' : ''), 'placeholder' => 'Email User']) }}
            {!! $errors->first('EMAIL_USER', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PASSWORD_USER') }}
            {{ Form::text('PASSWORD_USER', $user->PASSWORD_USER, ['class' => 'form-control' . ($errors->has('PASSWORD_USER') ? ' is-invalid' : ''), 'placeholder' => 'Password User']) }}
            {!! $errors->first('PASSWORD_USER', '<div class="invalid-feedback">:message</div>') !!}
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