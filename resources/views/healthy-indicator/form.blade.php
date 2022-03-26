<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('NAME_HEALTHY_INDICATORS') }}
            {{ Form::text('NAME_HEALTHY_INDICATORS', $healthyIndicator->NAME_HEALTHY_INDICATORS, ['class' => 'form-control' . ($errors->has('NAME_HEALTHY_INDICATORS') ? ' is-invalid' : ''), 'placeholder' => 'Name Healthy Indicators']) }}
            {!! $errors->first('NAME_HEALTHY_INDICATORS', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>