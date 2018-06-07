@extends('layouts.app', ['appType' => 'app'])

@section('content')

    @component('components.page-header')
        <h2 class="no-margin-bottom">Users</h2>
    @endcomponent

    @component('components.breadcrumbs')
        {{ Breadcrumbs::render('users') }}
    @endcomponent

@endsection
