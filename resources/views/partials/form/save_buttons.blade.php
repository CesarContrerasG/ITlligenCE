<div class="{{ $col }}">
    <div class="form-group no-margin">
        {!! Form::button('<span class="glyphicon glyphicon-floppy-saved"></span> &nbsp;' . trans('general.save'), ['type' => 'submit', 'class' => 'btn btn-success']) !!}
        <a href="{{ url($cancel) }}" class="btn btn-default"><span class="glyphicon glyphicon-remove-circle"></span> &nbsp;{{ trans('general.cancel') }}</a>
    </div>
</div>
