@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.pdf.title')</h3>
    @can('pdf_create')
    <p>
        <a href="{{ route('admin.pdfs.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>
        
        @if(!is_null(Auth::getUser()->role_id) && config('global.can_see_all_records_role_id') == Auth::getUser()->role_id)
            @if(Session::get('Pdf.filter', 'all') == 'my')
                <a href="?filter=all" class="btn btn-default">Show all records</a>
            @else
                <a href="?filter=my" class="btn btn-default">Filter my records</a>
            @endif
        @endif
    </p>
    @endcan

    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.pdfs.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('global.app_all')</a></li> |
            <li><a href="{{ route('admin.pdfs.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('global.app_trash')</a></li>
        </ul>
    </p>
    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($pdfs) > 0 ? 'datatable' : '' }} @can('pdf_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('pdf_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('global.pdf.fields.name')</th>
                        <th>@lang('global.pdf.fields.information')</th>
                        <th>@lang('global.pdf.fields.file')</th>
                        <th>@lang('global.pdf.fields.created-by')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($pdfs) > 0)
                        @foreach ($pdfs as $pdf)
                            <tr data-entry-id="{{ $pdf->id }}">
                                @can('pdf_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='name'>{{ $pdf->name }}</td>
                                <td field-key='information'>{!! $pdf->information !!}</td>
                                <td field-key='file'>@if($pdf->file)<a href="{{ asset(env('UPLOAD_PATH').'/' . $pdf->file) }}" target="_blank">Просмотр файла</a>@endif</td>
                                <td field-key='created_by'>{{ $pdf->created_by->name or '' }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.pdfs.restore', $pdf->id])) !!}
                                    {!! Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.pdfs.perma_del', $pdf->id])) !!}
                                    {!! Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                                                </td>
                                @else
                                <td>
                                    @can('pdf_view')
                                    <a href="{{ route('admin.pdfs.show',[$pdf->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('pdf_edit')
                                    <a href="{{ route('admin.pdfs.edit',[$pdf->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('pdf_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.pdfs.destroy', $pdf->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="9">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('pdf_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.pdfs.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection