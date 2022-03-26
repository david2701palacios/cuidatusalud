<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('NAME_PERSON') }}
            {{ Form::text('NAME_PERSON', $person->NAME_PERSON, ['class' => 'form-control' . ($errors->has('NAME_PERSON') ? ' is-invalid' : ''), 'placeholder' => 'Name Person']) }}
            {!! $errors->first('NAME_PERSON', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('LAST_NAME_PERSON') }}
            {{ Form::text('LAST_NAME_PERSON', $person->LAST_NAME_PERSON, ['class' => 'form-control' . ($errors->has('LAST_NAME_PERSON') ? ' is-invalid' : ''), 'placeholder' => 'Last Name Person']) }}
            {!! $errors->first('LAST_NAME_PERSON', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('GENDER') }}
            {{ Form::text('GENDER', $person->GENDER, ['class' => 'form-control' . ($errors->has('GENDER') ? ' is-invalid' : ''), 'placeholder' => 'Gender']) }}
            {!! $errors->first('GENDER', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('AGE') }}
            {{ Form::text('AGE', $person->AGE, ['class' => 'form-control' . ($errors->has('AGE') ? ' is-invalid' : ''), 'placeholder' => 'Age']) }}
            {!! $errors->first('AGE', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::hidden('ID_USER_FK', Auth::user()->id, $person->ID_USER_FK,['class' => 'form-control' . ($errors->has('ID_USER_FK') ? ' is-invalid' : ''), 'placeholder' => 'Id User Fkss','value' => 'as']) }}
            {!! $errors->first('ID_USER_FK', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>