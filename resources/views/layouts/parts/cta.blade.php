<section class="bg-primary text-white py-5">
      <div class="container text-center">
        <h2 class="mb-4">{{ $title }}</h2>
        <p class="lead mb-4">
          {{ $desc }}
        </p>
        <a href="{{ $buttonurl ?? '/contact' }}" class="btn btn-light btn-lg">{{ $btntext }}</a>
      </div>
    </section>