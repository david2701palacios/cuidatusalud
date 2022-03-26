<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('NAME_HEALTHY_CONDITION') }}
            {{ Form::text('NAME_HEALTHY_CONDITION', $healthyCondition->NAME_HEALTHY_CONDITION, ['class' => 'form-control' . ($errors->has('NAME_HEALTHY_CONDITION') ? ' is-invalid' : ''), 'placeholder' => 'Name Healthy Condition']) }}
            {!! $errors->first('NAME_HEALTHY_CONDITION', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>