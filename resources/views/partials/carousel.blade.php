@section('custom_css')
<style>
  #img-holder {
    background-image: url({{ $product->image  }});
  }
</style>
@endsection
<div class="left-icon">
  @foreach($product->product_attributes as $attribute)
  <div>
    <img onclick="document.getElementById('img-holder').style.backgroundImage = 'url({{$attribute->image}})'" src="{{ $attribute->image }}" id="left-circle">
  </div>
  @endforeach
</div>
<div class="row mt-10">
  <div id="img-holder"></div>

</div>