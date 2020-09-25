<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <title>GET</title>
    </head>
    <body>
      <!--form action="form-get"-->
      <form action="{{ route('form-get') }}">
        <input type="text"name="search">
        <input type="submit" value="ENVIAR">
      </form>
    </body>
</html>
