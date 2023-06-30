<div>
    <li class="align-self-start btn btn-dark py-2 w-auto relative">
        <a href="{{ route('cart') }}">
            <div class="position-relative">
                <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                <span class="position-absolute top-0 end-0 translate-middle badge rounded-pill bg-warning">
                    {{ $cartTotal }}
                </span>
            </div>
        </a>
    </li>
</div>
