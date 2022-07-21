@extends('website.layouts.master')
@section('content')

<main id="products-ranking" class="my-basket">
<div class="container-fluid">
    <div class="row">
    	<div class="col-12">
            <div class="d-flex main-title">
                <div class="title">My Basket</div>
                <div class="icon">
                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img src="{{asset('website/img/cart.png')}}" class="cart"></button>
                </div>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th class="first">Qty</th>
                  <th>Name</th>
                  <th>Images</th>
                  <th>Prices</th>
                  <th class="last"></th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                  // $total_price = 0;
                  ?>
                  {{-- @foreach($carts as $cart) --}}
                  <?php 
                  // $total_price+=$cart->unit_price*$cart->cartQty;
                   ?>
                {{-- <tr>
                    <td class="qty"><input type="number" value="{{$cart->cartQty}}" id="quantity" name="quantity" min="1" max="{{$cart->qty}}" onchange="updateQty({{$cart->crtid}},this.value)"></td>
                    <td class="title">
                      <div class="d-flex product-rank">
                          <div class="detail"><p>{{$cart->title}}</p></div>
                      </div>
                    </td>
                    <td><div class="img-box"><img src="{{asset('products/'.$cart->featured_img)}}"/></div></td>
                    <td class="price"><span>QAR {{$cart->unit_price}}</span></td>
                    <td class="delete"><div class="rmv-icon"><a href="javascript:void(0)" onclick="removecart({{$cart->crtid}})"><img src="{{asset('website/img/delete-product.png')}}"/></a></div></td>
                </tr> --}}
                {{-- @endforeach --}}
               

              </tbody>
              <tfoot>
                <tr>
                    <td colspan="2">Total Price</td>
                    <td></td>
                    {{-- <td>QAR {{$total_price}}</td> --}}
                    <td>QAR <span id="total"></span></td>
                    <td></td>
                </tr>
              </tfoot>    
            </table>
            <div class="d-flex ftr-btn-area">
                <div class="vertical-shake continue-shopping"><a href="javascript:void(0)">Continue Shopping</a></div>
                <div class="d-flex pay-as">
                    <div class="member"><a href="{{route('website.payasmember')}}">Pay as Member</a></div>
                    @if(!Auth::check())
                    <div class="guest"><a href="{{route('website.payasguest')}}">Pay as Guest</a></div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>

</main>

@endsection

@push('otherscript')
<script>
  function showCartContent()
  {
      $("#cover-spin").show();
      $.ajax({
          url:"{{url('cartpagecontent')}}",
          type:"get",
          success:function(res){
            console.log(res.body);
            $("#cover-spin").hide();
            // $(".showcart").html(res);
            $('tbody').html(res.body);
            $('#total').html(res.total);
          }
      })
  }

  function removeCartContent(cartid){
        $("#cover-spin").show();
        var form = new FormData();
        form.append('cartid',cartid);
        $.ajax({
            url:"{{route('website.removedcartProd')}}",
            type:"POST",
            data:form,
            cache:false,
            contentType:false,
            processData:false,
            success:function(res){
                var js_data = JSON.parse(JSON.stringify(res));
                $("#cover-spin").hide();
                if(js_data.status==200){
                    toastr.success('Product removed from cart');
                    showCartContent();
                    headercart();
                }else{
                    toastr.error('something went wrong');
                    return false;
                }
            }
        })
    }

    showCartContent();
</script>
@endpush