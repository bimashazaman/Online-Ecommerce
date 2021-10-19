@extends('admin::layouts.content')

@section('page_title')
    {{ __('admin::app.marketing.events.title') }}
@stop

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>{{ __('admin::app.marketing.events.title') }}</h1>
            </div>

            <div class="page-action">
                <a href="{{ route('admin.events.create') }}" class="btn btn-lg btn-primary">
                    {{ __('admin::app.marketing.events.add-title') }}
                </a>
            </div>
        </div>

        <div class="page-content">

            {!! app('Webkul\Admin\DataGrids\EventDataGrid')->render() !!}
            
        </div>
    </div>
@stop