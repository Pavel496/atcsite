@extends('front.app1')

@section('content')

<div class="col-md-3">
    @include('front.inc.sidebar1')
</div>                    

<div class="col-md-9">
    <div class="panel panel-default">
        <div class="panel-heading">
            Список документов
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($pdfs) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th>@lang('global.pdf.fields.name')</th>
                        <th>@lang('global.pdf.fields.information')</th>
                        <th>@lang('global.pdf.fields.file')</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($pdfs) > 0)
                        @foreach ($pdfs as $pdf)
                            <tr data-entry-id="{{ $pdf->id }}">

                                <td field-key='name'>{{ $pdf->name }}</td>
                                <td field-key='information'>{!! $pdf->information !!}</td>
                                <td field-key='file'>@if($pdf->file)<a href="{{ asset(env('UPLOAD_PATH').'/' . $pdf->file) }}" target="_blank">Просмотр файла</a>@endif</td>

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
</div>

@endsection