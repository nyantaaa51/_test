<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fashionably Late</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
  <header class="header">
    <div class="header__inner">
    <a class="header__logo" href="/">
      Fashionably Late
    </a>
    </div>
    <nav class="header-nav">
      @if (Auth::check())
      <ul class="header-nav-list">
      <li class="header-nav-item"><a href="/login">logout</a></li>
      @endif
      </ul>
    </nav>
  </header>
@section('title', 'admin.blade.php')

@section('content')

<form class="form" action="/logout" method="post">
    @csrf
<table>

<form class="search-form">
<div class="search-form__item">
  <input class="search-form__item-input" type="text" />
    <select class="search-form__item-select">
      <option value="">性別</option>
    </select>
    <select class="search-form__item-select">
      <option value="">お問い合わせの種類</option>
    </select>
    <select class="search-form__item-select">
      <option value="">年月日</option>
    </select>
  </div>
  <div class="search-form__button">
    <button class="search-form__button-submit" type="submit">検索</button>
  </div>
</form>

  <tr>
    <th>お名前</th>
    <th>お名前</th>
    <th>性別</th>
    <th>メールアドレス</th>
    <th>電話番号</th>
    <th>住所</th>
    <th>建物名</th>
    <th>お問い合わせの種類</th>
    <th>お問い合わせ内容</th>

  </tr>
  @foreach ($contacts as $contact)
  <tr>
    <td>{{$contact->first_name}}</td>
    <td>{{$contact->last_name}}</td>
    <td>{{$contact->gender}}</td>
    <td>{{$contact->email}}</td>
    <td>{{$contact->tell}}</td>
    <td>{{$contact->address}}</td>
    <td>{{$contact->building}}</td>
    <td>{{$contact->categories}}</td>
    <td>{{$contact->detail}}</td>
  </tr>
  @foreach ($admins as $admin)
  <tr>
    <td>
      {{$admin->getDetail()}}
    </td>
  </tr>
  @endforeach
</table>
{{ $admins->links() }}
@endsection