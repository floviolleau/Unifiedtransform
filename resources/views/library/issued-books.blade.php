@extends('layouts.app')
@section('title', __('All Issued Books'))
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            @include('layouts.leftside-menubar')
        </div>
        <div class="col-md-10" id="main-container">
            <div class="panel panel-default">
                <div class="page-panel-title">@lang('All Issued Books')</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @component('components.issued-books-list',['books'=>$issued_books])
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
