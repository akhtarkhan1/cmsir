<nav class="navbar navbar-expand-lg navigation" id="navbar">
    <div class="container">
            <a class="navbar-brand" href="{{route('frontend.index')}}">
            <img src="{{ asset('theme/images/logo.png') }}" alt="Indian Logo" height="120" width="120" class="img-fluid">
            </a>

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icofont-navigation-menu"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarmain">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
            <a class="nav-link" href="{{route('frontend.index')}}">Home</a>
            </li>
            @if(empty(auth()->user()->name))
                <li class="nav-item"><a class="nav-link" href="{{route('frontend.about')}}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('frontend.auth.login')}}">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('frontend.auth.register')}}">Register</a></li>
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Crew Info</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown02">
						<li><a class="dropdown-item" href="{{route('frontend.crew-schedule')}}">Crew Schedule</a></li> 
                        <li><a class="dropdown-item" href="{{route('frontend.crew-status')}}">Crew Status</a></li>
                        <li><a class="dropdown-item" href="#">Attendance Details</a></li>
					</ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('frontend.training')}}">Training</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Other Services</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown02">
						<li><a class="dropdown-item" href="{{route('frontend.vacation')}}">Vacation</a></li>
						<li><a class="dropdown-item" href="#">Best Service Reward</a></li>
                        <li><a class="dropdown-item" href="{{route('frontend.medical')}}">Medical</a></li>
                        <li><a class="dropdown-item" href="#">Promotion</a></li>
					</ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown02" data-toggle="dropdown" href="{{route('frontend.photoGallery')}}">Photo Gallery</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown02">
						<li><a class="dropdown-item" href="#">Loco Pilot</a></li>
						<li><a class="dropdown-item" href="#">Assistant Loco Pilot</a></li>
                        <li><a class="dropdown-item" href="#">Guard</a></li>
                        <li><a class="dropdown-item" href="#">Shunters</a></li>
                        <li><a class="dropdown-item" href="#">Train Type</a></li>
                        <li><a class="dropdown-item" href="#">Train Parts</a></li>
					</ul>
                </li>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Logout</a></li>
                
            @endif
            <li class="nav-item"><a class="nav-link" href="{{route('frontend.contact')}}">Contact</a></li>
        </ul>
        </div>
    </div>
</nav>