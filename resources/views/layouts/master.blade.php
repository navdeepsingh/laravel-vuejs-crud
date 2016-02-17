<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding with VueJS</title>
    <meta name="token" id="token" value="{{ csrf_token() }}">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container" id="crud-container" xmlns="http://www.w3.org/1999/html">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('crud') }}">Crud Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('crud') }}">View All crud</a></li>
            <li><a href="#" @click="setShowForm">Create a Crud</a>
        </ul>
    </nav>

    @yield('content')

</div>
<script type="text/javascript" src="{{ url::to('js/vendor.js') }}"></script>
<script type="text/javascript" src="{{ url::to('js/script.js') }}"></script>
</body>
</html>