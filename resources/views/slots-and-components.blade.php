@extends('main')

@section('content')

<h1>
    Slots and Components 
    <small>
        <a 
            href="https://laravel.com/docs/5.4/blade#components-and-slots"
            target="_blank">
            <span class="glyphicon glyphicon-book"></span>
        </a>
    </small>
</h1>

<p>
    A new ability to create slots and components has been added.
</p>

<hr>

<h2>Example 1</h2>
<pre>
    <xmp>
        <!-- /resources/views/alert.blade.php -->

        <div class="alert alert-danger">
            @{{ $slot }}
        </div>
    </xmp>
</pre>

<p>Pass what you want inside the alert <code>div</code></p>

<pre>
    <code class="php">
        @@component('alert')
            <strong>Whoops!</strong> Something went wrong!
        @@endcomponent 
    </code>
</pre>

<p>The following html is rendered.</p>

<pre>
    <xmp>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Something went wrong!
        </div>
    </xmp>
</pre>

<div class="well">
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Something went wrong!
    </div>
</div>

<hr>

<h2>Example 2</h2>

<p>
    Below is an example of panel components. View the source code for reference.
</p>

 <div class="row well">
    <div class="col-md-6">
        @component('components.panel')
            @slot('heading')
                Hi How Are You
            @endslot

            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

        @endcomponent 
    </div>

    <div class="col-md-6">
        @component('components.panel')
            @slot('heading')
                Component Two
            @endslot

            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.

        @endcomponent 
    </div>
 </div>




@endsection
