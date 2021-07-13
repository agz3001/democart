@extends('admin.admin')

@section("title", "ユーザー一覧")
@section('content')
<div class="container">
	<div class="card">
		<div class="card-header">ユーザー一覧</div>
		<div class="card-body">

			<ul class="list-group">
				@foreach ($user_list as $user)
				<li class="list-group-item">
					<a href="{{ url('admin/user/' . $user->id) }}">
						{{ $user->name }}
					</a>
				</li>
				@endforeach
			</ul>

			<div class="mt-3">
				{{ $user_list->links() }}
			</div>

		</div>
	</div>
</div>
<div style="text-align:center;"><a href="javascript:history.back()" class="btn btn-success">戻る</a></div>
@endsection
