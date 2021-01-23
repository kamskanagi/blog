@extends('layouts.app')

@section('content')

<h1>contact</h1>


@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif


<form class="form-horizontal" method="POST" action="/contact/submit">
    @csrf
        <fieldset>
            <legend class="text-center header">Contact us</legend>

            <div class="form-group">
                <div class="col-md-8">
                    <input id="name" name="name" type="text" placeholder="Enter Name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8">
                    <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8">
                    <input id="subject" name="subject" type="text" placeholder="Subject" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <div class="col-md-8">
                    <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </div>
        </fieldset>
    </form>

@endsection