
@include('headerblade')
<h1>Users blade page</h1>
@include('inner')

{{--
@if($person=="Reshmi")
<h3>Hello {{$person}}</h3>

@elseif($person=="Priya")
<h3>Hello {{$person}}</h3>

@else
<h3>Wrong Person</h3>
@endif

@for($i=0;$i<=10;$i++)
<h3>{{$i}}</h3>
@endfor --}}

@foreach($personall as $item)
<h3>{{$item}}</h3>
@endforeach

@csrf

<script>
    var data = @json($personall);
    console.warn(data[0]);
</script>