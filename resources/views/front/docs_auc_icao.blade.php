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
{{--dd($manuals)--}}
        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($manuals) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th>@lang('global.pdf.fields.name')</th>
                        <th>@lang('global.pdf.fields.information')</th>
                        <th>@lang('global.pdf.fields.file')</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($manuals) > 0)
                        @foreach ($manuals as $pdf)
                            
                    <tr>
{{--dd($pdf['filename'])--}}
                                <td field-key='name'>{{ $pdf['filename'] }}</td>
                                <td field-key='information'>Информации нет</td>
                                <td field-key='file'><a href="{{ asset(env('UPLOAD_PATH') . '/' . $pdf['dirname'] . '/' . $pdf['basename']) }}" target="_blank">Просмотр файла</a></td>

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