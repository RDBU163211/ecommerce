
@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __(' store_keeper') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('store_keeper/register') }}"
 >
 @csrf
 <div class="form-group row">
 <label for="s_name" class="col-md-4 col-formlabel text-md-right">{{ __('s_name') }}</label>
 <div class="col-md-6">
 <input id="s_name" type="text" class="formcontrol @error('s_name') isinvalid @enderror" name="s_name" value="{{ old('s_name') }}" required autocomplete="s_
name" autofocus>
 @error('s_name')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="s_fname" class="col-md-4 col-formlabel text-md-right">{{ __('s_fname') }}</label>
 <div class="col-md-6">
 <input id="s_fname" type="text" class="formcontrol @error('s_fname') isinvalid @enderror" name="s_fname" value="{{ old('s_fname') }}" required autocomplete
="s_fname">
 @error('s_fname')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="s_name" class="col-md-4 col-formlabel text-md-right">{{ __('s_name') }}</label>
 <div class="col-md-6">
 <input id="s_name" type="text" class="formcontrol @error('s_name') isinvalid @enderror" name="s_name" value="{{ old('s_name') }}" required autocomplete="s_
name" autofocus>
 @error('s_name')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 
 <div class="form-group row">
 <label for="s_sex" class="col-md-4 col-formlabel text-md-right">{{ __('s_sex') }}</label>
 <div class="col-md-6">
 <input id="s_sex" type="text" class="formcontrol @error('price') isinvalid @enderror" name="s_sex" value="{{ old('s_sex') }}" required autocomplete
="s_sex">
 @error('s_sex')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="s_brithdate" class="col-md-4 col-formlabel text-md-right">{{ __('s_brithdate') }}</label>
 <div class="col-md-6">
 <input id="s_brithdate" type="text" class="formcontrol @error('s_brithdate') isinvalid @enderror" name="s_brithdate" value="{{ old('s_brithdate') }}" required autocomplete
="s_brithdate">
 @error('s_brithdate')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="s_email" class="col-md-4 col-formlabel text-md-right">{{ __('s_email') }}</label>
 <div class="col-md-6">
 <input id="s_email" type="text" class="formcontrol @error('s_email') isinvalid @enderror" name="s_email" value="{{ old('s_email') }}" required autocomplete="s_email" autofocus>
 @error('s_email')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="s_phone" class="col-md-4 col-formlabel text-md-right">{{ __('s_phone') }}</label>
 <div class="col-md-6">
 <input id="s_phone" type="integer" class="formcontrol @error('s_phone') isinvalid @enderror" name="s_phone" value="{{ old('s_phone') }}" required autocomplete="s_phone" autofocus>
 @error('s_phone')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>

 <div class="form-group row mb-0">
 <div class="col-md-6 offset-md-4">
 <button type="submit" class="btn btn-primary">
 {{ __('Register') }}
 </button>
 </div>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection