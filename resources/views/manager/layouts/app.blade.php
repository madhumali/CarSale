<!DOCTYPE html>
<html lang="en">
<head>
    @include('manager.layouts.head')
    <title>RPNcarsale-Manager Panel</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include('manager.layouts.navbar')
        @include('manager.layouts.sidebar')
        @section('content')
            @show
        @include('manager.layouts.footer')
    </div>
</body>
</html>