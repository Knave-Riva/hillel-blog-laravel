<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" method="POST" action='{{ route('registration.store') }}'>
    <fieldset>
        <div id="legend">
            <legend class="">Register</legend>
        </div>
        <div class="control-group">
            <!-- Username -->
            <label class="control-label"  for="username">Username</label>
            <div class="controls">
                <input type="text" id="username" name="name" placeholder="" @if($errors->has('name')) style="border-color: red" @endif class="error" value="{{@old('name')}}">
            </div>
            @if($errors->has('name'))
                @foreach($errors->get('name') as $error)
                    <p>{{$error}}</p>
                @endforeach
            @endif
        </div>

        <div class="control-group">
            <!-- E-mail -->
            <label class="control-label" for="email">E-mail</label>
            <div class="controls">
                <input type="text" id="email" name="email" placeholder="" @if($errors->has('email')) style="border-color: red" @endif class="error" value="{{@old('email')}}">
            </div>
            @if($errors->has('email'))
                @foreach($errors->get('email') as $error)
                    <p>{{$error}}</p>
                @endforeach
            @endif
        </div>

        <div class="control-group">
            <!-- Password-->
            <label class="control-label" for="password">Password</label>
            <div class="controls">
                <input type="password" id="password" name="password" placeholder="" @if($errors->has('password')) style="border-color: red" @endif class="error" value="{{@old('password')}}">
            </div>
            @if($errors->has('password'))
                @foreach($errors->get('password') as $error)
                    <p>{{$error}}</p>
                @endforeach
            @endif
        </div>

        <div class="control-group">
            <!-- Password -->
            <label class="control-label"  for="password_confirm">Password (Confirm)</label>
            <div class="controls">
                <input type="password" id="password_confirm" name="confirm_password" placeholder="" @if($errors->has('confirm_password')) style="border-color: red" @endif class="error" value="{{@old('confirm_password')}}">
            </div>
            @if($errors->has('password_confirm'))
                @foreach($errors->get('password_confirm') as $error)
                    <p>{{$error}}</p>
                @endforeach
            @endif
        </div>

        <div class="control-group">
            <!-- Button -->
            <div class="controls">
                <button class="btn btn-success">Register</button>
            </div>
        </div>
    </fieldset>
    @csrf
</form>
