@extends("layouts.app")

@include("layouts.parts.nav", [
    "active" => "home"
  ])

@section("content")
<!-- Hero Section -->
    <section class="hero-section text-white text-center py-5">
      <div class="container">
        <div class="row align-items-center min-vh-100">
          <div class="col-lg-12">
            <h1 class="display-3 fw-bold mb-4">Welcome to MarketPro Agency</h1>
            <p class="lead mb-5">Your Partner in Digital Growth and Success</p>
            <a href="services.html" class="btn btn-primary btn-lg me-3"
              >Our Services</a
            >
            <a href="contact.html" class="btn btn-outline-light btn-lg"
              >Get Started</a
            >
          </div>
        </div>
      </div>
    </section>

    <!-- Services Overview -->
    <section class="py-5">
      <div class="container">
        <h2 class="text-center mb-5">Our Services</h2>
        <div class="row g-4">
          <!-- column start -->
            @include("layouts.parts.ourservices", [
              "icon" => "search",
              "title" => "SEO Optimization",
              "desc" => "Boost your search rankings and drive organic traffic with our
              expert SEO strategies."  
            ])
          <!-- column end -->
          <!-- column start -->
          @include("layouts.parts.ourservices", [
              "icon" => "share",
              "title" => "Social Media Marketing",
              "desc" => "Engage your audience and build brand awareness across all
              social platforms."  
            ])
          <!-- column end -->
          <!-- column start -->
          @include("layouts.parts.ourservices", [
              "icon" => "graph-up",
              "title" => "PPC Advertising",
              "desc" => "Maximize ROI with targeted pay-per-click campaigns that
              convert."  
            ])
          <!-- column end -->
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    @include("layouts.parts.cta", [
      "title" => "READY TO GROW YOUR BUSINESS?",
      "desc" => "Let's discuess how we can help you achieve your marketing goals.",
      "btntext" => "Contact Us Today",
      "buttonurl" => "/contact"
    ])
@endsection