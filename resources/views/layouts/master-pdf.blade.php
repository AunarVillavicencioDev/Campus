<!doctype html>

<link href="{{ URL::asset('/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />

@yield('content')
<script src="{{ URL::asset('/assets/libs/html2canvas/html2canvas.js')}}"></script>
<script type="text/javascript">
html2canvas(document.body).then(function (canvas) {
//    document.body.appendChild(canvas);
    document.body.html(canvas);
});
</script>
</html>