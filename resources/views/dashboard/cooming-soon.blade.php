
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>{{env('APP_NAME')}}</title>

        <!-- App css -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/icons.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="account-pages-bg">

        <!-- HOME -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12 text-center">

                        <div class="home-wrapper">
                            <img src="{{asset('assets/images/diamond.gif')}}" width="150">
                            <h2 class="text-danger">Stay tunned, we're launching very soon</h2>
                            <p class="text-muted">We're making the system more awesome.we'll be back shortly.</p>
                            <a  href="{{route('dashboard')}}" class="btn btn-primary">Home</a>
                        </div>

                    </div>
                </div>

            </div>
          </section>
          <!-- END HOME -->

        <script>
            var resizefunc = [];
        </script>
        <script>
            $(document).ready(function () {

                "use strict";

                //Set your date
                $('#count-down').countDown({
                    targetDate: {
                        'day': 22,
                        'month': 7,
                        'year': 2020,
                        'hour': 7,
                        'min': 7,
                        'sec': 7
                    },
                    omitWeeks: true
                });

            });
        </script>

    </body>

<!-- Mirrored from coderthemes.com/zircos/layouts/material-design/extras-coming-soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jun 2019 00:55:49 GMT -->
</html>