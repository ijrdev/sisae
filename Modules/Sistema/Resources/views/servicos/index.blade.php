@extends('sistema::layouts.main')

@section('title', 'Serviços')

@section('header')
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-cog"></i>Serviços<br><small>Todos os serviços disponíveis.</small>
            </h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="block">
        <div class="table-responsive">
            <table class="table table-vcenter table-striped">
                <thead>
                <tr>
                    <th style="width: 150px;" class="text-center"><i class="gi gi-user"></i></th>
                    <th>Client</th>
                    <th>Email</th>
                    <th>Subscription</th>
                    <th style="width: 150px;" class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-center"><img src="img/placeholders/avatars/avatar14.jpg" alt="avatar" class="img-circle"></td>
                    <td><a href="page_ready_user_profile.html">client1</a></td>
                    <td>client1@example.com</td>
                    <td><a href="javascript:void(0)" class="label label-warning">Trial</a></td>
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center"><img src="img/placeholders/avatars/avatar4.jpg" alt="avatar" class="img-circle"></td>
                    <td><a href="page_ready_user_profile.html">client2</a></td>
                    <td>client2@example.com</td>
                    <td><a href="javascript:void(0)" class="label label-success">VIP</a></td>
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center"><img src="img/placeholders/avatars/avatar8.jpg" alt="avatar" class="img-circle"></td>
                    <td><a href="page_ready_user_profile.html">client3</a></td>
                    <td>client3@example.com</td>
                    <td><a href="javascript:void(0)" class="label label-info">Business</a></td>
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center"><img src="img/placeholders/avatars/avatar12.jpg" alt="avatar" class="img-circle"></td>
                    <td><a href="page_ready_user_profile.html">client4</a></td>
                    <td>client4@example.com</td>
                    <td><a href="javascript:void(0)" class="label label-success">VIP</a></td>
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center"><img src="img/placeholders/avatars/avatar3.jpg" alt="avatar" class="img-circle"></td>
                    <td><a href="page_ready_user_profile.html">client5</a></td>
                    <td>client5@example.com</td>
                    <td><a href="javascript:void(0)" class="label label-primary">Personal</a></td>
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center"><img src="img/placeholders/avatars/avatar16.jpg" alt="avatar" class="img-circle"></td>
                    <td><a href="page_ready_user_profile.html">client6</a></td>
                    <td>client6@example.com</td>
                    <td><a href="javascript:void(0)" class="label label-info">Business</a></td>
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center"><img src="img/placeholders/avatars/avatar1.jpg" alt="avatar" class="img-circle"></td>
                    <td><a href="page_ready_user_profile.html">client7</a></td>
                    <td>client7@example.com</td>
                    <td><a href="javascript:void(0)" class="label label-primary">Personal</a></td>
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- END Responsive Full Content -->
    </div>
@endsection
