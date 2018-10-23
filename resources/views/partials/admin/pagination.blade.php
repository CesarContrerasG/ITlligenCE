@if ($items->firstItem())
    <div class="pull-left" style="margin-top: 7px;">
        <small>{{ trans('Mostrando', ['Primer' => $items->firstItem(), 'Último' => $items->lastItem(), 'total' => $items->total(), 'type' => strtolower(trans_choice('Empresas', 2))]) }}</small>
    </div>
    <div class="pull-right">
        {{ $items->links() }}
       
        {!! $items->appends(request()->except('page'))->links() !!}
    	
    </div>
@else
    <div class="pull-left">
        <small>{{ "Tabla vacia" }}</small>
    </div>
@endif