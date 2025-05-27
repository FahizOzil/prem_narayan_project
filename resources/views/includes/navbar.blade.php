<nav id="navbar">
    <div class="nav-container">
        <a href="{{  route('home')  }}" class="logo">Damn <span>Straight</span></a>
        <ul class="nav-links">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('book')  }}">The Book</a></li>
            <li><a href="{{ route('about-us')  }}">The Author</a></li>
            <li><a href="{{ route('buy')  }}">Buy Now</a></li>
            <li><a href="{{ route('contact-us')  }}">Contact</a></li>
        </ul>
        <div class="mobile-menu" id="mobile-menu">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</nav>