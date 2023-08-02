@extends('layouts.app')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <i class=" fas fa-fw fa-check" aria-hidden="true"></i>
            {!! session('success_message') !!}

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>
    @endif




    <div class="card">

        <div class="card-header bg-primary text-white">

            <h5  class="my-1 float-left">Users<div class="btn-group btn-group-sm float-right" role="group">
                <a href="{{ route('users.users.create') }}" class="btn btn-success" title="Create New Users">                     
					<i class="fas fa-fw  fa-plus" aria-hidden="true"></i>
                </a>
            </div></h5>

            

        </div>
        
        @if(count($usersObjects) == 0)
            <div class="card-body text-center">
                <h4>No Users Available.</h4>
            </div>
        @else
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped table-sm table-bordered">
                    <thead>
                        <tr>
						<th>ลำดับที่</th>
                                <th>ชื่อ</th>
                            <th>อีเมล</th>
                            <th>ตำแหน่ง</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Permission</th>
                            <th>Remember Token</th>
                            <th>Status</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
					 <?php $r = 0 ; if(isset($_REQUEST['page']) && $_REQUEST['page'] > 1 ){$r = 25 * ($_REQUEST['page']-1);}?>
                    @foreach($usersObjects as $users)
                        <tr>
						<td>{{++$r}}</td>
						
                                <td>{{ $users->name }}</td>
                            <td>{{ $users->email }}</td>
                            <td>{{ $users->position }}</td>
                            <td>{{ $users->username }}</td>
                            <td>{{ $users->password }}</td>
                            <td>{{ $users->permission }}</td>
                            <td>{{ $users->remember_token }}</td>
                            <td>{{ $users->status }}</td>

                            <td>

                                <form method="POST" action="{!! route('users.users.destroy', $users->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-sm float-right" role="group">
                                        <a href="{{ route('users.users.show', $users->id ) }}" class="btn btn-info" title="Show Users">
                                            <i class=" fas fa-fw fa-eye" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('users.users.edit', $users->id ) }}" class="btn btn-primary" title="Edit Users">
                                            <i class=" fas fa-fw fa-pencil-alt" aria-hidden="true"></i>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Users" onclick="return confirm(&quot;Click Ok to delete Users.&quot;)">
                                            <i class=" fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="card-footer">
            {!! $usersObjects->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection