@extends('layouts.bootstrap5')

@section('content')
	<header id="header-user" class="sticky-top">
		<div class="bg-pattern ">
			<div class="container">
				<div class="d-flex flex-wrap align-items-center justify-content-between py-2">
					<a class="navbar-brand fs-2 fw-bold mx-0" href="/auth/dashboard">
						<i class="fa fa-heart text-secondary mx-1"></i> Laravel
					</a>

					<ul class="nav nav-pills d-none d-md-flex col-12 col-md-auto justify-content-center">
						<li class="nav-item">
							<a class="nav-link position-relative active up-current" href="/auth/dashboard" aria-current="page">
								<i class="fa fa-users"></i> Browse    </a>
						</li>
						<li class="nav-item">
							<a class="nav-link position-relative " href="/conversations">
								<i class="fa fa-comments"></i> Messages     </a>
						</li>
						<li class="nav-item">
							<a class="nav-link position-relative " href="/visitors">
								<i class="fa fa-eye"></i> Visitors             <span class="position-absolute top-0 translate-middle badge rounded-pill bg-secondary">11</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link position-relative " href="/favorited-me">
								<i class="fa fa-heart"></i> Favorites     </a>
						</li>
					</ul>

					<div class="col-auto text-end d-flex gap-2">
						<a href="#!" class="btn btn-secondary rounded-pill">
							<small><i class="fa fa-diamond"></i> Be Premium</small>
						</a>

						<div class="dropdown">
							<a up-follow="false" href="#" class="d-block link-light text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
								<img src="https://laradate.test/img/uploads/W6NC7ijZgzVf14h8bqVzlN1tR0JcwOSWypk6lA54.jpg?p=tiny&s=5674f5ddcf8055153b1921218627968e" alt="Loirinha" width="35" height="35" class="rounded-circle">
							</a>
							<ul class="dropdown-menu text-small shadow">
								<li>
									<a class="dropdown-item " href="/profile/Loirinha">
										<i class="me-2 fa fa-user"></i> View my profile            </a>
								</li>
								<li>
									<a class="dropdown-item " href="/profile/Loirinha/edit">
										<i class="me-2 fa fa-edit"></i> Edit my profile            </a>
								</li>
								<li>
									<a class="dropdown-item " href="/photos">
										<i class="me-2 fa fa-image"></i> Manage my photos            </a>
								</li>
								<li>
									<a class="dropdown-item " href="/verify">
										<i class="me-2 fa fa-check"></i> Verify profile            </a>
								</li>
								<li>
									<a class="dropdown-item d-flex align-items-center justify-content-between " href="/support">
										<span><i class="me-2 fa fa-question-circle"></i> Need help?</span>             </a>
								</li>
								<li>
									<a class="dropdown-item " href="/settings">
										<i class="me-2 fa fa-cogs"></i> Settings            </a>
								</li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li>
									<a class="dropdown-item" href="/admin/dashboard">
										<i class="me-2 fa fa-bar-chart"></i> Admin panel                </a>
								</li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li>
									<a class="dropdown-item" href="#" onclick="document.getElementById('logout-form').submit();">
										<i class="me-2 fa fa-sign-out"></i> Logout            </a>
									<form id="logout-form" action="/logout" method="POST" class="d-none">
										<input type="hidden" name="_token" value="nmi6scHwXQHZzYqFKW4OsdX9qSCbUeYUS1CFlLJg">            </form>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-pattern-black has-nav-tabs pt-2">
			<div class="container">
				<ul class="nav nav-tabs justify-content-around justify-content-md-start">
					<li class="nav-item">
						<a href="/auth/dashboard" class="nav-link active fw-bold up-current" aria-current="page">
							<i class="fa fa-list me-1"></i>
							<span>All</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('new.users') }}" class="nav-link text-body-tertiary">
							<i class="fa fa-history me-1"></i>
							<span>New</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('search.users') }}" class="nav-link text-body-tertiary">
							<i class="fa fa-search me-1"></i>
							<span>Search</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</header>
	<main>
		<div class="container py-3">
			{{ $slot }}
		</div>
	</main>
	<footer class="py-4">
		<ul class="nav justify-content-center border-bottom pb-3 mb-3">
			<li class="nav-item mx-2">
				<a class="nav-link   px-2 text-muted " href="https://laradate.test">Home</a>
			</li>
			<li class="nav-item mx-2">
				<a class="nav-link px-2 text-muted up-current active" href="#!" aria-current="page">About</a>
			</li>
			<li class="nav-item mx-2">
				<a class="nav-link px-2 text-muted up-current active" href="#!" aria-current="page">Terms</a>
			</li>
			<li class="nav-item mx-2">
				<a class="nav-link px-2 text-muted up-current active" href="#!" aria-current="page">Privacy</a>
			</li>
			<li class="nav-item mx-2">
				<a class="nav-link px-2 text-muted up-current active" href="#!" aria-current="page">Blog</a>
			</li>
		</ul>
		<p class="text-center text-muted mb-0">© 2025 Laravel - All Right Reserved</p>
	</footer>
@endsection
