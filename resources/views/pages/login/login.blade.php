@extends('layouts.login')

@section('content')
    <form action="users" method="POST">
        <div class="row justify-content-center position-absolute top-50 start-50 translate-middle">
            <div class="col-12 justify-content-center">
                <div class="row">
                    <div class="col-12 text-center text-wrap">
                        <img src="https://raw.githubusercontent.com/zaurbbb/m00dlekiller-front-end/main/images/gifaitu.gif" height="160" width="160">
                        <img src="https://raw.githubusercontent.com/zaurbbb/m00dlekiller-front-end/main/images/aitu.png">
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="row">
                    <div class="col-md-12" style="min-width: 300px">
                        <input type="name" class="form-control text-center" placeholder="EMAIL">
                    </div>

                    <div class="col-md-12" style="min-width: 300px">
                        <input type="password" class="form-control text-center" placeholder="PASSWORD">
                    </div>
                </div>

                <div class="row justify-content-center ">
                    <div class="col-7 text-center">
                        <a class="link-primary" onclick="pushUpMessage()">
                            Forgot username/password
                        </a>
                    </div>

                    <div class="col-5">
                        <div class="form-check justify-content-center">
                            <input class="form-check-input justify-content-center" type="checkbox">
                            <label class="form-check-label">
                                Remember me
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" class="form-control text-center btn btn-outline-primary" value="Log in"  onclick="pushUpMessage()">
                    </div>

                </div>
                <hr>

                <div class="row d-flex justify-content-center text-center">

                    <div class="col-6 mx-auto my-auto px-auto py-auto">
                        <a role="button" href="/notregged" class="btn btn-outline-dark">Log in as a guest</a>
                    </div>

                    <div class="col-6 mx-auto my-auto px-auto py-auto">
                        <a role="button" href="/" class="btn btn-outline-dark">OpenID Connect</a>
                    </div>


                </div>
            </div>
        </div>
    </form>
@endsection
