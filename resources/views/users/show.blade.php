@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header bg-primary text-white">
	
        <h5  class="my-1 float-left">{{ isset($users->name) ? $users->name : 'Users' }}
		<div class="float-right">
            <form method="POST" action="{!! route('users.users.destroy', $users->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('users.users.index') }}" class="btn btn-primary" title="Show All Users">
                        <i class="fas fa-fw fa-th-list" aria-hidden="true"></i>
                    </a>
                    <a href="{{ route('users.users.create') }}" class="btn btn-success" title="Create New Users">
                        <i class="fas fa-fw fa-plus" aria-hidden="true"></i>
                    </a>                    
                    <a href="{{ route('users.users.edit', $users->id ) }}" class="btn btn-primary" title="Edit Users">
                        <i class="fas fa-fw fa-pencil-alt" aria-hidden="true"></i>
                    </a>
                    <button type="submit" class="btn btn-danger" title="Delete Users" onclick="return confirm(&quot;Click Ok to delete Users.?&quot;)">
                        <i class="fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                    </button>
                </div>
            </form>
        </div>
		</h5>
        
    </div>

    <div class="card-body">
         
            <div class="row">
				<div class="col-sm-4 right">ชื่อ</div>
				<div class="col-sm-8">: {{ $users->name }}</div>
			</div>
            <div class="row">
				<div class="col-sm-4 right">อีเมล</div>
				<div class="col-sm-8">: {{ $users->email }}</div>
			</div>
            <div class="row">
				<div class="col-sm-4 right">ตำแหน่ง</div>
				<div class="col-sm-8">: {{ $users->position }}</div>
			</div>
            <div class="row">
				<div class="col-sm-4 right">Username</div>
				<div class="col-sm-8">: {{ $users->username }}</div>
			</div>
            <div class="row">
				<div class="col-sm-4 right">Password</div>
				<div class="col-sm-8">: {{ $users->password }}</div>
			</div>
            <div class="row">
				<div class="col-sm-4 right">Permission</div>
				<div class="col-sm-8">: {{ $users->permission }}</div>
			</div>
            <div class="row">
				<div class="col-sm-4 right">Created At</div>
				<div class="col-sm-8">: {{ $users->created_at }}</div>
			</div>
            <div class="row">
				<div class="col-sm-4 right">Updated At</div>
				<div class="col-sm-8">: {{ $users->updated_at }}</div>
			</div>
            <div class="row">
				<div class="col-sm-4 right">Remember Token</div>
				<div class="col-sm-8">: {{ $users->remember_token }}</div>
			</div>
            <div class="row">
				<div class="col-sm-4 right">Status</div>
				<div class="col-sm-8">: {{ $users->status }}</div>
			</div>
        

    </div>
</div>

@endsection