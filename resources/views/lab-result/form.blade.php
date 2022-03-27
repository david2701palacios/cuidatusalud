<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('TITLE') }}
            {{ Form::text('TITLE', $labResult->TITLE, ['class' => 'form-control' . ($errors->has('TITLE') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('TITLE', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DESCRIPTION_RESULTS') }}
            {{ Form::text('DESCRIPTION_RESULTS', $labResult->DESCRIPTION_RESULTS, ['class' => 'form-control' . ($errors->has('DESCRIPTION_RESULTS') ? ' is-invalid' : ''), 'placeholder' => 'Description Results']) }}
            {!! $errors->first('DESCRIPTION_RESULTS', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('IMAGE') }}
            {{ Form::text('IMAGE', $labResult->IMAGE, ['class' => 'form-control' . ($errors->has('IMAGE') ? ' is-invalid' : ''), 'placeholder' => 'Image']) }}
            {!! $errors->first('IMAGE', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ID_PERSON_FK') }}
            {{ Form::text('ID_PERSON_FK', $labResult->ID_PERSON_FK, ['class' => 'form-control' . ($errors->has('ID_PERSON_FK') ? ' is-invalid' : ''), 'placeholder' => 'Id Person Fk']) }}
            {!! $errors->first('ID_PERSON_FK', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>