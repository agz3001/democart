@extends('admin.admin')

@section("title", "管理画面TOP")
@section('content')
<div class="container">
	<div class="card">
		<div class="card-header">管理側TOP</div>
		<div class="card-body">
			<div>
				<a href="{{ url('admin/accepted_orders') }}" class="btn btn-success">受注記録</a>
				<a href="{{ url('admin/user_list') }}" class="btn btn-primary">ユーザー一覧</a>
				<form method="post" action="{{ url('admin/logout') }}">
					@csrf
					<input type="submit" class="btn btn-danger" value="ログアウト" />
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
