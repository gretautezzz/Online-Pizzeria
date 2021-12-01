@if(!isset($pageData->hideMiniCart))
<ul class="list-group mini-cart">
    @forelse($pageData->cart as $cartProduct)
    <li class="list-group-item">
        <div class="mini-cart-product">
            <img src="{{$cartProduct->photo}}" alt="">
            <h5>{{$cartProduct->title}}</h5>
            <h6>{{$cartProduct->price}} </h6>
            <h6>x {{$cartProduct->count}} </h6>
            <form action="{{route('cart.remove', $cartProduct)}}" method="POST">
                <button type="submit">
                    <svg>
                        <use xlink:href="#bin"></use>
                    </svg>
                </button>
                @csrf
            </form>
        </div>
    </li>
    @empty
    <div class="list-group-item"> Cart is empty</div>
    @endforelse
    <li class="list-group-item">
        <h4>Total: {{$pageData->cartTotal}} Eur</h4>
    </li>
</ul>
@endif
