
<div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">ชื่อ</label>
    <div class="col-md-4">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($users)->name) }}" maxlength="45" placeholder="ระบุ ชื่อ...">
        {!! $errors->first('name', '<p class="form-text text-muted">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="email" class="col-md-2 control-label">อีเมล</label>
    <div class="col-md-4">
        <input class="form-control" name="email" type="text" id="email" value="{{ old('email', optional($users)->email) }}" maxlength="128" placeholder="ระบุ อีเมล here...">
        {!! $errors->first('email', '<p class="form-text text-muted">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('position') ? 'has-error' : '' }}">
    <label for="position" class="col-md-2 control-label">ตำแหน่ง</label>
    <div class="col-md-4">
        <input class="form-control" name="position" type="text" id="position" value="{{ old('position', optional($users)->position) }}" maxlength="45" placeholder="Enter position here...">
        {!! $errors->first('position', '<p class="form-text text-muted">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('username') ? 'has-error' : '' }}">
    <label for="username" class="col-md-2 control-label">Username</label>
    <div class="col-md-4">
        <input class="form-control" name="username" type="text" id="username" value="{{ old('username', optional($users)->username) }}" maxlength="45" placeholder="Enter username here...">
        {!! $errors->first('username', '<p class="form-text text-muted">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('password') ? 'has-error' : '' }}">
    <label for="password" class="col-md-2 control-label">Password</label>
    <div class="col-md-4">
        <input class="form-control" name="password" type="text" id="password" value="{{ old('password', optional($users)->password) }}" maxlength="70" placeholder="Enter password here...">
        {!! $errors->first('password', '<p class="form-text text-muted">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('permission') ? 'has-error' : '' }}">
    <label for="permission" class="col-md-2 control-label">Permission</label>
    <div class="col-md-4">
        <select class="form-control" id="permission" name="permission">
        	    <option value="" style="display: none;" {{ old('permission', optional($users)->permission ?: '') == '' ? 'selected' : '' }} disabled selected>Enter permission here...</option>
        	@foreach (['ADMIN' => 'ADMIN',
'POS' => 'POS',
'STOCK' => 'STOCK'] as $key => $text)
			    <option value="{{ $key }}" {{ old('permission', optional($users)->permission) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('permission', '<p class="form-text text-muted">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('remember_token') ? 'has-error' : '' }}">
    <label for="remember_token" class="col-md-2 control-label">Remember Token</label>
    <div class="col-md-4">
        <input class="form-control" name="remember_token" type="text" id="remember_token" value="{{ old('remember_token', optional($users)->remember_token) }}" maxlength="100" placeholder="Enter remember token here...">
        {!! $errors->first('remember_token', '<p class="form-text text-muted">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('status') ? 'has-error' : '' }}">
    <label for="status" class="col-md-2 control-label">Status</label>
    <div class="col-md-4">
        <select class="form-control" id="status" name="status" required="true">
        	    <option value="" style="display: none;" {{ old('status', optional($users)->status ?: '') == '' ? 'selected' : '' }} disabled selected>Enter status here...</option>
        	@foreach (['ENABLED' => 'ENABLED',
'DISABLED' => 'DISABLED'] as $key => $text)
			    <option value="{{ $key }}" {{ old('status', optional($users)->status) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('status', '<p class="form-text text-muted">:message</p>') !!}
    </div>
</div>

