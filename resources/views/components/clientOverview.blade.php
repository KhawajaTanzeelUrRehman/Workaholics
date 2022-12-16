<div class="about-author">
    <img src={{$clientImg}} alt="" class="img-fluid">
</div>
<h4 class="mb-0 mt-4">{{$clientName}}</h4>
<p>{{$desc}}</p>

@foreach ($attrs as $key=>$value)
<div class="row">
    <div class="col-6 text-end">
        <h5>{{$key}}: </h5>
    </div>
    <div class="col-6 text-start">
        <p>{{$value}}</p>
    </div>
</div>
@endforeach