<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Template Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('template', 'Template:') !!}
    {!! Form::textarea('template', null, ['class' => 'form-control']) !!}
</div>

<!-- 'bootstrap / Toggle Switch Status Field' -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', 1, null,  ['data-toggle' => 'toggle']) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('notificationTypes.index') !!}" class="btn btn-default">Cancel</a>
</div>
