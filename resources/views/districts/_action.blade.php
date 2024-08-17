
<div class="actions">
	<a href="{{route('districts.edit',$record->id)}}" class="icons-list">
		<i class="fa fa-edit icon"></i>
	</a>

	<form method="POST" action="{{route('districts.destroy',$record->id)}}" class="d-inline">
		@csrf
		<input type="hidden" name="_method" value="delete">
		<button type="submit" class="btn delete">
			<i class="fa fa-trash-o icon"></i>
		</button>
	</form>
</div>



