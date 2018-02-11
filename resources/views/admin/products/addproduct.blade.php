<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
	<form class="" method="POST" action="{{ url('/admin/products') }}">
		{{ csrf_field() }}

		<div class="row" style="width: 500px; margin: 50px auto;">
			<div>
				<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					<input id="name" type="text" name="name" class="form-control" placeholder="სახელი" value="{{ old('name') }}" required autofocus>
					@if ($errors->has('name'))
					<span class="help-block">
						<strong>{{ $errors->first('name') }}</strong>
					</span>
					@endif
				</div>
				<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
					<input id="image" type="text" name="image" class="form-control" placeholder="ფოტო" value="{{ old('image') }}" required autofocus>
					@if ($errors->has('image'))
					<span class="help-block">
						<strong>{{ $errors->first('image') }}</strong>
					</span>
					@endif
				</div>
				<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					<input id="seen" type="text" name="seen" class="form-control" placeholder="ნახვა" value="{{ old('seen') }}">
					@if ($errors->has('seen'))
					<span class="help-block">
						<strong>{{ $errors->first('seen') }}</strong>
					</span>
					@endif
				</div>
				<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					<input id="ingredients" type="text" name="ingredients" class="form-control" placeholder="ინგრედიენტები" value="{{ old('ingredients') }}">
					@if ($errors->has('ingredients'))
					<span class="help-block">
						<strong>{{ $errors->first('ingredients') }}</strong>
					</span>
					@endif
				</div>

			</div>
			<button>გაგზავნა</button>
		</div>

		
	</form>
</body>
</html>