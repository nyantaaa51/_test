@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
    <h2>Confirm</h2>
</div>
<form class="form" action="/contacts/confirm" method="post">
  @csrf

  <main>
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>Confirm</h2>
      </div>
      <form class="form" action="/contacts" method="post">
        @csrf
        <div class="confirm-table">
          <table class="confirm-table__inner">

            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
                <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly/>
              </td>
            </tr>
              <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
                <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly/>
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header">性別</th>
              <td class="confirm-table__text">
              <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly />
              </td>
            </tr>

            <tr class="confirm-table__row">
              <td class="confirm-table__text">
                <input type="text" name="email" value="{{ $contact['email'] }}" readonly/>
              </td>
            </tr>

            <tr class="confirm-table__row">
              <td class="confirm-table__text">
                <input type="text" name="tel" value="{{ $contact['tel'] }}" readonly/>
              </td>
            </tr>

            <tr class="confirm-table__row">
              <td class="confirm-table__text">
                <input type="text" name="address" value="{{ $contact['address'] }}" readonly/>
              </td>
            </tr>

            <tr class="confirm-table__row">
              <td class="confirm-table__text">
                <input type="text" name="building" value="{{ $contact['building'] }}" readonly/>
              </td>
            </tr>

            <tr class="confirm-table__row">
              <td class="confirm-table__text">
                <input type="text" name="categorie" value="{{ $contact['categorie'] }}" readonly/>
              </td>
            </tr>

            <tr class="confirm-table__row">
              <td class="confirm-table__text">
                <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly/>
              </td>
            </tr>

          </table>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
        </div>
        <div class="correction__link">
          <a class="correction__button-submit" href="/">修正</a>
  </div>
      </form>
    </div>
  </main>
</body>

</html>

