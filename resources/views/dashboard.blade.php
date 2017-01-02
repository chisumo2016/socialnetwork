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
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What other people say .....</h3></header>
            <article class="post">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias asperiores commodi delectus,  .</p>
                <div class="info">
                    Posted by Bernard on 02.01.2017
                </div>
                <div class="interaction">
                    <a href="">Like</a>  |
                    <a href="">Dislike</a> |
                    <a href="">Edit</a>     |
                    <a href="">Delete</a>
                </div>
            </article>

            <article class="post">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias asperiores commodi delectus,  .</p>
                <div class="info">
                    Posted by Bernard on 02.01.2017
                </div>
                <div class="interaction">
                    <a href="">Like</a>  |
                    <a href="">Dislike</a> |
                    <a href="">Edit</a>     |
                    <a href="">Delete</a>
                </div>
            </article>

        </div>
    </div>
@endsection