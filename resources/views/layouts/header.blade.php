<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- favicon -->
        <link rel="shortcut icon" href="{{('assets/images/favicon.png')}}" type="image/x-icon">
        <!-- bootstrap -->
        <link href="{{('https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="{{('sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT')}}" crossorigin="anonymous">
        <!-- style css -->
        <link rel="stylesheet" href="{{('assets/css/style.css')}}">
        <!-- custom css -->
        <link rel="stylesheet" href="{{('assets/css/custom.css')}}">
        <!-- responsive -->
        <link rel="stylesheet" href="{{('assets/css/responsive.css')}}">
        <!-- owl carousel 2 -->
        <link rel="stylesheet" href="{{('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{('assets/css/owl.theme.default.min.css')}}">

        <title><?php echo $title ?></title>
    <title>{{ $title ?? "ศูนย์สุขภาพแคร์แมท เชียงใหม่" }}</title>

    @yield('style')
</head>
