@extends('admin.admin')

@section("title", "管理画面")
@section('content')
<div class="container">
	<div class="card">
		<div class="card-header">ログイン</div>
		<div class="card-body">
			@if ($errors->any())
			<div style="color:red;" >
			<ul>
				@foreach ($errors->all() as $error)
				<li style="font-size:16px;">{{ $error }}</li>
				@endforeach
			</ul>
			</div>
			@endif
			<form method="post" action="{{ url('admin/login') }}">
				@csrf
				<div>
					<label>ID:</label>
					<input class="form-control" type="text" name="user_id" value="" autocomplete="off"/>
				</div>
				<div>
					<label>PASS:</label>
					<input class="form-control" type="password" name="password" value=""/>
				</div>
				<div class="mt-3">
					<input class="btn btn-primary" type="submit" value="ログイン"/>
				</div>
			</form>

		</div>
	</div>
</div>
<div class="text-center">
	<a href="/" class="btn btn-success">ホームに戻る</a>
</div>
@endsection
