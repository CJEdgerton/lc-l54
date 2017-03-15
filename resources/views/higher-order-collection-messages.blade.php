@extends('main')

@section('content')

<h1>Higher Order Collection Messages</h1>

<pre>
    <code class="php">
        // Perform magic on collection with each method
        // Old
        $posts->each(function($post) {
            $post->archive();
        });

        // New
        $posts->each->archive();
    </code>
</pre>

<hr>
<pre>
    <code class="php">
        // Emulate 'pluck' method using this technique, this time using map method 
        // Old
        $titles = $posts->map(function($post) {
            return $post->title;
        });

        // New
        $posts->map->title;
    </code>
</pre>

<hr>

<p>
    ... Works on many collection methods
    <ul>
        <li><code>contains</code></li> 
        <li><code>each</code></li> 
        <li><code>every</code></li> 
        <li><code>filter</code></li> 
        <li><code>first</code></li> 
        <li><code>map</code></li> 
        <li><code>partition</code></li> 
        <li><code>reject</code></li> 
        <li><code>sortBy</code></li> 
        <li><code>sortByDesc</code></li> 
        <li><code>sum</code></li>
    </ul>

</p>

@endsection
