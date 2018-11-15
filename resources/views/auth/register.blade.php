@extends('layouts.app')

@section('content')
    <div class="columns is-fullheight is-vcentered h-100 " style="margin-top: 50px;">
        <div class="column">
            <div class="modal-content">
                <div class="thum">

                    <div class="box" style="border: 1px solid #ececec;">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="field">
                                <label class="label">Username</label>
                                <div class="control has-icons-left has-icons-right">
                                    <input id="name" name="name"
                                           class="input is-default form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           type="text" placeholder="John Doe">
                                    <span class="icon is-small is-left"><i class="fas fa-user"></i></span>
                                </div>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <p class="has-text-danger">{{ $errors->first('name') }}</p>
                                    </span>
                                @endif
                            </div>

                            <div class="field">
                                <label class="label">Email</label>
                                <div class="control has-icons-left has-icons-right">
                                    <input id="email" name="email"
                                           class="input is-default form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           type="email" placeholder="johndoe@example.com">
                                    <span class="icon is-small is-left"><i class="fas fa-envelope"></i></span>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <p class="has-text-danger">{{ $errors->first('email') }}</p>
                                    </span>
                                @endif
                            </div>
                            <div class="field">
                                <label class="label">Password</label>
                                <div class="control has-icons-left has-icons-right">
                                    <input id="password" name="password" class="input is-default form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" placeholder="******">
                                    <span class="icon is-small is-left">
                                    <i class="fas fa-unlock-alt"></i>
                                    </span>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <p class="has-text-danger">{{ $errors->first('password') }}</p>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Repeat password</label>
                                <div class="control has-icons-left has-icons-right">
                                    <input id="password-confirm" name="password_confirmation" class="input is-default" type="password" placeholder="******">
                                    <span class="icon is-small is-left">
                                    <i class="fas fa-unlock-alt"></i>
                                    </span>

                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <label class="checkbox">
                                        <input type="checkbox" required>
                                        I agree to the <a href="http://jestevezrod.es" target="_blank">terms and conditions</a>
                                    </label>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control is-flex-tablet jc-right">
                                    <button type="submit" class="button is-link ">Sign up</button>
                                </div>

                            </div>

                </form>
            </div>
        </div>
    </div>
    </div>
</div>
    </div>
@endsection

