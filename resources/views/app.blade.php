<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>L5Blog</title>
  <link href="/css/app.css" rel="stylesheet">
</head>
<body>
  <header>
    <h1>L5Blog</h1>
    <nav>
      <ul>
        <li><a href="/">一覧</a></li>
        <li><a href="/articles/create">新規作成</a></li>
      </ul>
    </nav>
  </header>

  <div class="container">
      <div class="row">
        <div class="col-md-12">
          @yield('content')
        </div>
      </div>
  </div>
</body>
</html>
