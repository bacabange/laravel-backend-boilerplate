@extends('layouts.app', ['appType' => 'app'])

@section('content')

    @component('components.page-header')
        <h2 class="no-margin-bottom">Dashboard</h2>
    @endcomponent

    @component('components.breadcrumbs')
        {{ Breadcrumbs::render('dashboard') }}
    @endcomponent

@endsection
