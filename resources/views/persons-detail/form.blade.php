<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ID_PRINCIPAL_PERSON_FK') }}
            {{ Form::text('ID_PRINCIPAL_PERSON_FK', $personsDetail->ID_PRINCIPAL_PERSON_FK, ['class' => 'form-control' . ($errors->has('ID_PRINCIPAL_PERSON_FK') ? ' is-invalid' : ''), 'placeholder' => 'Id Principal Person Fk']) }}
            {!! $errors->first('ID_PRINCIPAL_PERSON_FK', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ID_PERSON_IN_CHARGUE_FK') }}
            {{ Form::text('ID_PERSON_IN_CHARGUE_FK', $personsDetail->ID_PERSON_IN_CHARGUE_FK, ['class' => 'form-control' . ($errors->has('ID_PERSON_IN_CHARGUE_FK') ? ' is-invalid' : ''), 'placeholder' => 'Id Person In Chargue Fk']) }}
            {!! $errors->first('ID_PERSON_IN_CHARGUE_FK', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>