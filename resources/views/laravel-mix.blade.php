@extends('main')

@section('content')

<h1>
    Laravel Mix - 
    <small>
        <a 
            href="https://laravel.com/docs/5.4/mix"
            target="_blank">
            <span class="glyphicon glyphicon-book"></span>
        </a>
    </small>
</h1>

<p>
   Useful things to remember about mix.
</p>

<hr>

<h3>Versioning assets to prevent browser caching</h3>

<pre>
    <code class="javascript">
        mix.js('resources/assets/js/app.js', 'public/js')
            .version();
    </code>
</pre>

<div class="alert alert-info text-center">
    The <code>version</code> method at the end of the mix object to creates unique string in the file name to prevent caching.
</div>

<p>
    Generates something like ... 
    <ul>
        <li>
            <code>app.982d1b617da18d2981d1.css</code>
        </li>
        <li>
            <code>app.b1cbfa811c090b9fbab8.js</code>
        </li>
    </ul>
    ... within the public directory.
</p>

<p>
    Now use 5.4's new <code>mix</code> function to dynamically update your <code>src</code> and <code>href</code> attributes in your main layout.
</p>

<pre>
    <code class="html">
        &lt;link rel="stylesheet" type="text/css" href="@{{ mix('/css/app.css') }}"&gt;
        ...
        &lt;script type="text/javascript" src="@{{ mix('/js/app.js') }}"&gt;&lt;/script&gt;
    </code>
</pre>

<hr>

<h3>Minify for production</h3>
<div class="alert alert-info text-center">
   Running <code>npm-run-production</code> minifies all assets.
</div>

<hr>

<h3>Extract libraries</h3>

<pre>
    <code class="javascript">
        mix.js('resources/assets/js/app.js', 'public/js')
            .extract(['jquery', 'vue']);
    </code>
</pre>

<div class="alert alert-info text-center">
    The <code>extract</code> method will compile all specified libraries to <code>public/js/vendor.js</code> so that it can be included in your layout file separately, and cached by the browser. 
    <br>
    See the docs <a href="https://laravel.com/docs/5.4/mix#vendor-extraction">here</a>.
</div>




@endsection
