<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>LaraBook</title>

        <!-- Bootstrap -->
        <link href="{{ asset("/css/bootstrap.min.css") }}" rel="stylesheet">
    </head>
    <body>

        <div class="" style="height: 80px; width: 100%; background-color: #f5f5f5;border: solid #ddd 2px;margin-bottom: 5px; text-align: center; ">
            <p style=" line-height: 80px">LaraBook</p>
        </div>
        <div class="container">
           <div class="row">
             <div class="col-md-3"></div>
              <div class="col-md-6">
                  @yield('content')
              </div>
             <div class="col-md-3"></div>
            </div> 
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset("/js/jquery-3.1.0.min.js") }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset("/js/bootstrap.min.js") }}"></script>
        @yield('scripts')

    </body>
</html>

