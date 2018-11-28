@extends('layout.app')
@section('content')
<!--<h2>お問い合わせフォーム</h2>-->
<div class="container">
<form action="{{action('ContactController@confirm')}}" method="post">

  {{csrf_field()}}
  <div class="form-group">
    <label for="name">お名前</label><mark class="mark">必須</mark>
    <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control">
  </div>
  <div class="form-group">
    <label for="email">メールアドレス</label>
    <input type="text" name="email" id="email" value="{{old('email')}}" class="form-control">
  </div>
  <div class="form-group">
    <label for="message">お問い合わせ内容</label>
    <textarea name="message" id="message" class="form-control">{{old('message')}}</textarea>
  </div>
  <button type="submit" value="Confirm" class="form-control">内容確認</button>
</form>
</div>
@endsection
