@extends('layouts.master')

@section('content')

    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What do you have to say</h3></header>
            <form action="">
                <div class="form-group">
                    <textarea class="form-control" name="new-post" id="" cols="30" rows="5" placeholder="Your Post"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </section>
    <div class="row posts">
        <div class="col-md-6 col-md-3-offset">
            <header><h3>What other people say .....</h3></header>
        </div>
    </div>
@endsection