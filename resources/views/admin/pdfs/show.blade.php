@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.pdf.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.pdf.fields.name')</th>
                            <td field-key='name'>{{ $pdf->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.pdf.fields.information')</th>
                            <td field-key='information'>{!! $pdf->information !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.pdf.fields.file')</th>
                            <td field-key='file'>@if($pdf->file)<a href="{{ asset(env('UPLOAD_PATH').'/' . $pdf->file) }}" target="_blank">Download file</a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('global.pdf.fields.created-by')</th>
                            <td field-key='created_by'>{{ $pdf->created_by->name or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.pdfs.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop
