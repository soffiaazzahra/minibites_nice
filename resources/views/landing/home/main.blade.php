<section class="home" id="home">
    <div class="content">
        <h3>Welcome</h3>
        <span>MINIBITES</span>
        <p>A Little Bliss in Every Bite!</p>
    </div>
    <div class="image">
        <img src="{{asset('nice/images/strawberry_cream_cheese-removebg-preview.png')}}" alt="Strawberry Cream Cheese">
    </div>
</section>


 <!-- home section end -->
  <!-- about section starts -->
  <section class="about" id="about">
    <h1 class="heading"> <span> about </span> us </h1>
    <div class="row">
        <div class="video-container">
            <video src="{{asset('nice/images/Snaptik.app_7278215670423145734.mp4')}}" controls autoplay muted loop></video>
            <h3>Pastry Minibites</h3>
        </div>
        <div class="content">
            <h3>Why choose us</h3>
            <p>MiniBites hadir dengan komitmen untuk memberikan pengalaman rasa terbaik melalui produk berkualitas yang dibuat dari bahan pilihan dan diproses secara higienis. Lebih dari sekadar pastry, kami mengutamakan cita rasa otentik yang memanjakan setiap gigitan serta menyajikan variasi rasa yang mengikuti tren dan selera masa kini.</p>
            <p>Dengan resep asli dan inovasi terbaru, MiniBites berusaha menciptakan momen spesial bagi setiap pelanggan kami. Kami memahami bahwa kepuasan pelanggan adalah prioritas utama, sehingga kami selalu menawarkan produk dengan kualitas premium dan layanan yang ramah serta terpercaya. Kami percaya bahwa kelezatan, kualitas, dan nilai tambah produk kami akan membuat MiniBites menjadi pilihan tepat bagi pecinta pastry.</p>
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
