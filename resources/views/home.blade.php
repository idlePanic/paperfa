@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <img src="/images/avatars/{{$user->avatar}}" style="width: 150px;height: 150px;float: left;border-radius: 50%;margin-right: 25px">
                        {{$user->name}}
                        <form enctype="multipart/form-data" action="/profile" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <label>Update profile image</label>
                            <br>
                            <input type="file" name="avatar">
                            <input type="submit" class="pull-right btn btn-primary" value="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
