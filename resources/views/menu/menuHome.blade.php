@php $setting_web = json_decode($data['setting']->setting_web,true) @endphp
<div class="panel panel-default">
	<div class="panel-body">
		@if(isset($setting_web['web_logo']))
		<p><img src="{{ asset('public/img/'.$setting_web['web_logo']) }}" class="img-responsive center-block"></p>
		@endif
		<h1><button class="btn-block btn btn-danger">www.taimuihong168.vn</button></h1>
	</div>
</div>