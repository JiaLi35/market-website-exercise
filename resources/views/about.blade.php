@extends("layouts.app")

@section("content")
    <!-- Page Header -->
    @include("layouts.parts.header", [
        "title" => "ABOUT US",
        "desc" => "Meet the Team Behind MarketPro Agency"    
    ])

    <!-- About Section -->
    <section class="py-5">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6">
            <h2 class="mb-4">Our Story</h2>
            <p>
              Founded in 2015, MarketPro Agency has been at the forefront of
              digital marketing innovation. We started with a simple mission: to
              help businesses thrive in the digital age.
            </p>
            <p>
              Over the years, we've grown from a small team of passionate
              marketers to a full-service agency serving clients worldwide. Our
              success is built on our commitment to delivering results, staying
              ahead of industry trends, and treating each client's business as
              our own.
            </p>
            <p>
              Today, we're proud to have helped over 500 businesses transform
              their online presence and achieve sustainable growth.
            </p>
          </div>
          <div class="col-lg-6">
            <img
              src="https://placehold.co/600x400"
              class="img-fluid rounded shadow"
              alt="Our Story"
            />
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-lg-6 order-lg-2">
            <h2 class="mb-4">Our Mission</h2>
            <p>
              To empower businesses with innovative digital marketing strategies
              that drive real results.
            </p>
            <h3 class="mb-3">Our Values</h3>
            <ul>
              <li>
                <strong>Innovation:</strong> We stay ahead of digital trends
              </li>
              <li>
                <strong>Transparency:</strong> Clear communication and honest
                reporting
              </li>
              <li>
                <strong>Results-Driven:</strong> Your success is our success
              </li>
              <li>
                <strong>Collaboration:</strong> We work as an extension of your
                team
              </li>
              <li>
                <strong>Excellence:</strong> We deliver quality in everything we
                do
              </li>
            </ul>
          </div>
          <div class="col-lg-6 order-lg-1">
            <img
              src="https://placehold.co/600x400"
              class="img-fluid rounded shadow"
              alt="Our Mission"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Team Section -->
    <section class="py-5 bg-light">
      <div class="container">
        <h2 class="text-center mb-5">Meet Our Team</h2>
        <div class="row g-4">
          <!-- column start -->
            @include("layouts.parts.teamcard", [
              "name" => "Sarah Johnson",  
              "position" => "CEO & Founder"
            ])
          <!-- column end -->
          <!-- column start -->
          @include("layouts.parts.teamcard", [
              "name" => "Mike Wilson", 
              "position" => "Creative Director"
            ])
          <!-- column end -->
          <!-- column start -->
          @include("layouts.parts.teamcard", [
              "name" => "Emily Chen", 
              "position" => "Head of SEO"
            ])
          <!-- column end -->
          <!-- column start -->
          @include("layouts.parts.teamcard", [
              "name" => "David Brown", 
              "position" => "PPC Specialist"
            ])
          <!-- column end -->
        </div>
      </div>
    </section>

    <!-- Achievements Section -->
    <section class="py-5">
      <div class="container">
        <h2 class="text-center mb-5">Our Achievements</h2>
        <div class="row text-center">
          <!-- column start -->
            @include("layouts.parts.achievements", [
              "class" => "bi-trophy",
              "stats" => "500+",
              "desc" => "Happy Clients"  
            ])
          <!-- column end -->
          <!-- column start -->
          @include("layouts.parts.achievements", [
              "class" => "bi-graph-up",
              "stats" => "150%",
              "desc" => "Average ROI"  
            ])
          <!-- column end -->
          <!-- column start -->
          @include("layouts.parts.achievements", [
              "class" => "bi-award",
              "stats" => "25+",
              "desc" => "Industry Awards"  
            ])
          <!-- column end -->
          <!-- column start -->
          @include("layouts.parts.achievements", [
              "class" => "bi-people",
              "stats" => "50+",
              "desc" => "Team Members"  
            ])
          <!-- column end -->
        </div>
      </div>
    </section>
@endsection