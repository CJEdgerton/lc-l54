@extends('main')

@section('content')

<h1>
    Resource Controllers with Model Boilerplate
    <small>
        <a 
            href="https://laravel.com/docs/5.4/controllers#resource-controllers"
            target="_blank">
            <span class="glyphicon glyphicon-book"></span>
        </a>
    </small>
</h1>

<p>
    New <code>--model</code> flag when creating a resource controller using the <code>artisan</code> cli adds in some convenient model boilerplate to the resource controller, and will prompt to create the model if it doesn't exist.
</p>

<p>
    On relevant methods, the model will autmatically be type hinted. A demo of this while using route-model binding can be seen in the <code>PostController</code> in this project. Visit the following url to see a demo of it utilized on the <code>edit</code> method. <a href="/posts/1/edit">post/1/edit</a>
</p>

<div class="alert alert-info">
    <p>
        <code>php artisan make:controller PostController --resource --model=Post</code> ... generates the below controller.
    </p>
</div>

<hr>

<pre>
    <code class="php">

        namespace App\Http\Controllers;

        use App\Post;
        use Illuminate\Http\Request;

        class PostController extends Controller
        {
            /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
            public function index()
            {
                //
            }

            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
                //
            }

            /**
             * Store a newly created resource in storage.
             *
             * @param  \Illuminate\Http\Request  $request
             * @return \Illuminate\Http\Response
             */
            public function store(Request $request)
            {
                //
            }

            /**
             * Display the specified resource.
             *
             * @param  \App\Post  $post
             * @return \Illuminate\Http\Response
             */
            public function show(Post $post)
            {
                //
            }

            /**
             * Show the form for editing the specified resource.
             *
             * @param  \App\Post  $post
             * @return \Illuminate\Http\Response
             */
            public function edit(Post $post)
            {
                //
            }

            /**
             * Update the specified resource in storage.
             *
             * @param  \Illuminate\Http\Request  $request
             * @param  \App\Post  $post
             * @return \Illuminate\Http\Response
             */
            public function update(Request $request, Post $post)
            {
                //
            }

            /**
             * Remove the specified resource from storage.
             *
             * @param  \App\Post  $post
             * @return \Illuminate\Http\Response
             */
            public function destroy(Post $post)
            {
                //
            }
        }

    </code>
</pre>

@endsection
