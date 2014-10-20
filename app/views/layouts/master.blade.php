<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> App Template </title>
    <style type="text/css">

        body {
            background-image: url('/img/stardust.png');
        }

        .container {
            margin: 50px 30px 30px 50px;
        }

        .bordered {
            border: solid black 1px;
        }

        .header {
            height: 200px;
            font-size: 128px;
            text-indent: 30px;
            background-color: white;
        }

        .sidebar {
            height: 700px;
            font-size: 18px;
            background-color: white;
        }

        .sidebar>ul {
            margin-top: 20px;
            list-style: none;
        }

        .sidebar>ul>li {
            margin-bottom: 10px;
            border: solid black 1px;
            text-align: center;
            position: relative;
            right: 20px;
        }

        .main-content {
            height: 700px;
            font-size: 18px;
            background-color: white;
        }

        .footer {
            height: 70px;
            font-size: 18px;
            background-color: white;
        }

        @yield('css')

    </style>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>


  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 img-rounded header bordered">
                Projects
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 img-rounded sidebar bordered">
                <ul>
                    <li><a href="/todo_list">Todo List</a></li>
                    <li>Address Book</li>
                    <li>Time Tracker</li>
                    <li>Hangman</li>
                    <li>BlackJack</li>
                    <li>Crossword</li>
                </ul>
            </div>
            <div class="col-md-9 img-rounded main-content bordered">
                @yield('content')
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 img-rounded footer bordered">FOOTER</div>
        </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        /* Set class img-rounded on all li in sidebar */
        $('li').addClass('img-rounded', 'btn btn-default');
    </script>

    @yield('bottomscript')

  </body>
</html>