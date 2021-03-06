<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="ar-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Blog</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="nav navbar-nav"><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/article') }}">Articles</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>{!! link_to_action('ArticlesController@show', $latest->title, [$latest->id]) !!}</li>
            </ul>
        </div>
    </div>
</nav>