@extends('layouts.app', ['appType' => 'app'])

@section('content')

@component('components.page-header')
<h2 class="no-margin-bottom">{{ __('Create') }}</h2>
@endcomponent

@component('components.breadcrumbs')
{{ Breadcrumbs::render('users.create') }}
@endcomponent

<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf


                        <div class="row">
                            <div class="col-sm">
                                <div class="form-group">
                                    <label class="form-control-label">{{ __('Name') }}</label>
                                    <input name="name" class="form-control {{ $errors->first('name') ? 'is-invalid' : '' }}" type="text" value="{{ old('name') }}">
                                    @if($errors->first('name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label">{{ __('Email') }}</label>
                                    <input name="email" class="form-control {{ $errors->first('email') ? 'is-invalid' : '' }}" type="email" value="{{ old('email') }}">
                                    @if($errors->first('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label">{{ __('Password') }}</label>
                                    <input name="password" class="form-control {{ $errors->first('password') ? 'is-invalid' : '' }}" type="password">
                                    @if($errors->first('password'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label">{{ __('Confirm Password') }}</label>
                                    <input name="password_confirmation" class="form-control" type="password">
                                </div>

                                <div class="form-group">
                                    <input value="{{ __('Save') }}" class="btn btn-primary" type="submit">
                                </div>
                            </div>

                            <div class="col-sm">

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
