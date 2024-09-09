@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
    <h2>Contact</h2>
</div>
<form class="form" action="/contacts/confirm" method="post">
  @csrf

<div class="form-group">
 <div class="form__group-title">
  <label for="last_name">お名前<span class="form__label--required">※</span></label>
 </div>
 <div class="form__group-content">
    <div class="form__input--text">
    <input type="text" id="last_name"      
    name="last_name" 
    placeholder="例:山田"
    value="{{ old('last_name') }}">
    <input type="text" id="first_name" name="first_name" 
    placeholder="例:太郎"
    value="{{ old('first_name') }}">
    </div>
    <div class="form__error">
    @error('last_name') <span>{{ $message }}</span> @enderror
    @error('first_name') <span>{{ $message }}</span> @enderror
    </div>
 </div>
</div>

    <div class="form__group">
      <div class="form__group-title">
        <label for="gender">性別<span class="form__label--required">※</span></label>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
        <input id="men" type="radio" name="gender" value="1" checked>
        <label for="men" name="gender2" value="男性">男性</label>
        <input id="women" type="radio" name="gender" value="2">
        <label for="women" name="gender2" value="女性">女性</label>
        <input id="other" type="radio" name="gender" value="3">
        <label for="other" name="gender3" value="その他">その他</label>

            <div class="form__error">
            @error('gender') 
            <span>{{ $message }}</span> 
            @enderror
            </div>
        </div>
        </div>

    <div class="form__group">
       <div class="form__group-title">
        <label for="email">メールアドレス<span class="form__label--required">※</span></label>
        </div>
         <div class="form__group-content">
         <div class="form__input--text">
            <input type="email" id="email" name="email" 
            placeholder="test@example.com"
            value="{{ old('email') }}">
            </div>
            @error('email') <span>{{ $message }}</span> @enderror
        </div>

    <div class="form__group">
      <div class="form__group-title">
        <label for="tel">電話番号<span class="form__label--required">※</span></label>
      </div>
      <div class="form__group-content">
      <div class="form__input--text">
        <div class="phone-group">
        <input type="text" id="phone_part1" name="phone_part1" 
            placeholder="080"
            value="{{ old('phone_part1') }}" size="4" maxlength="3"> -
            <input type="text" id="phone_part2" name="phone_part2" 
            placeholder="1234"
            value="{{ old('phone_part2') }}" size="5" maxlength="4"> -
            <input type="text" id="phone_part3" name="phone_part3" 
            placeholder="5678"
            value="{{ old('phone_part3') }}" size="5" maxlength="4">
            </div>
            </div>
            <div class="form__error">
            @error('phone_part1') <span>{{ $message }}</span> @enderror
            @error('phone_part2') <span>{{ $message }}</span> @enderror
            @error('phone_part3') <span>{{ $message }}</span> @enderror
            </div>
        </div>
        </div>

    <div class="form__group">
      <div class="form__group-title">         
            <label for="address">住所<span class="form__label--required">※</span></label>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
        <input type="text" id="address" 
            name="address" 
            placeholder="例:東京都渋谷区千駄ヶ谷1—2—3"
            value="{{ old('address') }}">
        </div>
            <div class="form__error">
            @error('address') <span>{{ $message }}</span> @enderror
            </div>
        </div>
        </div>

        <div>
            <label for="building">建物名:</label>
            <input type="text" id="building" 
            name="building" 
            placeholder="例：千駄ヶ谷マンション101"
            value="{{ old('building') }}">
        </div>

        <div class="form__group">
      <div class="form__group-title">
            <label for="categorie">お問い合わせの種類<span class="form__label--required">※</span></label>
            </div>
            <select id="categorie" name="categorie">
              <option value="選択してください">選択してください</option>
              <option value="商品のお届けについて" {{ old('categorie') == '商品のお届けについて' ? 'selected' : '' }}>商品のお届けについて</option>
              <option value="商品の交換について" {{ old('categorie') == '商品の交換ついて' ? 'selected' : '' }}>商品の交換について</option>
              <option value="商品トラブル" {{ old('categorie') == '商品トラブル' ? 'selected' : '' }}>商品トラブル</option>
              <option value="ショップへのお問い合わせ" {{ old('categorie') == 'ショップへのお問い合わせ' ? 'selected' : '' }}>ショップへのお問い合わせ</option>
              <option value="その他" {{ old('categorie') == 'その他' ? 'selected' : '' }}>その他</option>
            </select>
            <div class="form__error">
            @error('categorie') <span>{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="form__group">
      <div class="form__group-title">
            <label for="detail">お問い合わせ内容<span class="form__label--required">※</span></label>
        </div>
        <div class="form__group-content">
        <div class="form__input--textarea">
            <textarea id="detail" name="detail"
            placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
            <div class="form__error">
            @error('detail') <span>{{ $message }}</span> @enderror
            </div>
        </div>
        </div>
    
         <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
@endsection