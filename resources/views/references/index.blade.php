<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div>
      <ul>
        @foreach ($references as $reference)
          <li>{{ $reference->content }}</li>
        @endforeach
      </ul>
    </div>
  </body>
</html>
