<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('NAME_DOCTOR') }}
            {{ Form::text('NAME_DOCTOR', $medicalControl->NAME_DOCTOR, ['class' => 'form-control' . ($errors->has('NAME_DOCTOR') ? ' is-invalid' : ''), 'placeholder' => 'Name Doctor']) }}
            {!! $errors->first('NAME_DOCTOR', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ROL_DOCTOR') }}
            {{ Form::text('ROL_DOCTOR', $medicalControl->ROL_DOCTOR, ['class' => 'form-control' . ($errors->has('ROL_DOCTOR') ? ' is-invalid' : ''), 'placeholder' => 'Rol Doctor']) }}
            {!! $errors->first('ROL_DOCTOR', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DATE_CONTROL') }}
            {{ Form::text('DATE_CONTROL', $medicalControl->DATE_CONTROL, ['class' => 'form-control' . ($errors->has('DATE_CONTROL') ? ' is-invalid' : ''), 'placeholder' => 'Date Control']) }}
            {!! $errors->first('DATE_CONTROL', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('OBSERVATIONS') }}
            {{ Form::text('OBSERVATIONS', $medicalControl->OBSERVATIONS, ['class' => 'form-control' . ($errors->has('OBSERVATIONS') ? ' is-invalid' : ''), 'placeholder' => 'Observations']) }}
            {!! $errors->first('OBSERVATIONS', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ID_PERSON_FK') }}
            {{ Form::text('ID_PERSON_FK', $medicalControl->ID_PERSON_FK, ['class' => 'form-control' . ($errors->has('ID_PERSON_FK') ? ' is-invalid' : ''), 'placeholder' => 'Id Person Fk']) }}
            {!! $errors->first('ID_PERSON_FK', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>