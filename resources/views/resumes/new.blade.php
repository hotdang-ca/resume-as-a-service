<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create New Resume</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
<!-- TODO: make a Blade template -->
    {!! Form::open(['action' => 'ResumesController@store']) !!}
    <div class="form-group">
      {!! Form::label('name', "Your Name:") !!}
      {!! Form::text('name', null, ['class' => 'form-control'] ) !!}
    </div>

    <div class="form-group">
      {!! Form::label('about_me', 'A sentence or two about yourself:') !!}
      {!! Form::textarea('about_me', null, ['class' => 'form-control'] ) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Start My Resume!', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    </div>
    <!-- JQUERY -->
    <script src="/js/jquery.min.js"></script>
    <!-- BOOTSTRAP -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- SCRIPTS -->
    <script src="/js/scripts.js"></script>
  </body>
</html>
