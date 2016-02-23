<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<!-- menubar -->
<header>
    @include('includes.header')
</header><!-- /header -->
<!-- content -->
<div style="height: 55px">
</div>
<article>
    @yield('content')
</article>

<!-- footer -->
<footer>
    @include('includes.footer')
</footer>
</body>
</html>