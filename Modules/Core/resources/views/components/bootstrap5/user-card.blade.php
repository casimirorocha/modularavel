<div class="card h-100 w-100 shadow w-100 cursor-pointer">
	<a up-href="/profile/Danny" class="text-decoration-none card-title">
		<div class="overflow-hidden position-relative">
			<div class="position-absolute bottom-0 end-0 p-1 z-1 text-end">

				{{-- Match badge --}}
				@if($user['match'])
					<div id="badge-match" class="d-none">
						<span class="badge bg-primary text-white">
							<i class="fa fa-exchange me-1"></i>
							Match
						</span>
					</div>
				@endif

				{{-- User verified badge --}}
				@if($user['online'])
					<div>
						<span class="badge bg-success text-white">
							 <i class="fa fa-check me-1"></i>
							 User verified
						</span>
					</div>
				@endif
			</div>

			{{-- User profile picture --}}
			<img src="{{ $user['img'] }}" class="card-img-top scale-effect" alt="Danny" />
		</div>

		<div class="card-body">

			{{-- User name and age --}}
			<h5 class="card-title fw-bold text-truncate fs-6">
				{{-- User online status --}}
				@if(!$user['online'])
					<small>
						<i class="fa fa-circle me-1 card-text text-success"></i>
					</small>
				@endif Danny, <strong>31</strong>
			</h5>

			<p class="card-text mb-0 text-truncate">
				<small class="text-body-secondary">
					<i class="fa fa-map-marker me-1"></i> São Luís, Maranhão, Brazil
				</small>
			</p>

			<p class="card-text mb-0 text-truncate">
				<small class="text-body-secondary">
					<i class="fa fa-briefcase me-1"></i> Info not set
				</small>
			</p>
		</div>
	</a>

	<div class="card-footer p-0">
		<div class="d-flex flex-column flex-md-row align-items-center justify-content-around">
			<div class="flex items-center justify-center">
				<a role="button" type="submit" href="/chatify/1" onclick="return window.open('https://laradate.test/chatify/1', '_parent')" class="btn btn-link btn-transparent btn-sm fs-2 text-success scale-effect">
					<i class="fa fa-comments me-1"></i>
				</a>
			</div>

			<div class="flex items-center justify-center">
				<form action="/favorite/1" method="POST" up-target="main" up-fail-target="form" up-success-target="main" up-scroll="auto" up-fail-scroll=".errors" tabindex="-1" class="up-focus-hidden">
					<input type="hidden" name="_token" value="nmi6scHwXQHZzYqFKW4OsdX9qSCbUeYUS1CFlLJg" />
					<button role="button" type="submit" class="btn btn-link btn-transparent btn-sm fs-2 text-secondary scale-effect">
						<i class="fa fa-heart me-1"></i>
					</button>
				</form>
			</div>
		</div>
	</div>
</div>
