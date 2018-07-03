@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/guest_lists') }}">Guest list</a> :
@endsection
@section("contentheader_description", $guest_list->$view_col)
@section("section", "Guest lists")
@section("section_url", url(config('laraadmin.adminRoute') . '/guest_lists'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Guest lists Edit : ".$guest_list->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($guest_list, ['route' => [config('laraadmin.adminRoute') . '.guest_lists.update', $guest_list->id ], 'method'=>'PUT', 'id' => 'guest_list-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nama')
					@la_input($module, 'pesan')
					@la_input($module, 'email')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/guest_lists') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#guest_list-edit-form").validate({
		
	});
});
</script>
@endpush
