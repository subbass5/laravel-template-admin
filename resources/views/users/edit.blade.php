@extends('layouts.app')

@section('content')

    <div class="card">
  
        <div class="card-header bg-primary text-white">

            <h5  class="my-1 float-left">{{ !empty($users->name) ? $users->name : 'Users' }} <div class="btn-group btn-group-sm float-right" role="group">

                <a href="{{ route('users.users.index') }}" class="btn btn-primary" title="Show All Users">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                </a>

                <a href="{{ route('users.users.create') }}" class="btn btn-success" title="Create New Users">
                    <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                </a>

            </div></h5>

            
        </div>

        <div class="card-body">

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('users.users.update', $users->id) }}" id="edit_users_form" name="edit_users_form" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('users.form', [
                                        'users' => $users,
                                      ])

                <div class="form-group">
                    <div align="center">
					<button class="btn btn-primary" type="submit">
					<i class="fas fa-fw fa-edit"></i> 
					ปรับปรุงข้อมูล</button>
					<button class="btn btn-light" type="reset">
					<i class="fas fa-fw fa-redo" aria-hidden="true"></i> 
					ยกเลิก</button>
				  </div>
                </div>
            </form>

        </div>
    </div>

@endsection