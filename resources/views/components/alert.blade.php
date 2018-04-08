@if(empty($isAlert) || (!empty($isScript)))
<script>
@if(session()->has('success'))
toastr["success"]("{{ __(session()->get('success')) }}", "Success");
@endif
@if ($errors->any())
@foreach($errors->all() as $error)
  toastr["error"]("{{ $error }}", "Error");
@endforeach
@endif
@if(session()->has('error'))
  toastr["error"]("{{ __(session()->get('error')) }}", "Error");
@endif
@if(session()->has('warning'))
  toastr["warning"]("{{ __(session()->get('warning')) }}", "Warning");
@endif
window.lang = {
  'alert': {
    none_selected: "{{ __('alert.none_selected') }}",
  }
};
</script>
@else
@if(session()->has('success'))
<div class="alert alert-success">{{ __(session()->get('success')) }}</div>
@endif
@if(session()->has('warning'))
<div class="alert alert-warning">{{ __(session()->get('warning')) }}</div>
@endif
@if(session()->has('error'))
<div class="alert alert-danger">{{ __(session()->get('error')) }}</div>
@endif
@if(!empty($errors) && $errors->count())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
@endif