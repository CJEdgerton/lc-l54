@extends('main')

@section('content')

<h1>
    Fluent Routing - 
    <small>
        <a 
            href="https://laravel.com/docs/5.4/routing"
            target="_blank">
            <span class="glyphicon glyphicon-book"></span>
        </a>
    </small>
</h1>

<p>
    Some updates on naming and prefixing routes.
</p>

<hr>

<pre>
    <code class="php">
        // routes/web.php
        
        // Old
        Route::group(['prefix' => 'api'], function () {
            Route::get('/', function() {
                //
            })->name('home');
        });

        // New
        Route::prefix('api')->group(function() {
            Route::name('home')->get('/', function() {
               // 
            });
        });
    </code>
</pre>

<p>Can also apply middleware in using same syntax</p>

<pre>
    <code class="php">
        Route::name('dashboard')
            ->middleware('auth')
            ->get('/dashboard', function() {
                // 
            });
    </code>
</pre>




@endsection
