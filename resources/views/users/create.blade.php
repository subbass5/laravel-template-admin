@extends('layouts.app')

@section('content')

    <div class="card">

        <div class="card-header bg-primary text-white">
            
            <h5  class="my-1 float-left">Create New Users<div class="btn-group btn-group-sm float-right" role="group">
                <a href="{{ route('users.users.index') }}" class="btn btn-primary" title="Show All Users">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
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

            <form method="POST" action="{{ route('users.users.store') }}" accept-charset="UTF-8" id="create_users_form" name="create_users_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('users.form', [
                                        'users' => null,
                                      ])

                <div class="form-group">                     
						<div align="center">
						  <button class="btn btn-primary" type="submit">
						  <i class="fas fa-fw fa-save"></i> บันทึก</button>
						  <button class="btn btn-light" type="reset" onclick="history.back();"> 
						  <i class="fas fa-fw fa-redo" aria-hidden="true"></i> ยกเลิก</button>
						</div>
                </div>

            </form>

        </div>
    </div>

@endsection


