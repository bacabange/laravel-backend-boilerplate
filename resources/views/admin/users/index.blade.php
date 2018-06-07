@extends('layouts.app', ['appType' => 'app'])

@section('content')

@component('components.page-header')
    <h2 class="no-margin-bottom">{{ __('Users') }}</h2>
@endcomponent

@component('components.breadcrumbs')
{{ Breadcrumbs::render('users') }}
@endcomponent

<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-close">
                    <div class="dropdown">
                        <button type="button" id="closeCard4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard4" class="dropdown-menu dropdown-menu-right has-shadow">
                            <a href="#" class="dropdown-item remove"> <i class="fa fa-plus"></i>Create</a>
                            <a href="#" class="dropdown-item remove"> <i class="fa fa-download"></i>Download CSV</a>
                        </div>
                    </div>
                </div>
                <div class="card-header d-flex align-items-center">
                    <h3 class="h4">{{ __('List') }}</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>admin</td>
                                        <td>
                                            <button class="btn btn-primary btn-sm"> <i class="fa fa-pencil"></i> </button>
                                            <button class="btn btn-danger btn-sm"> <i class="fa fa-times"></i> </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
