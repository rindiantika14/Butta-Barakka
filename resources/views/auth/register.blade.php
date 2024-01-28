<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../"/>
		<title>{{ $nama_cv }}</title>
		<meta charset="utf-8" />
		<meta name="description" content="{{ $nama_cv }}" />
		<meta name="keywords" content="{{ $nama_cv }}, App, Web, Aplikasi, Penjualan, Property" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
		@laravelPWA
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Authentication - Sign-up -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Logo-->
				<!-- <a href="../../demo1/dist/index.html" class="d-block d-lg-none mx-auto py-20">
					<img alt="Logo" src="assets/media/logos/default.svg" class="theme-light-show h-25px" />
					<img alt="Logo" src="assets/media/logos/default-dark.svg" class="theme-dark-show h-25px" />
				</a> -->
				<!--end::Logo-->
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
					<!--begin::Wrapper-->
					<div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
						<!--begin::Header-->
						<div class="d-flex flex-stack py-2">
							<!--begin::Back link-->
							<div class="me-2">
								<a href="{{ route('login') }}" class="btn btn-icon bg-light rounded-circle">
									<i class="ki-duotone ki-black-left fs-2 text-gray-800"></i>
								</a>
							</div>
							<!--end::Back link-->
							<!--begin::Sign Up link-->
							<div class="m-0">
								<span class="text-gray-400 fw-bold fs-5 me-2" data-kt-translate="sign-up-head-desc">Already a member ?</span>
								<a href="{{ route('login') }}" class="link-primary fw-bold fs-5" data-kt-translate="sign-up-head-link">Login</a>
							</div>
							<!--end::Sign Up link=-->
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="py-20">
							<!--begin::Form-->
							<form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" data-kt-redirect-url="{{ route('login') }}" method="POST" action="{{ route('register') }}">
                                @csrf
								<!--begin::Heading-->
								<div class="text-start mb-10">
									<!--begin::Title-->
									<h1 class="text-dark mb-3 fs-3x" data-kt-translate="sign-up-title">Create an Account</h1>
									<!--end::Title-->
									<!--begin::Text-->
									<div class="text-gray-400 fw-semibold fs-6" data-kt-translate="general-desc">Get unlimited access now</div>
									<!--end::Link-->
								</div>
								<!--end::Heading-->
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <!--begin::Input group-->
								<div class="fv-row mb-10">
									<input class="form-control form-control-lg form-control-solid" type="text" placeholder="Name" name="name" autocomplete="off" data-kt-translate="sign-up-input-first-name" />
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<input class="form-control form-control-lg form-control-solid" type="email" placeholder="Email" name="email" autocomplete="off" data-kt-translate="sign-up-input-email" />
								</div>
								<!--end::Input group-->
                                <!--begin::Input group-->
								<div class="fv-row mb-10">
									<input class="form-control form-control-lg form-control-solid" type="text" placeholder="No. Telp" name="no_telp" autocomplete="off" data-kt-translate="sign-up-input-no-telp" />
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10" data-kt-password-meter="true">
									<!--begin::Wrapper-->
									<div class="mb-1">
										<!--begin::Input wrapper-->
										<div class="position-relative mb-3">
											<input class="form-control form-control-lg form-control-solid" type="password" placeholder="Password" name="password" autocomplete="off" data-kt-translate="sign-up-input-password" />
											<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
												<i class="ki-duotone ki-eye-slash fs-2"></i>
												<i class="ki-duotone ki-eye fs-2 d-none"></i>
											</span>
										</div>
										<!--end::Input wrapper-->
										<!--begin::Meter-->
										<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
										</div>
										<!--end::Meter-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Hint-->
									<div class="text-muted" data-kt-translate="sign-up-hint">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
									<!--end::Hint-->
								</div>
								<!--end::Input group=-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<input class="form-control form-control-lg form-control-solid" type="password" placeholder="Confirm Password" name="password_confirmation" autocomplete="off" data-kt-translate="sign-up-input-confirm-password" />
								</div>
								<!--end::Input group-->
								<!--begin::Actions-->
								<div class="d-flex flex-stack">
									<!--begin::Submit-->
									<button id="kt_sign_up_submit" class="btn btn-primary" data-kt-translate="sign-up-submit">
										<!--begin::Indicator label-->
										<span class="indicator-label">Submit</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
									<!--end::Submit-->
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Body-->
						<!--begin::Footer-->
						<div class="m-8">
							
						</div>
						<!--end::Footer-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Aside-->
				<!--begin::Body-->
				<div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat" style="background-image: url(assets/media/auth/bg11.png)"></div>
				<!--begin::Body-->
			</div>
			<!--end::Authentication - Sign-up-->
		</div>
		<!--end::Root-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/custom/authentication/sign-up/general.js"></script>
		<script src="assets/js/custom/authentication/sign-in/i18n.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>