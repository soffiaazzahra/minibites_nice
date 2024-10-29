<section class="home" id="home">
    <div class="content">
        <h3>Welcome</h3>
        <span>MINIBITES</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic animi adipisci rem. Facilis, dolores iure est tempora fugit voluptatum molestias vitae perspiciatis, obcaecati pariatur molestiae ipsam quos veniam non eaque?</p>
    </div>
    <div class="image">
        <img src="{{asset('nice/images/strawberry_cream_cheese-removebg-preview.png')}}" alt="Strawberry Cream Cheese">
    </div>
</section>


 <!-- home section end -->
  <!-- about section starts -->
  </section>
   <section class="about" id="about">
    <h1 class="heading"> <span> about </span> us </h1>
    <div class="row">
        <div class="video-container">
    <video src="{{asset('nice/images/Snaptik.app_7278215670423145734.mp4')}}">
    <h3>Pastry Minibites</h3>
    </div>
    <div class="content">
        <h3>Why choose us</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui sed, consectetur tempore autem perspiciatis aspernatur repellendus animi quos dolorem delectus omnis error reiciendis doloremque velit soluta doloribus? Unde, quos aspernatur.</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti hic aspernatur optio alias eum aliquam quas perferendis nobis asperiores. At cumque nulla perferendis laborum deserunt. A voluptatibus porro optio aspernatur.</p>
    <a href="#" class="btn">learn more</a>
    </div>
</div>

   </section>
   <!-- about section ends -->

   <!-- menu section starts -->
   <section class="menu" id="menu">
    <h1 class="heading">Latest <span>products</span></h1>
    <div class="box-container">
        @foreach($products as $product)
        <div class="box">
            <div class="image">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->nama }}" width="300" height="auto">

                {{-- <div class="icons">
                    <!-- Tombol Love -->
                    <a href="#" class="btn-icon fas fa-heart"></a>

                    <!-- Tombol Add to Cart -->
                    <form action="{{ route('cart.add', $product->id) }}" method="POST" id="add-to-cart-{{ $product->id }}">
                        @csrf
                    </form>
                    <!-- Ikon Add to Cart, klik ini akan memicu form submit -->
                    <a href="#" class="btn-icon fas fa-shopping-cart" onclick="event.preventDefault(); document.getElementById('add-to-cart-{{ $product->id }}').submit();"></a>
                </div> --}}
            </div>

            <div class="content">
                <h3>{{ $product->nama }}</h3>
                <h6>{{ $product->deskripsi }}</h6>
                <div class="price">Rp {{ number_format($product->harga, 3, '.', '.') }}</div>
            </div>
        </div>
        @endforeach
    </div>
</section>

    <!-- menu section ends -->

        <section class="contact" id="contact">
            <h1 class="heading"> <span> contact </span> us </h1>
        <div class="row">
            <form action="">
                <input type="text" placeholder="name" class="box">
                <input type="email" placeholder="email" class="box">
                <input type="number" placeholder="number" class="box">
                <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="send message" class="btn">
            </form>
            <div class="image">
                <img src="images/" alt="">
        </div>
        </section>
        <!-- contact section ends -->
