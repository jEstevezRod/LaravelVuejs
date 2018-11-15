@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 50px;">
        <div class="columns is-fullheight is-vcentered h-100 ">
            <div class="column">
                <div class="modal-content">
                    <div class="thum">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="box" style="border: 1px solid #ececec;">


                                <div class="field">
                                    <label class="label">Email</label>
                                    <div class="control has-icons-left has-icons-right">
                                        <input name="email" class="input is-default" type="text"
                                               placeholder="John_Doe@gmail.com">
                                        <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                    </span>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <p class="has-text-danger">{{ $errors->first('email') }}</p>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Password</label>
                                    <div class="control has-icons-left has-icons-right">
                                        <input name="password"
                                               class="input is-default form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               type="password" placeholder="******">
                                        <span class="icon is-small is-left">
                                    <i class="fas fa-unlock-alt"></i>
                                    </span>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <p class="has-text-danger">{{ $errors->first('password') }}</p>
                                    </span>
                                    @endif
                                </div>


                                <div class="field">
                                    <div class="control">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="field">


                                    <div class="control is-flex">
                                        <button style="margin: 0px 10px;" class="button is-dark ma-5"><a
                                                    class="has-text-white" href="login/github">
                                                <span class="icon">
                                                    <i class="fab fa-github"></i>
                                                </span>
                                                <span>Login with GitHub</span></a></button>

                                        <button style="margin: 0px 10px;" class="button is-link is-pulled-right"><a type="submit"
                                            class="has-text-white "><span class="icon"><i class="fas fa-sign-in-alt"></i></span><span>Login</span></a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

</a>

