<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="msapplication-config" content="none">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="">
	<title>Obocas Admin</title>
    <!-- favicon Icon -->
    <link rel="shortcut icon" href="{{ asset("/hotel-admin/assets/images/favicon.png") }}" type="image/png" />
	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/bootstrap-v3.min.css") }}">
	<!-- Bootstrap v5.0.0-beta3 -->
	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/bootstrap.min.css") }}">
	<!-- font awesome -->
	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/all.min.css") }}">


	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/style.min.css") }}">

	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/pages/facilities-services.min.css") }}">
	

</head>

<body>


	<div id="main-container" class="container-fluid tfa_phone_alt container-fluid--color">

		<main id="content" class="main">
			<div class="page-body">








				<div class="">



					<!-- Header -->
					<header class="ext-header ext-header--animated">

						<!-- Header Top -->
						<div class="ext-header__container">
							<section class="ext-header__logo-container">
								<a href="{{ url("#") }}">
									<img src="{{ asset("/hotel-admin/assets/images/logo.png") }}" alt="Logo" class="ext-header__logo">
								</a>
								<div data-test-id="property-details" class="ext-header__property-details">
									time squers - 7962700
								</div>
							</section>
							<div class="ext-header__side-items">
								<div class="ext-search__bar">
									<button class="ext-search-trigger ext-search-trigger--md-hidden">
										<svg height="20" fill="currentColor" viewBox="0 0 24 24" role="presentation"
											focusable="false" width="20" aria-hidden="true"
											class="ext-search-trigger__icon bk-icon -streamline-magnifying_glass">
											<path
												d="M17.464 6.56a8.313 8.313 0 1 1-15.302 6.504A8.313 8.313 0 0 1 17.464 6.56zm1.38-.586C16.724.986 10.963-1.339 5.974.781.988 2.9-1.337 8.662.783 13.65c2.12 4.987 7.881 7.312 12.87 5.192 4.987-2.12 7.312-7.881 5.192-12.87zM15.691 16.75l7.029 7.03a.75.75 0 0 0 1.06-1.06l-7.029-7.03a.75.75 0 0 0-1.06 1.06z">
											</path>
										</svg>
									</button>
									<div class="ext-search__wrap">
										<div class="ext-search__input-container">
											<div class="ext-search-input__wrap">
												<input type="text" name="" placeholder="Search for reservations"
													value="" class="ext-search-input">
												<button type="button" class="ext-search-input__icon-wrap">
													<svg viewBox="0 0 24 24" fill="currentColor" height="16"
														aria-hidden="true" width="16" focusable="false"
														role="presentation"
														class="ext-search-input__icon ext-search-input__icon--white bk-icon -streamline-magnifying_glass">
														<path
															d="M17.464 6.56a8.313 8.313 0 1 1-15.302 6.504A8.313 8.313 0 0 1 17.464 6.56zm1.38-.586C16.724.986 10.963-1.339 5.974.781.988 2.9-1.337 8.662.783 13.65c2.12 4.987 7.881 7.312 12.87 5.192 4.987-2.12 7.312-7.881 5.192-12.87zM15.691 16.75l7.029 7.03a.75.75 0 0 0 1.06-1.06l-7.029-7.03a.75.75 0 0 0-1.06 1.06z">
														</path>
													</svg>
												</button>
											</div>
											<a href="{{ url("") }}" class="ext-search-input__cancel-link">
												<span>Cancel</span>
											</a>
										</div>

									</div>
								</div>
								<div class="ext-action-menu__wrap">

									<!-- Dropdown Hotel -->
									<div class="ext-action-menu__item">

										<button class="ext-action-menu__section" type="button" data-bs-toggle="dropdown"
											aria-expanded="false">
											<div class="ext-action-menu__avatar"
												style="background-image: url(assets/images/hotel.jfif);">
											</div>
											<div class="ext-action-menu__text">
												User Photo
											</div>
										</button>

										<div class="ext-action-dropdown__menu dropdown-menu dropdown-menu-end">
											<div class="ext-action-dropdown__content">
												<ul
													class="ext-action-dropdown__content ext-action-dropdown__content--scrollable ext-action-dropdown__content--no-margin-bottom">

													<li class="">
														<a href="{{ url("#") }}"
															class="ext-action-dropdown__item ext-action-property__wrap">
															<div>
																<img src="{{ asset("/hotel-admin/assets/images/hotel.jfif") }}" width="32px"
																	height="32px" class="ext-action-property__avatar">
															</div>
															<div class="ext-action-property__body">
																<div>
																	square hotel
																</div>
																<div>793528</div>
																<div>
																	View your property's listing on Booking.com
																</div>
															</div>
														</a>
													</li>

													<li class="">
														<a href="{{ url("#") }}"
															class="ext-action-dropdown__item ext-action-property__wrap">
															<div>
																<img src="{{ asset("/hotel-admin/assets/images/hotel.jfif") }}" width="32px"
																	height="32px" class="ext-action-property__avatar">
															</div>
															<div class="ext-action-property__body">
																<div>
																	square hotel
																</div>
																<div>
																	7937459
																</div>
															</div>
														</a>
													</li>
												</ul>

												<div class="ext-action-groups-link">
													<a href="{{ url("#") }}"
														class="ext-action-dropdown__item ext-action-property__wrap">
														<div
															class="ext-action-property__avatar ext-action-property__group-icon">
															<svg width="16" height="16" fill="currentColor"
																viewBox="0 0 24 24" role="presentation"
																aria-hidden="true" focusable="false"
																class="bk-icon -streamline-city" slot="icon">
																<path
																	d="M2.75 6h9.5a.25.25 0 0 1-.25-.25v17.5l.75-.75H2.25l.75.75V5.75a.25.25 0 0 1-.25.25zm0-1.5c-.69 0-1.25.56-1.25 1.25v17.5c0 .414.336.75.75.75h10.5a.75.75 0 0 0 .75-.75V5.75c0-.69-.56-1.25-1.25-1.25h-9.5zm3-1.5h3.5A.25.25 0 0 1 9 2.75v2.5l.75-.75h-4.5l.75.75v-2.5a.25.25 0 0 1-.25.25zm0-1.5c-.69 0-1.25.56-1.25 1.25v2.5c0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75v-2.5c0-.69-.56-1.25-1.25-1.25h-3.5zM5.25 9h4.5a.75.75 0 0 0 0-1.5h-4.5a.75.75 0 0 0 0 1.5zm0 3h4.5a.75.75 0 0 0 0-1.5h-4.5a.75.75 0 0 0 0 1.5zm0 3h4.5a.75.75 0 0 0 0-1.5h-4.5a.75.75 0 0 0 0 1.5zm0 3h4.5a.75.75 0 0 0 0-1.5h-4.5a.75.75 0 0 0 0 1.5zm0 3h4.5a.75.75 0 0 0 0-1.5h-4.5a.75.75 0 0 0 0 1.5zM7.5.75v1.5a.75.75 0 0 0 1.5 0V.75a.75.75 0 0 0-1.5 0zM15.75 24h6a.75.75 0 0 0 .75-.75V10.5A1.5 1.5 0 0 0 21 9h-4.5a1.5 1.5 0 0 0-1.5 1.5v12.75a.75.75 0 0 0 1.5 0V10.5H21v12.75l.75-.75h-6a.75.75 0 0 0 0 1.5zM19.5 8.25v1.5a.75.75 0 0 0 1.5 0v-1.5a.75.75 0 0 0-1.5 0zM.75 24h22.5a.75.75 0 0 0 0-1.5H.75a.75.75 0 0 0 0 1.5z">
																</path>
															</svg>
														</div>
														<div class="ext-action-property__body">
															<span>Go to group home</span>
														</div>
													</a>
												</div>

											</div>
										</div>

									</div>
									<!-- /Dropdown Hotel -->

									<!-- Dropdown Account -->
									<div class="ext-action-menu__item">
										<!-- Toggle Botton -->
										<button class="ext-action-menu__section" type="button" data-bs-toggle="dropdown"
											aria-expanded="false">
											<div class="ext-action-menu__avatar ext-action-menu__avatar--account">
												<svg height="20" viewBox="0 0 24 24" fill="currentColor" width="20"
													aria-hidden="true" role="presentation" focusable="false" slot="icon"
													class="ext-action-menu__avatar--icon bk-icon -streamline-account_user">
													<path
														d="M16.5 9.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0zm1.5 0a6 6 0 1 0-12 0 6 6 0 0 0 12 0zm1.445 10.597c-4.086-4.111-10.732-4.132-14.844-.046l-.046.046a.75.75 0 0 0 1.064 1.058l.04-.04a8.996 8.996 0 0 1 12.722.04.75.75 0 0 0 1.064-1.058zM22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
													</path>
												</svg>
											</div>
											<div class="ext-action-menu__text">
												<span>Account</span>
											</div>
										</button>
										<!-- Toggle Botton -->

										<div class="ext-action-dropdown__menu dropdown-menu dropdown-menu-end">
											<div>
												<ul class="ext-action-dropdown__content">

													<li>
														<a href="{{ url("change-password.html") }}" class="ext-action-dropdown__item">
															<span>
																<svg width="20" height="20" fill="currentColor"
																	viewBox="0 0 24 24" role="presentation"
																	aria-hidden="true" focusable="false"
																	class="ext-action-dropdown__icon bk-icon -streamline-key"
																	slot="icon">
																	<path
																		d="M13.348 15.047l2.545-2.545-.724.194 1.752.47a2.322 2.322 0 0 0 2.843-2.841l-.47-1.753-.195.724.784-.784-.724.194 1.752.47a2.321 2.321 0 0 0 2.842-2.842l-.468-1.752-.195.724A3.106 3.106 0 1 0 18.697.914l-9.741 9.74.823-.16a7.033 7.033 0 1 0 3.73 3.73l-.16.823zm-1.06-1.06a.75.75 0 0 0-.16.823 5.532 5.532 0 0 1-7.254 7.254 5.533 5.533 0 1 1 4.32-10.188.75.75 0 0 0 .822-.16l9.741-9.742a1.606 1.606 0 1 1 2.273 2.272.75.75 0 0 0-.195.724l.47 1.752a.821.821 0 0 1-1.006 1.006l-1.752-.47a.75.75 0 0 0-.724.194l-.784.784a.75.75 0 0 0-.194.724l.47 1.752a.822.822 0 0 1-1.007 1.005l-1.75-.47a.75.75 0 0 0-.725.195l-2.545 2.545zM6.743 18.08a.821.821 0 1 1-1.642 0 .821.821 0 0 1 1.642 0zm1.5 0a2.321 2.321 0 1 0-4.642 0 2.321 2.321 0 0 0 4.642 0z">
																	</path>
																</svg>
																Change password
															</span>
														</a>
													</li>

													<li>
														<a href="{{ url("notification-settings.html") }}" class="ext-action-dropdown__item">
															<span>
																<svg width="20" height="20" fill="currentColor"
																	viewBox="0 0 24 24" role="presentation"
																	aria-hidden="true" focusable="false"
																	class="ext-action-dropdown__icon bk-icon -streamline-bell_normal"
																	slot="icon">
																	<path
																		d="M9.28 21.961a2.837 2.837 0 0 0 5.445 0 .75.75 0 1 0-1.44-.422 1.337 1.337 0 0 1-2.565 0 .75.75 0 1 0-1.44.422zM12.75 3V.75a.75.75 0 0 0-1.5 0V3a.75.75 0 0 0 1.5 0zm-.75.75a6.75 6.75 0 0 1 6.75 6.75c0 3.154.29 5.436.785 6.994.323 1.02.684 1.59.995 1.84L21 18H3l.59 1.212c.248-.315.572-.958.88-2 .49-1.66.78-3.872.78-6.712A6.75 6.75 0 0 1 12 3.75zm0-1.5a8.25 8.25 0 0 0-8.25 8.25c0 2.702-.272 4.772-.72 6.288-.254.864-.493 1.336-.62 1.5A.75.75 0 0 0 3 19.5h18c.708 0 1.022-.892.47-1.335.019.016-.008-.015-.07-.113-.14-.223-.29-.553-.435-1.012-.443-1.396-.715-3.529-.715-6.54A8.25 8.25 0 0 0 12 2.25z">
																	</path>
																</svg>
																Notification settings
															</span>
														</a>
													</li>
													
													<li>
														<a href="{{ url("contacts.html") }}" class="ext-action-dropdown__item">
															<span>
																<svg width="20" height="20" fill="currentColor"
																	viewBox="0 0 24 24" role="presentation"
																	aria-hidden="true" focusable="false"
																	class="ext-action-dropdown__icon bk-icon -streamline-group"
																	slot="icon">
																	<path
																		d="M6 6a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm1.5 0a3 3 0 1 0-6 0 3 3 0 0 0 6 0zm-3 3A4.5 4.5 0 0 0 0 13.5v2.25c0 .414.336.75.75.75h1.5l-.744-.657.75 6A.75.75 0 0 0 3 22.5h3A.75.75 0 0 0 6 21H3l.744.657-.75-6A.75.75 0 0 0 2.25 15H.75l.75.75V13.5a3 3 0 0 1 3-3 .75.75 0 0 0 0-1.5zM21 6a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm1.5 0a3 3 0 1 0-6 0 3 3 0 0 0 6 0zm-3 4.5a3 3 0 0 1 3 3v2.25l.75-.75h-1.5a.75.75 0 0 0-.744.657l-.75 6L21 21h-3a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 .744-.657l.75-6-.744.657h1.5a.75.75 0 0 0 .75-.75V13.5A4.5 4.5 0 0 0 19.5 9a.75.75 0 0 0 0 1.5zm-5.25-6.75a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0zm1.5 0a3.75 3.75 0 1 0-7.5 0 3.75 3.75 0 0 0 7.5 0zM18 13.5a6 6 0 0 0-12 0v2.25c0 .414.336.75.75.75H9l-.746-.675.75 7.5A.75.75 0 0 0 9.75 24h4.5a.75.75 0 0 0 .746-.675l.75-7.5L15 16.5h2.25a.75.75 0 0 0 .75-.75V13.5zm-1.5 0v2.25l.75-.75H15a.75.75 0 0 0-.746.675l-.75 7.5.746-.675h-4.5l.746.675-.75-7.5A.75.75 0 0 0 9 15H6.75l.75.75V13.5a4.5 4.5 0 1 1 9 0z">
																	</path>
																</svg>
																Contacts
															</span>
														</a>
													</li>
													
													<li>
														<a href="{{ url("security.html") }}" class="ext-action-dropdown__item">
															<span>
																<svg width="20" height="20" fill="currentColor"
																	viewBox="0 0 24 24" role="presentation"
																	aria-hidden="true" focusable="false"
																	class="ext-action-dropdown__icon bk-icon -streamline-settings"
																	slot="icon">
																	<path
																		d="M9.989 2.94a2.707 2.707 0 0 0 4.022 0l.943-1.035a1.21 1.21 0 0 1 2.107.87l-.071 1.4a2.708 2.708 0 0 0 2.837 2.841l1.401-.071a1.209 1.209 0 0 1 .87 2.105l-1.042.94a2.71 2.71 0 0 0 0 4.022l1.042.94a1.209 1.209 0 0 1-.873 2.104l-1.4-.071a2.708 2.708 0 0 0-2.843 2.843l.071 1.4a1.208 1.208 0 0 1-2.1.866l-.938-1.038a2.709 2.709 0 0 0-4.02 0l-.944 1.04a1.209 1.209 0 0 1-2.102-.87l.072-1.395a2.708 2.708 0 0 0-2.844-2.844l-1.399.071a1.208 1.208 0 0 1-.875-2.102l1.04-.94a2.71 2.71 0 0 0 0-4.022l-1.039-.943a1.208 1.208 0 0 1 .87-2.102l1.397.071a2.708 2.708 0 0 0 2.845-2.85l-.067-1.396a1.209 1.209 0 0 1 2.102-.87l.94 1.037zm1.113-1.005l-.94-1.038A2.71 2.71 0 0 0 5.45 2.845l.067 1.402a1.208 1.208 0 0 1-1.27 1.275l-1.401-.071a2.71 2.71 0 0 0-1.95 4.71l1.04.945a1.21 1.21 0 0 1 .001 1.797l-1.04.94a2.708 2.708 0 0 0 1.957 4.713l1.399-.071a1.208 1.208 0 0 1 1.269 1.268l-.072 1.4a2.709 2.709 0 0 0 4.71 1.951l.945-1.04a1.209 1.209 0 0 1 1.796-.002l.942 1.04a2.71 2.71 0 0 0 4.708-1.946l-.072-1.404a1.208 1.208 0 0 1 1.268-1.269l1.401.071a2.709 2.709 0 0 0 1.954-4.715l-1.043-.94a1.21 1.21 0 0 1 0-1.795l1.042-.941a2.71 2.71 0 0 0-1.949-4.716l-1.401.071a1.208 1.208 0 0 1-1.264-1.267l.071-1.4A2.709 2.709 0 0 0 13.843.897L12.9 1.933a1.207 1.207 0 0 1-1.796.003zM15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0zm1.5 0a5.25 5.25 0 1 0-10.5 0 5.25 5.25 0 0 0 10.5 0z">
																	</path>
																</svg>
																Security
															</span>
														</a>
													</li>
													<li>
														<a href="{{ url("#") }}" class="ext-action-dropdown__item">
															<span>
																<svg width="20" height="20" fill="currentColor"
																	viewBox="0 0 128 128" role="presentation"
																	aria-hidden="true" focusable="false"
																	class="ext-action-dropdown__icon bk-icon -streamline-check_out"
																	slot="icon">
																	<path
																		d="M111.33 66.22c.06-.1.11-.2.16-.3.05-.1.15-.25.21-.39s.08-.27.12-.41c.039-.112.073-.225.1-.34.1-.515.1-1.045 0-1.56a3.352 3.352 0 0 0-.1-.34c0-.14-.07-.28-.12-.41-.05-.13-.14-.26-.21-.39-.07-.13-.1-.2-.16-.3a4.886 4.886 0 0 0-.5-.61l-24-24a4.002 4.002 0 1 0-5.66 5.66L98.34 60H44a4 4 0 0 0 0 8h54.34L81.17 85.17a4.002 4.002 0 1 0 5.66 5.66l24-24c.183-.19.35-.394.5-.61zM44 120h-8c-6.627 0-12-5.373-12-12V20c0-6.627 5.373-12 12-12h8a4 4 0 0 0 0-8h-8C24.954 0 16 8.954 16 20v88c0 11.046 8.954 20 20 20h8a4 4 0 0 0 0-8z">
																	</path>
																</svg>
																Sign out
															</span>
														</a>
													</li>
												</ul>
												
											</div>
										</div>
									</div>
									<!-- /Dropdown Account -->
								</div>
							</div>
						</div>
						<!-- Header Top -->

						<!-- Header Bottom -->
						<div class="ext-header__navigation">
							<nav class="ext-navigation">

								<div data-test-id="mobile-trigger" class="ext-navigation__mobile-trigger">
									<svg height="20" viewBox="0 0 24 24" fill="currentColor" width="20"
										aria-hidden="true" role="presentation" focusable="false"
										class="ext-navigation__mobile-trigger-icon bk-icon -streamline-lines_horizontal">
										<path
											d="M2.25 18.753h19.5a.75.75 0 0 0 0-1.5H2.25a.75.75 0 0 0 0 1.5zm0-6h19.5a.75.75 0 0 0 0-1.5H2.25a.75.75 0 0 0 0 1.5zm0-6h19.5a.75.75 0 0 0 0-1.5H2.25a.75.75 0 0 0 0 1.5z">
										</path>
									</svg>
								</div>

								<div class="ext-navigation__inner">
									<div class="ext-navigation__inner-container">
										<ul class="ext-navigation-top-item__list">

											<!-- Menu Item -->
											<li class="ext-navigation-top-item">
												<a href="{{ url("index.html") }}" class="ext-navigation-top-item__link">
													<span class="ext-navigation-top-item__icon">
														<svg height="24" viewBox="0 0 24 24" fill="currentColor"
															width="24" aria-hidden="true" role="presentation"
															focusable="false" class="bk-icon -streamline-house">
															<path
																d="M3 18v3.75A2.25 2.25 0 0 0 5.25 24h4.5a.75.75 0 0 0 .75-.75v-6a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 .75.75v6c0 .414.336.75.75.75h4.5A2.25 2.25 0 0 0 21 21.75V18a.75.75 0 0 0-1.5 0v3.75a.75.75 0 0 1-.75.75h-4.5l.75.75v-6A2.25 2.25 0 0 0 12.75 15h-1.5A2.25 2.25 0 0 0 9 17.25v6l.75-.75h-4.5a.75.75 0 0 1-.75-.75V18A.75.75 0 0 0 3 18zm-1.72-.97L11.47 6.841a.75.75 0 0 1 1.06 0l10.19 10.19a.75.75 0 1 0 1.06-1.061L13.591 5.78a2.25 2.25 0 0 0-3.182 0L.219 15.97a.75.75 0 1 0 1.061 1.06zm15.97-7.28v-1.5L16.5 9h3.75l-.75-.75v5.25a.75.75 0 0 0 1.5 0V8.25a.75.75 0 0 0-.75-.75H16.5a.75.75 0 0 0-.75.75v1.5a.75.75 0 0 0 1.5 0zM16.522.3l-.407.543a1.793 1.793 0 0 0 .279 2.461c.12.102.14.28.045.406l-.411.548a.75.75 0 1 0 1.2.9l.407-.543a1.793 1.793 0 0 0-.279-2.461.295.295 0 0 1-.045-.406l.411-.548a.75.75 0 1 0-1.2-.9zm3.75 0l-.407.543a1.793 1.793 0 0 0 .279 2.461c.12.102.14.28.045.406l-.411.548a.75.75 0 1 0 1.2.9l.407-.543a1.793 1.793 0 0 0-.279-2.461.295.295 0 0 1-.045-.406l.411-.548a.75.75 0 1 0-1.2-.9z">
															</path>
														</svg>
													</span>
													<span class="ext-navigation-top-item__title">
														<span class="ext-navigation-top-item__title-text">Home</span>
													</span>
												</a>
												<div class="ext-navigation-top-item__submenu"></div>
											</li>
											<!-- /Menu Item -->

											<!-- Menu Item -->
											<li class="ext-navigation-top-item">
												<!-- toggle botton -->
												<button class="ext-navigation-top-item__link dropdown-toggle"
													data-bs-toggle="dropdown" aria-expanded="false">

													<span class="ext-navigation-top-item__icon">
														<svg focusable="false" role="presentation" aria-hidden="true"
															width="24" viewBox="0 0 24 24" fill="currentColor"
															height="24" class="bk-icon -streamline-calendar">
															<path
																d="M22.502 13.5v8.25a.75.75 0 0 1-.75.75h-19.5a.75.75 0 0 1-.75-.75V5.25a.75.75 0 0 1 .75-.75h19.5a.75.75 0 0 1 .75.75v8.25zm1.5 0V5.25A2.25 2.25 0 0 0 21.752 3h-19.5a2.25 2.25 0 0 0-2.25 2.25v16.5A2.25 2.25 0 0 0 2.252 24h19.5a2.25 2.25 0 0 0 2.25-2.25V13.5zm-23.25-3h22.5a.75.75 0 0 0 0-1.5H.752a.75.75 0 0 0 0 1.5zM7.502 6V.75a.75.75 0 0 0-1.5 0V6a.75.75 0 0 0 1.5 0zm10.5 0V.75a.75.75 0 0 0-1.5 0V6a.75.75 0 0 0 1.5 0z">
															</path>
														</svg>
													</span>

													<span class="ext-navigation-top-item__title">
														<span class="ext-navigation-top-item__title-text">Rates &amp;
															Availability</span>
														<span class="ext-navigation-top-item__dropdown-indicator">
															<svg height="15" viewBox="0 0 24 24" fill="currentColor"
																role="presentation" focusable="false" width="15"
																aria-hidden="true"
																class="bk-icon -streamline-arrow_nav_down">
																<path
																	d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
																</path>
															</svg>
														</span>
													</span>

													<span class="ext-navigation-top-item__dropdown-icon">
														<svg focusable="false" role="presentation" aria-hidden="true"
															width="24" viewBox="0 0 24 24" fill="currentColor"
															height="24"
															class="ext-navigation-top-item__dropdown-icon--mobile bk-icon -streamline-arrow_nav_down">
															<path
																d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
															</path>
														</svg>
													</span>

												</button>
												<!-- /toggle botton -->

												<!-- Sub Menu -->
												<div class="ext-navigation-top-item__submenu dropdown-menu">
													<ul class="ext-navigation-submenu-item__list">
														<!-- <li data-nav-tag="availability_calendar"
															class="ext-navigation-submenu-item">
															<a href="calendar.html"
																class="ext-navigation-submenu-item__link">
																<span class="ext-navigation-submenu-item__icon">
																</span>
																<span
																	class="ext-navigation-submenu-item__title">Calendar</span>

															</a>

														</li> -->
														<li data-nav-tag="open_close_rooms"
															class="ext-navigation-submenu-item">
															<a href="{{ url("open-close-rooms.html") }}"
																class="ext-navigation-submenu-item__link">
																<span class="ext-navigation-submenu-item__icon">
																</span>
																<span
																	class="ext-navigation-submenu-item__title">Open/close
																	rooms</span>

															</a>

														</li>
														<li data-nav-tag="rate_plans"
															class="ext-navigation-submenu-item">
															<a href="{{ url("rate-plans.html") }}"
																class="ext-navigation-submenu-item__link">
																<span class="ext-navigation-submenu-item__icon">
																</span>
																<span class="ext-navigation-submenu-item__title">Rate
																	plans</span>

															</a>

														</li>

													</ul>
												</div>
												<!-- /Sub Menu -->

											</li>
											<!-- /Menu Item -->

											<!-- Menu Item -->
											<li class="ext-navigation-top-item">
												<a href="{{ url("reservations.html") }}" class="ext-navigation-top-item__link">
													<span class="ext-navigation-top-item__icon">
														<svg focusable="false" role="presentation" aria-hidden="true"
															width="24" fill="currentColor" viewBox="0 0 24 24"
															height="24" class="bk-icon -streamline-list">
															<path
																d="M4.5 2.998a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm1.5 0a3 3 0 1 0-6 0 3 3 0 0 0 6 0zm-1.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm1.5 0a3 3 0 1 0-6 0 3 3 0 0 0 6 0zm-1.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm1.5 0a3 3 0 1 0-6 0 3 3 0 0 0 6 0zm2.25-16.5h15a.75.75 0 0 0 0-1.5h-15a.75.75 0 0 0 0 1.5zm0 9h15a.75.75 0 0 0 0-1.5h-15a.75.75 0 0 0 0 1.5zm0 9h15a.75.75 0 0 0 0-1.5h-15a.75.75 0 0 0 0 1.5z">
															</path>
														</svg>
													</span>
													<span class="ext-navigation-top-item__title">
														<span
															class="ext-navigation-top-item__title-text">Reservations</span>
													</span>
												</a>
											</li>
											<!-- /Menu Item -->

											<!-- Menu Item -->
											<li class="ext-navigation-top-item ext-navigation-top-item--active">

												<!-- toggle botton -->
												<button class="ext-navigation-top-item__link dropdown-toggle"
													data-bs-toggle="dropdown" aria-expanded="false">
													<span class="ext-navigation-top-item__icon">
														<svg aria-hidden="true" width="24" focusable="false"
															role="presentation" viewBox="0 0 24 24" fill="currentColor"
															height="24" class="bk-icon -streamline-edit">
															<path
																d="M22.72 1.279a4.389 4.389 0 0 0-6.208.013l-.028.029L1.99 15.815a.75.75 0 0 0-.197.344l-1.77 6.905a.75.75 0 0 0 .913.913l6.905-1.771a.75.75 0 0 0 .344-.197l14.5-14.5a4.385 4.385 0 0 0 .067-6.197l-.03-.031zm-1.061 1.06l.02.02a2.887 2.887 0 0 1-.048 4.083L7.125 20.95l.344-.197-6.905 1.771.913.913 1.77-6.905-.197.344 14.5-14.5.025-.025a2.89 2.89 0 0 1 4.086-.009zm-5.583.451l5.134 5.134a.75.75 0 1 0 1.06-1.06L17.136 1.73a.75.75 0 1 0-1.06 1.06zM1.99 16.875l5.14 5.13a.75.75 0 0 0 1.059-1.062l-5.14-5.13a.75.75 0 0 0-1.059 1.062z">
															</path>
														</svg>
													</span>
													<span class="ext-navigation-top-item__title">
														<span
															class="ext-navigation-top-item__title-text">Property</span>
														<span aria-label="10 unread items"
															class="ext-navigation-top-item__label bui-bubble bui-bubble--destructive">
															10
														</span>
														<span class="ext-navigation-top-item__dropdown-indicator">
															<svg fill="currentColor" viewBox="0 0 24 24" height="15"
																focusable="false" role="presentation" aria-hidden="true"
																width="15" class="bk-icon -streamline-arrow_nav_down">
																<path
																	d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
																</path>
															</svg>
														</span>
													</span>
													<span class="ext-navigation-top-item__dropdown-icon">
														<svg width="24" aria-hidden="true" role="presentation"
															focusable="false" height="24" fill="currentColor"
															viewBox="0 0 24 24"
															class="ext-navigation-top-item__dropdown-icon--mobile bk-icon -streamline-arrow_nav_down">
															<path
																d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
															</path>
														</svg>
													</span>
												</button>
												<!-- /toggle botton -->

												<!-- Sub Menu -->
												<div class="ext-navigation-top-item__submenu dropdown-menu">
													<ul class="ext-navigation-submenu-item__list">
														<li data-nav-tag="content_score"
															class="ext-navigation-submenu-item">
															<a href="{{ url("property-page-score.html") }}"
																class="ext-navigation-submenu-item__link">
																<span class="ext-navigation-submenu-item__icon">
																</span>
																<span
																	class="ext-navigation-submenu-item__title">Property
																	page score</span>

															</a>

														</li>
														<li data-nav-tag="general_info"
															class="ext-navigation-submenu-item">
															<a href="{{ url("general-info.html") }}"
																class="ext-navigation-submenu-item__link"><span
																	class="ext-navigation-submenu-item__icon">
																</span> <span
																	class="ext-navigation-submenu-item__title">General
																	info</span>

															</a>

														</li>
														<li data-nav-tag="vat_tax_charges"
															class="ext-navigation-submenu-item">
															<a href="{{ url("vat-tax-charges.html") }}"
																class="ext-navigation-submenu-item__link">
																<span class="ext-navigation-submenu-item__icon">
																</span>
																<span
																	class="ext-navigation-submenu-item__title">VAT/tax/charges</span>

															</a>

														</li>
														<li data-nav-tag="photos" class="ext-navigation-submenu-item">
															<a href="{{ url("photos.html") }}"
																class="ext-navigation-submenu-item__link">
																<span class="ext-navigation-submenu-item__icon">
																</span>
																<span
																	class="ext-navigation-submenu-item__title">Photos</span>
																<span aria-label="3 unread items"
																	class="ext-navigation-submenu-item__label bui-bubble bui-bubble--destructive">
																	3
																</span>
															</a>

														</li>
														<li data-nav-tag="policies" class="ext-navigation-submenu-item">
															<a href="{{ url("policies.html") }}"
																class="ext-navigation-submenu-item__link"><span
																	class="ext-navigation-submenu-item__icon">
																</span> <span
																	class="ext-navigation-submenu-item__title">Policies</span>

															</a>

														</li>
														<li data-nav-tag="facilities"
															class="ext-navigation-submenu-item">
															<a href="{{ url("facilities-services.html") }}"
																class="ext-navigation-submenu-item__link">
																<span class="ext-navigation-submenu-item__icon">
																</span>
																<span
																	class="ext-navigation-submenu-item__title">Facilities
																	&amp; services</span>
																<span aria-label="3 unread items"
																	class="ext-navigation-submenu-item__label bui-bubble bui-bubble--destructive">
																	3
																</span>
															</a>

														</li>
														<li data-nav-tag="rooms" class="ext-navigation-submenu-item">
															<a href="{{ url("room-details.html") }}"
																class="ext-navigation-submenu-item__link">
																<span class="ext-navigation-submenu-item__icon">
																</span>
																<span class="ext-navigation-submenu-item__title">Room
																	details</span>

															</a>

														</li>

														<li class="ext-navigation-submenu-item">
															<a href="{{ url("get-time-squers.html") }}"
																class="ext-navigation-submenu-item__link">
																<span class="ext-navigation-submenu-item__icon">
																</span>
																<span class="ext-navigation-submenu-item__title">How to
																	get to time squers</span>
																<span aria-label="1 unread items"
																	class="ext-navigation-submenu-item__label bui-bubble bui-bubble--destructive">
																	1
																</span>
															</a>

														</li>
														<li data-nav-tag="surroundings"
															class="ext-navigation-submenu-item">
															<a href="{{ url("what's-nearby.html") }}"
																class="ext-navigation-submenu-item__link">
																<span class="ext-navigation-submenu-item__icon"></span>
																<span class="ext-navigation-submenu-item__title">What's
																	nearby?</span>
																<span aria-label="1 unread items"
																	class="ext-navigation-submenu-item__label bui-bubble bui-bubble--destructive">
																	1
																</span>
															</a>

														</li>

													</ul>
												</div>
												<!-- /Sub Menu -->

											</li>
											<!-- /Menu Item -->

											<!-- Menu Item -->
											<li class="ext-navigation-top-item">
												<!-- toggle botton -->
												<button class="ext-navigation-top-item__link dropdown-toggle"
													data-bs-toggle="dropdown" aria-expanded="false">
													<span class="ext-navigation-top-item__icon">
														<svg height="24" fill="currentColor" viewBox="0 0 24 24"
															role="presentation" focusable="false" width="24"
															aria-hidden="true" class="bk-icon -streamline-email">
															<path
																d="M22.5 12v6a.75.75 0 0 1-.75.75H2.25A.75.75 0 0 1 1.5 18V6a.75.75 0 0 1 .75-.75h19.5a.75.75 0 0 1 .75.75v6zm1.5 0V6a2.25 2.25 0 0 0-2.25-2.25H2.25A2.25 2.25 0 0 0 0 6v12a2.25 2.25 0 0 0 2.25 2.25h19.5A2.25 2.25 0 0 0 24 18v-6zm-8.822-1.474l3.813 3.525a.75.75 0 1 0 1.018-1.102l-3.813-3.525a.75.75 0 1 0-1.018 1.102zM7.804 9.424L3.99 12.95a.75.75 0 1 0 1.018 1.102l3.813-3.525a.75.75 0 1 0-1.018-1.102zm14.65-5.027l-9.513 6.56a1.656 1.656 0 0 1-1.882 0l-9.513-6.56A.75.75 0 1 0 .694 5.63l9.513 6.56a3.156 3.156 0 0 0 3.586 0l9.513-6.56a.75.75 0 1 0-.852-1.234z">
															</path>
														</svg>
													</span>
													<span class="ext-navigation-top-item__title">
														<span class="ext-navigation-top-item__title-text">Inbox</span>
														<span class="ext-navigation-top-item__dropdown-indicator">
															<svg height="15" fill="currentColor" viewBox="0 0 24 24"
																width="15" aria-hidden="true" role="presentation"
																focusable="false"
																class="bk-icon -streamline-arrow_nav_down">
																<path
																	d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
																</path>
															</svg>
														</span>
													</span>
													<span class="ext-navigation-top-item__dropdown-icon">
														<svg focusable="false" role="presentation" aria-hidden="true"
															width="24" fill="currentColor" viewBox="0 0 24 24"
															height="24"
															class="ext-navigation-top-item__dropdown-icon--mobile bk-icon -streamline-arrow_nav_down">
															<path
																d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
															</path>
														</svg>
													</span>
												</button>
												<!-- /toggle botton -->
												<!-- Sub Menu -->
												<div class="ext-navigation-top-item__submenu dropdown-menu">
													<ul class="ext-navigation-submenu-item__list">
														<li class="ext-navigation-submenu-item">
															<a href="{{ url("reservation-messages.html") }}"
																class="ext-navigation-submenu-item__link">
																<span class="ext-navigation-submenu-item__icon">
																</span>
																<span class="ext-navigation-submenu-item__title">
																	Reservation messages
																</span>

															</a>

														</li>
														<li class="ext-navigation-submenu-item">
															<a href="{{ url("obacas-messages.html") }}"
																class="ext-navigation-submenu-item__link">
																<span class="ext-navigation-submenu-item__icon">
																</span>
																<span
																	class="ext-navigation-submenu-item__title">Booking.com
																	messages</span>

															</a>

														</li>

													</ul>
												</div>
												<!-- /Sub Menu -->
											</li>
											<!-- /Menu Item -->

											<!-- Menu Item -->
											<li class="ext-navigation-top-item">
												<!-- toggle botton -->
												<button class="ext-navigation-top-item__link dropdown-toggle"
													data-bs-toggle="dropdown" aria-expanded="false">
													<span class="ext-navigation-top-item__icon">
														<svg height="24" viewBox="0 0 24 24" fill="currentColor"
															width="24" aria-hidden="true" role="presentation"
															focusable="false" class="bk-icon -streamline-heart_outline">
															<path
																d="M12.541 21.325l-9.588-10a4.923 4.923 0 1 1 6.95-6.976l1.567 1.566a.75.75 0 0 0 1.06 0l1.566-1.566a4.923 4.923 0 0 1 6.963 6.962l-9.6 10.014h1.082zm-1.082 1.038a.75.75 0 0 0 1.082 0l9.59-10.003a6.418 6.418 0 0 0-.012-9.07 6.423 6.423 0 0 0-9.083-.001L11.47 4.854h1.06l-1.566-1.566a6.423 6.423 0 1 0-9.082 9.086l9.577 9.99z">
															</path>
														</svg>
													</span>
													<span class="ext-navigation-top-item__title">
														<span class="ext-navigation-top-item__title-text">Guest
															reviews</span>
														<span class="ext-navigation-top-item__dropdown-indicator">
															<svg focusable="false" role="presentation"
																aria-hidden="true" width="15" fill="currentColor"
																viewBox="0 0 24 24" height="15"
																class="bk-icon -streamline-arrow_nav_down">
																<path
																	d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
																</path>
															</svg>
														</span>
													</span>
													<span class="ext-navigation-top-item__dropdown-icon">
														<svg focusable="false" role="presentation" aria-hidden="true"
															width="24" fill="currentColor" viewBox="0 0 24 24"
															height="24"
															class="ext-navigation-top-item__dropdown-icon--mobile bk-icon -streamline-arrow_nav_down">
															<path
																d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
															</path>
														</svg>
													</span>
												</button>
												<!-- /toggle botton -->
												<!-- Sub Menu -->
												<div class="ext-navigation-top-item__submenu dropdown-menu">
													<ul class="ext-navigation-submenu-item__list">
														<li class="ext-navigation-submenu-item">
															<a href="{{ url("guest-reviews.html") }}"
																class="ext-navigation-submenu-item__link"><span
																	class="ext-navigation-submenu-item__icon">
																</span> <span
																	class="ext-navigation-submenu-item__title">Guest
																	reviews</span>

															</a>

														</li>

													</ul>
												</div>
												<!-- /Sub Menu -->
											</li>
											<!-- /Menu Item -->

											<!-- Menu Item -->
											<li class="ext-navigation-top-item">
												<!-- toggle botton -->
												<button class="ext-navigation-top-item__link dropdown-toggle"
													data-bs-toggle="dropdown" aria-expanded="false">
													<span class="ext-navigation-top-item__icon">
														<svg width="24" aria-hidden="true" role="presentation"
															focusable="false" height="24" fill="currentColor"
															viewBox="0 0 24 24" class="bk-icon -streamline-page">
															<path
																d="M13.629 22.5H2.25a.75.75 0 0 1-.75-.75V2.25a.75.75 0 0 1 .75-.75h19.5a.75.75 0 0 1 .75.75v11.379a.75.75 0 0 1-.22.53L14.16 22.28a.75.75 0 0 1-.53.219zm0 1.5a2.25 2.25 0 0 0 1.59-.659l8.122-8.122A2.25 2.25 0 0 0 24 13.63V2.25A2.25 2.25 0 0 0 21.75 0H2.25A2.25 2.25 0 0 0 0 2.25v19.5A2.25 2.25 0 0 0 2.25 24h11.379zM15 23.115V15.75a.75.75 0 0 1 .75-.75h7.365a.75.75 0 0 0 0-1.5H15.75a2.25 2.25 0 0 0-2.25 2.25v7.365a.75.75 0 0 0 1.5 0zM6.75 7.5h12a.75.75 0 0 0 0-1.5h-12a.75.75 0 0 0 0 1.5zm0 4.5H12a.75.75 0 0 0 0-1.5H6.75a.75.75 0 0 0 0 1.5z">
															</path>
														</svg>
													</span>
													<span class="ext-navigation-top-item__title">
														<span class="ext-navigation-top-item__title-text">Finance</span>
														<span class="ext-navigation-top-item__dropdown-indicator">
															<svg viewBox="0 0 24 24" fill="currentColor" height="15"
																focusable="false" role="presentation" aria-hidden="true"
																width="15" class="bk-icon -streamline-arrow_nav_down">
																<path
																	d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
																</path>
															</svg>
														</span>
													</span>
													<span class="ext-navigation-top-item__dropdown-icon">
														<svg height="24" viewBox="0 0 24 24" fill="currentColor"
															width="24" aria-hidden="true" role="presentation"
															focusable="false"
															class="ext-navigation-top-item__dropdown-icon--mobile bk-icon -streamline-arrow_nav_down">
															<path
																d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
															</path>
														</svg>
													</span>
												</button>
												<!-- /toggle botton -->
												<!-- Sub Menu -->
												<div class="ext-navigation-top-item__submenu dropdown-menu">
													<ul class="ext-navigation-submenu-item__list">
														<li data-nav-tag="finance_invoices"
															class="ext-navigation-submenu-item">
															<a href="{{ url("invoices.html") }}"
																class="ext-navigation-submenu-item__link">
																<span class="ext-navigation-submenu-item__icon">
																</span>
																<span
																	class="ext-navigation-submenu-item__title">Invoices</span>

															</a>

														</li>
														<li data-nav-tag="finance_reservations"
															class="ext-navigation-submenu-item">
															<a href="{{ url("reservation-statements.html") }}"
																class="ext-navigation-submenu-item__link">
																<span class="ext-navigation-submenu-item__icon"></span>
																<span
																	class="ext-navigation-submenu-item__title">Reservation
																	statements</span>

															</a>

														</li>
														<li data-nav-tag="finance_overview"
															class="ext-navigation-submenu-item">
															<a href="{{ url("financial-overview.html") }}"
																class="ext-navigation-submenu-item__link">
																<span class="ext-navigation-submenu-item__icon">
																</span>
																<span
																	class="ext-navigation-submenu-item__title">Financial
																	overview</span>

															</a>

														</li>
													</ul>
												</div>
												<!-- /Sub Menu -->
											</li>
											<!-- /Menu Item -->

										</ul>
									</div>
								</div>
								<div class="ext-navigation__mobile-overlay"></div>
							</nav>
						</div>
						<!-- /Header Bottom -->

					</header>
					<!-- /Header -->


					<div class="bui-container bui-container--center">
						<div class="page-header-component-title th__page-header">
							<div class="row">
								<div class="th__page-header__content col-md-12">
									<h1 class="th__page-header__title">
										Facilities &amp; services
									</h1>
								</div>
							</div>

							<div class="row">
								<div class="clearfix col-md-12">
									<p class="th__page-header__description">
										Listing your facilities can really help influence guests to book! Update the
										ones available at your property or on-site below.
									</p>
								</div>
							</div>
						</div>

						<div class="alert bui-alert bui-alert--info bui-alert--large bui-u-bleed@small" role="alert">
							<div class="bui-alert__description">
								<span class="bui-alert__title">What's missing:</span>
								<ul>
									<li>
										<a href="{{ url("#container_301") }}">
											Swimming pool details
										</a>
									</li>
									<li>
										<a href="{{ url("#container_3") }}">
											Restaurant Information
										</a>
									</li>
									<li>
										We noticed that some questions about your Top Facilities are still unanswered.
										Please double-check the following:
										<ul>
											<li>
												<a href="{{ url("#container_54") }}">
													Spa and wellness centre
												</a>
											</li>
											<li>
												<a href="{{ url("#container_10") }}">
													Sauna
												</a>
											</li>
											<li>
												<a href="{{ url("#container_17") }}">
													Airport shuttle
												</a>
											</li>
											<li>
												<a href="{{ url("#container_63") }}">
													Hot tub/Jacuzzi
												</a>
											</li>
											<li>
												<a href="{{ url("#container_15") }}">
													Terrace
												</a>
											</li>
											<li>
												<a href="{{ url("#container_7") }}">
													Bar
												</a>
											</li>
											<li>
												<a href="{{ url("#container_148") }}">
													Water park
												</a>
											</li>
											<li>
												<a href="{{ url("#container_144") }}">
													Kids&#39; club
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>


						<div class="row">
							<div class="col-sm-12 main-content">
								<form id="facilities_form" method="POST" role="form">

									<!-- Top Facilities -->
									<div class="facilities_section">
										<fieldset id="most_popular" class="facility-section--incomplete">
											<legend>
												Top Facilities
											</legend>

											<p>
												These are the facilities that guests look for the most! Tell them which
												you have by answering
												<strong>yes</strong> or <strong>no</strong> to each question and click
												<strong>save
												</strong>.
											</p>

											<div class="row">

												<ul class="col-sm-6">
													<li id="container_3"
														class="facility_items facility_item facility_items_active">

														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Restaurant
																</span>
																<a href="{{ url("#") }}" class="photo_uploader btn-default">
																	<i class="fa-solid fa-camera"></i>
																</a>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_3" checked />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_3" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>

													<li id="container_5"
														class="facility_items facility_item facility_items_active">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Room service
																</span>
																<a href="{{ url("#") }}" class="photo_uploader  btn-default">
																	<i class="fa-solid fa-camera"></i>
																</a>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_5" checked />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_5" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>

													<li id="container_7" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Bar
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_7" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_7" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>

													<li id="container_10"
														class="facility_items facility_item facility_items_active">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Sauna
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_10" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_10" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
															<div class="col-sm-5">
																<select class="form-control facility_select">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>
														</div>
													</li>

													<li id="container_11"
														class="facility_items facility_item facility_items_active">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Fitness centre
																</span>
																<a href="{{ url("#") }}" class="photo_uploader  btn-default">
																	<i class="fa-solid fa-camera"></i>
																</a>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_11" checked />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_11" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
															<div class="col-sm-5">
																<select class="form-control facility_select">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4" selected>
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>
														</div>
													</li>

													<li id="container_16"
														class="facility_items facility_item facility_items_active">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Non-smoking rooms
																</span>
																<a href="{{ url("#") }}" class="photo_uploader  btn-default">
																	<i class="fa-solid fa-camera"></i>
																</a>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_16" checked />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_16" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>

												</ul>

												<ul class="col-sm-6">

													<li id="container_17"
														class="facility_items facility_item facility_items_active  facility_items_expanded">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Airport shuttle
																</span>
																<a href="{{ url("#") }}" class="photo_uploader  btn-default">
																	<i class="fa-solid fa-camera"></i>
																</a>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_17" checked />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_17" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>

													<li id="container_28"
														class="facility_items facility_item facility_items_active">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Family rooms
																</span>
																<a href="{{ url("#") }}" class="photo_uploader  btn-default">
																	<i class="fa-solid fa-camera"></i>
																</a>
															</div>

															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_28"
																			data-message="Sorry, you can&#39;t select this while the &#39;adult only&#39; option is selected."
																			checked />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_28" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>

														</div>
													</li>


													<li id="container_54" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Spa and wellness centre
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_54" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_54" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
															<div class="col-sm-5">
																<select class="form-control facility_select"
																	style="display:none;">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>
														</div>
													</li>

													<li id="container_63" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Hot tub/Jacuzzi
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_63" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_63" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
															<div class="col-sm-5">
																<select class="form-control facility_select">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>
														</div>
													</li>

													<li id="container_433"
														class="facility_items facility_item facility_items_active">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Swimming Pool
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_433" checked />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_433" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</fieldset>
									</div>
									<!-- Top Facilities -->

									<!-- Meals -->
									<div class="facilities_section">
										<fieldset class="policy-fieldset" id="meal_agreeements_section">
											<legend>Meals</legend>
											<div class="row" id="do_you_sell_meals">
												<div class="col-md-12">
													<div class="form-group">
														<label>Do you serve meals?</label>
														<div class="radio-block" id="plus_sell_meals">
															<div class="radio">
																<label>
																	<input type="radio" name="plus_sell_meals"
																		value="yes">
																	<span>Yes</span>
																</label>
															</div>
															<div class="radio">
																<label>
																	<input type="radio" name="plus_sell_meals"
																		value="no" checked>
																	<span>No</span>
																</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</fieldset>

										<fieldset class="policy-fieldset hidden" id="meal_plans_section">
											<legend>Price for meals</legend>
											<div class="row">
												<div class="describe-block">
													<i class="glyphicon glyphicon-hand-right"></i>
													<p class="describe-text">Please tell us the price of meals when they
														are not included in the reservation price. Prices are per
														person, per day and must include any extra fees or taxes.</p>
												</div>
											</div>
											<div class="" id="meal_plans">
												<div class="row">
													<div class="col-sm-7">
														<div class="row">
															<div class="col-md-3">
															</div>
															<div class="col-md-4">
																<label>Included in Room Rate</label>
															</div>
															<div class="col-md-5">
																<label>
																	Price through Booking.com <span
																		class="meal-plan-prices-label-note">(Standard
																		commission
																		applies)</span>
																</label>
															</div>
														</div>
														<ul class="list-unstyled meal-plan-list">
															<li class="row meal-plan-item">
																<div class="col-sm-3 form-group">
																	<label class="meal-plan-label">
																		<input type="checkbox"
																			class="meal_plan_checkbox"
																			id="breakfast_plan" name="breakfast_plan"
																			value="optional"
																			data-trigger-validation="n">
																	</label>
																	<div class="meal-plan-name">
																		<span>Breakfast</span>
																	</div>
																	<span class="help-block"></span>
																</div>
																<div class="col-sm-4">
																	<a href="/hotel/hoteladmin/extranet_ng/manage/rate_plans.html?lang=en&amp;hotel_id=7962700&amp;ses=2598ae49ac26476521e8e377fe259286"
																		target="_blank">
																		<span>Included in 0 rates</span>
																	</a>
																</div>
																<div
																	class="col-xs-7 col-sm-5 meal-plan-price form-group">
																	<div class="input-group">
																		<span class="input-group-addon">US$</span>
																		<input id="priceInput" class="form-control"
																			type="number" value=""
																			name="breakfast_price" disabled>
																	</div>
																	<span class="person-icon-container">
																		/<i class="glyphicon glyphicon-user"></i>
																	</span>
																	<span class="help-block"></span>
																</div>
																<div
																	class="col-xs-7 col-sm-5 meal-plan-included hidden">
																	<div class="meal-plan-included-enabled">
																		Included in the accommodation price
																	</div>
																	<div class="meal-plan-included-disabled">
																		&mdash;
																	</div>
																</div>
															</li>
															<li class="row meal-plan-item">
																<div class="col-sm-3">
																	<label class="meal-plan-label">
																		<input type="checkbox"
																			class="meal_plan_checkbox" id="lunch_plan"
																			name="lunch_plan" value="optional"
																			data-trigger-validation="n">
																	</label>
																	<div class="meal-plan-name">
																		<span>Lunch</span>
																	</div>
																</div>
																<div class="col-sm-4">
																	<a href="/hotel/hoteladmin/extranet_ng/manage/rate_plans.html?lang=en&amp;hotel_id=7962700&amp;ses=2598ae49ac26476521e8e377fe259286"
																		target="_blank">
																		<span>Included in 0 rates</span>
																	</a>
																</div>
																<div
																	class="col-xs-7 col-sm-5 meal-plan-price form-group">
																	<div class="input-group">
																		<span class="input-group-addon">US$</span>
																		<input id="priceInput" class="form-control"
																			type="number" value="" name="lunch_price"
																			disabled>
																	</div>
																	<span class="person-icon-container">
																		/<i class="glyphicon glyphicon-user"></i>
																	</span>
																	<span class="help-block"></span>
																</div>
																<div
																	class="col-xs-7 col-sm-5 meal-plan-included hidden">
																	<div class="meal-plan-included-enabled">
																		Included in the accommodation price
																	</div>
																	<div class="meal-plan-included-disabled">
																		&mdash;
																	</div>
																</div>
															</li>
															<li class="row meal-plan-item">
																<div class="col-sm-3">
																	<label class="meal-plan-label">
																		<input type="checkbox"
																			class="meal_plan_checkbox" id="dinner_plan"
																			name="dinner_plan" value="optional"
																			data-trigger-validation="n">
																	</label>
																	<div class="meal-plan-name">
																		<span>Dinner</span>
																	</div>
																</div>
																<div class="col-sm-4">
																	<a href="/hotel/hoteladmin/extranet_ng/manage/rate_plans.html?hotel_id=7962700&amp;lang=en&amp;ses=2598ae49ac26476521e8e377fe259286"
																		target="_blank">
																		<span>Included in 0 rates</span>
																	</a>
																</div>
																<div
																	class="col-xs-7 col-sm-5 meal-plan-price form-group">
																	<div class="input-group">
																		<span class="input-group-addon">US$</span>
																		<input id="priceInput" class="form-control"
																			type="number" value="" name="dinner_price"
																			disabled>
																	</div>
																	<span class="person-icon-container">
																		/<i class="glyphicon glyphicon-user"></i>
																	</span>
																	<span class="help-block"></span>
																</div>
																<div
																	class="col-xs-7 col-sm-5 meal-plan-included hidden">
																	<div class="meal-plan-included-enabled">
																		Included in the accommodation price
																	</div>
																	<div class="meal-plan-included-disabled">
																		&mdash;
																	</div>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>

											<input id='breakfast_in_rate' class='hidden' value='0'
												name='breakfast_in_rate'>
											<input id='lunch_in_rate' class='hidden' value='0' name='lunch_in_rate'>
											<input id='dinner_in_rate' class='hidden' value='0' name='dinner_in_rate'>





										</fieldset>



										<div id="meal_agreeements_section"></div>

										<div class="facilities_section facilities_section--breakfast">

											<fieldset class="policy-fieldset breakfast-section hidden"
												id="breakfast_section" data-component="facilities/breakfast"
												data-force-visible=&quot;1&quot;>
												<legend>
													Breakfast details
												</legend>
												<div class="row">
													<div class="breakfast-section--details clearfix  hidden">

														<div class="form-group breakfast-section--form-group col-sm-12">
															<label class="breakfast-section--form-group-title">What
																breakfast
																types are available? (Select all that apply)</label>
															<div class="button-list" data-name="breakfast_type"
																data-component="button_list">

																<button class="button-list--button" data-value="10">
																	American
																</button>
																<button class="button-list--button" data-value="9">
																	Asian
																</button>
																<button class="button-list--button" data-value="1">
																	Continental
																</button>
																<button class="button-list--button" data-value="3">
																	Full English/Irish
																</button>
																<button class="button-list--button" data-value="7">
																	Gluten-free
																</button>
																<button class="button-list--button" data-value="6">
																	Halal
																</button>
																<button class="button-list--button" data-value="2">
																	Italian
																</button>
																<button class="button-list--button" data-value="8">
																	Kosher
																</button>
																<button class="button-list--button" data-value="5">
																	Vegan
																</button>
																<button class="button-list--button" data-value="4">
																	Vegetarian
																</button>
															</div>





															<label class="breakfast-section--form-group-title"
																style="display: block;margin-top:20px">How is breakfast
																served?
																(Select all that apply)</label>
															<div class="button-list" data-name="breakfast_type"
																data-component="button_list">

																<button class="button-list--button" data-value="12">
																	À la carte
																</button>
																<button class="button-list--button" data-value="13">
																	Breakfast to go
																</button>
																<button class="button-list--button" data-value="11">
																	Buffet
																</button>
															</div>







														</div>
														<div class="form-group breakfast-section--form-group col-sm-12">
															<label class="breakfast-section--form-group-title">What do
																you serve
																for breakfast? (Select all that apply)</label>
															<div class="button-list" data-name="breakfast_food_item"
																data-component="button_list">

																<button class="button-list--button" data-value="1">
																	Bread
																</button>
																<button class="button-list--button" data-value="2">
																	Pastries
																</button>
																<button class="button-list--button" data-value="3">
																	Pancakes
																</button>
																<button class="button-list--button" data-value="18">
																	Jam
																</button>
																<button class="button-list--button" data-value="4">
																	Butter
																</button>
																<button class="button-list--button" data-value="5">
																	Cheese
																</button>
																<button class="button-list--button" data-value="19">
																	Cereal
																</button>
																<button class="button-list--button" data-value="6">
																	Cold meat
																</button>
																<button class="button-list--button" data-value="7">
																	Eggs
																</button>
																<button class="button-list--button" data-value="8">
																	Yogurt
																</button>
																<button class="button-list--button" data-value="9">
																	Fruit
																</button>
																<button class="button-list--button" data-value="10">
																	Coffee
																</button>
																<button class="button-list--button" data-value="11">
																	Tea
																</button>
																<button class="button-list--button" data-value="12">
																	Hot chocolate
																</button>
																<button class="button-list--button" data-value="17">
																	Fruit juice
																</button>
																<button class="button-list--button" data-value="13">
																	Champagne
																</button>
																<button class="button-list--button" data-value="14">
																	À la carte menu
																</button>
																<button class="button-list--button" data-value="15">
																	Local specialities
																</button>
																<button class="button-list--button" data-value="16">
																	Cooked/warm meals
																</button>
															</div>







														</div>

														<div
															class="breakfast-section--facility breakfast-section--weektimes col-sm-12">
															<div>
																<label>When does breakfast start and finish?</label>
															</div>
															<ul class="
		
		col-sm-6
	">

																<li id="container_305" class="
				facility_items row
				
				
				
				
				
				
			">
																	<div class="facility_items_body clearfix">
																		<div class="checkbox col-sm-12">
																			<label class="has_facility"
																				for="facility_305">
																				<input data-message="" type="checkbox"
																					class="cb facility_checkbox"
																					id="facility_305">


																				<span class="facility_tooltip">Breakfast
																					options</span>
																			</label>


																		</div>
																	</div>


																	<div class="facility_attr_wrap clearfix">


																		<div class="facility_attr_row clearfix">
																			<div class="facility-attr--name-weektimes weektimes"
																				data-component="week_times">
																				<div class="weektimes--create">
																					<div class="col-sm-12">
																						<label class="has_facility">Tell
																							guests
																							when they can use this
																							facility</label>
																					</div>
																					<div
																						class="col-md-12 col-lg-4 control-group attrib_row">
																						<select
																							class="form-control weektimes--select"
																							data-name="day"
																							data-placeholder="Day"></select>
																					</div>
																					<div
																						class="col-sm-6 col-md-6 col-lg-2 attrib_pad control-group attrib_row">
																						<select
																							class="form-control weektimes--select"
																							data-name="from"
																							data-placeholder="From"></select>
																					</div>
																					<div
																						class="col-sm-6 col-md-6 col-lg-2 attrib_pad control-group attrib_row">
																						<select
																							class="form-control weektimes--select"
																							data-name="to"
																							data-placeholder="To"></select>
																					</div>
																					<div
																						class="col-sm-12 col-md-4 attrib_row">
																						<a href="{{ url("#") }}"
																							class="btn btn-default weektimes--add">Add</a>
																					</div>
																				</div>

																				<div class="col-sm-12">
																					<div
																						class="attrib_error weektimes--error">
																					</div>
																				</div>

																				<div class="col-sm-12">
																					<div
																						class="times_preview weektimes--list">
																					</div>
																				</div>


																			</div>

																		</div>


																	</div>
																</li>

															</ul>
															<ul class="col-sm-6">


															</ul>















															</%def>

														</div>
													</div>
												</div>

											</fieldset>

										</div>




									</div>
									<!-- Meals -->

									<!-- Languages -->
									<div class="facilities_section">
										<fieldset id="languages_section">
											<legend>Languages spoken</legend>
											<div class="row" id="languages-spoken">
												<div class="lang_spoken_line">
													<div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
														<select id="lang_spoken_by_staff"
															class="form-control lang_spoken" name="staff_language">
															<option value="">Please select</option>
															<option value="bn" selected="selected">Bengali</option>
															<option value="br">Berber</option>
															<option value="bs">Bosnian</option>
														</select>
													</div>
												</div>
											</div>
										</fieldset>
									</div>
									<!-- Languages -->

									<!-- Building information -->
									<div class="facilities_section">
										<fieldset class="policy-fieldset" id="building_section">
											<legend>Building information</legend>
											<div class="row">
												<label class="col-lg-12 is-block">
													Total number of floors the building has (excl. underground floors)
												</label>
												<div class="form-group col-md-3 col-sm-4">
													<input type="number" id="number_of_floors_in_building"
														name="number_of_floors_in_building"
														class="form-control form-control-limited" value="" min="1"
														max="200" />
												</div>
											</div>
										</fieldset>
									</div>
									<!-- Building information -->

									<!-- Safety features -->
									<div class="facilities_section">
										<fieldset>
											<legend>Safety features</legend>
											<div class="row">
												<ul class=" col-sm-6">

													<li id="container_455" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Staff follow all safety protocols as directed by
																	local
																	authorities
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_455" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_455" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>

													<li id="container_456" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Shared stationery such as printed menus, magazines,
																	pens,
																	and paper removed
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_456" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_456" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>

													<li id="container_457" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Hand sanitizer in guest accommodation and key areas
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_457" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_457" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>

													<li id="container_458" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Process in place to check health of guests
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_458" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_458" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>
												</ul>

												<ul class="col-sm-6">
													<li id="container_459" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	First aid kit availabl
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_459" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_459" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>

													<li id="container_486" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Access to health care professionals
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_486" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_486" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>
													<li id="container_487" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Thermometers for guests provided by property
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_487" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_487" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>

													<li id="container_488" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Face masks for guests available
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_488" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_488" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</fieldset>
									</div>
									<!-- Safety features -->

									<!-- Physical distancing -->
									<div class="facilities_section">
										<fieldset>
											<legend>Physical distancing</legend>
											<div class="row">
												<ul class="col-sm-6">
													<li id="container_460" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Contactless check-in/check-out
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_460" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_460" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>
													<li id="container_461" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Cashless payment available
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_461" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_461" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>
													<li id="container_462" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Physical distancing rules followed
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_462" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_462" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>
												</ul>
												<ul class="col-sm-6">
													<li id="container_463" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Mobile app for room service
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_463" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_463" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>

													<li id="container_464" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Screens or physical barriers placed between staff
																	and guests
																	in appropriate areas
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_464" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_464" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</fieldset>
									</div>
									<!-- Physical distancing -->

									<!-- Cleanliness & disinfecting -->
									<div class="facilities_section">
										<fieldset>
											<legend>Cleanliness & disinfecting</legend>
											<div class="row">
												<ul class=" col-sm-6">
													<li id="container_449" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Use of cleaning chemicals that are effective against
																	Coronavirus
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_449" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_449" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>

													<li id="container_450" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Linens, towels and laundry washed in accordance with
																	local
																	authority guidelines
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_450" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_450" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>

													<li id="container_451" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Guest accommodation is disinfected between stays
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_451" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_451" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>
												</ul>

												<ul class="col-sm-6">
													<li id="container_452" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Guest accommodation sealed after cleaning
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_452" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_452" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>

													<li id="container_466" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Property is cleaned by professional cleaning
																	companies
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_466" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_466" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>

													<li id="container_468" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Guests have the option to cancel any cleaning
																	services for
																	their accommodation during their stay
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_468" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_468" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</fieldset>
									</div>
									<!-- Cleanliness & disinfecting -->

									<!-- Food & drink safety -->
									<div class="facilities_section">
										<fieldset>
											<legend>Food & drink safety</legend>
											<div class="row">
												<ul class=" col-sm-6">

													<li id="container_453" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Physical distancing in dining areas
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_453" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_453" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>

													<li id="container_454" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Food can be delivered to guest accommodation
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_454" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_454" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>

													<li id="container_467" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	All plates, cutlery, glasses and other tableware
																	have been
																	sanitized
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_467" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_467" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>
												</ul>
												<ul class="col-sm-6">
													<li id="container_484" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Breakfast takeaway containers
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_484" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_484" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>

													<li id="container_485" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Delivered food is securely covered
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_485" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_485" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</fieldset>
									</div>
									<!-- Food & drink safety -->


									<!-- Check-in services -->
									<div class="facilities_section">
										<fieldset>
											<legend>Check-in services</legend>
											<div>
												<!--Guest self check-in services-->
												<div class="facility-attr--name-checkin-services clearfix">
													<div class="bui-container facilities-section__checkin_services">
														<div class="bui-grid">
															<div
																class="bui-grid__column-full bui-grid__column-6@medium">
																<h5 class="bui-f-font-heading">
																	Guest self check-in services
																</h5>
																<div
																	class="facilities-section__checkin_services__field facility_items">
																	<div class="bui-form__group" role="radiogroup">
																		<div class="bui-grid">
																			<div
																				class="bui-grid__column bui-grid__column-8">
																				<label class="bui-form__label">
																					Guest passports and IDs collected
																					online,
																					pre-stay
																				</label>
																			</div>
																			<div
																				class="bui-grid__column bui-grid__column-4">
																				<div
																					class="bui-group bui-group--inline bui-group--large">
																					<label class="bui-radio">
																						<input type="radio"
																							class="bui-radio__input"
																							aria-describedby="radio-group-inline"
																							name="facility_470"
																							value="1" />
																						<span class="bui-radio__label">
																							Yes
																						</span>
																					</label>
																					<label class="bui-radio">
																						<input type="radio"
																							class="bui-radio__input"
																							aria-describedby="radio-group-inline"
																							name="facility_470"
																							value="0" />
																						<span class="bui-radio__label">
																							No
																						</span>
																					</label>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<!-- Check-in kiosk in the lobby -->

																<div
																	class="facilities-section__checkin_services__field facility_items">
																	<div class="bui-form__group" role="radiogroup">
																		<div class="bui-grid">
																			<div
																				class="bui-grid__column bui-grid__column-8">
																				<label class="bui-form__label">
																					Check-in kiosk in the lobby
																				</label>
																			</div>
																			<div
																				class="bui-grid__column bui-grid__column-4">
																				<div
																					class="bui-group bui-group--inline bui-group--large">
																					<label class="bui-radio">
																						<input type="radio"
																							class="bui-radio__input"
																							aria-describedby="radio-group-inline"
																							name="facility_471"
																							value="1" />
																						<span class="bui-radio__label">
																							Yes
																						</span>
																					</label>
																					<label class="bui-radio">
																						<input type="radio"
																							class="bui-radio__input"
																							aria-describedby="radio-group-inline"
																							name="facility_471"
																							value="0" />
																						<span class="bui-radio__label">
																							No
																						</span>
																					</label>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<!-- Lockbox key collection at the property -->

																<div
																	class="facilities-section__checkin_services__field facility_items">
																	<div class="bui-form__group" role="radiogroup">
																		<div class="bui-grid">
																			<div
																				class="bui-grid__column bui-grid__column-8">
																				<label class="bui-form__label">
																					Lockbox key collection at the
																					property
																				</label>
																			</div>
																			<div
																				class="bui-grid__column bui-grid__column-4">
																				<div
																					class="bui-group bui-group--inline bui-group--large">
																					<label class="bui-radio">
																						<input type="radio"
																							class="bui-radio__input"
																							aria-describedby="radio-group-inline"
																							name="facility_472"
																							value="1" />
																						<span class="bui-radio__label">
																							Yes
																						</span>
																					</label>
																					<label class="bui-radio">
																						<input type="radio"
																							class="bui-radio__input"
																							aria-describedby="radio-group-inline"
																							name="facility_472"
																							value="0" />
																						<span class="bui-radio__label">
																							No
																						</span>
																					</label>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<!-- Lockbox key collection at a separate location nearby the property -->

																<div
																	class="facilities-section__checkin_services__field facility_items">
																	<div class="bui-form__group" role="radiogroup">
																		<div class="bui-grid">
																			<div
																				class="bui-grid__column bui-grid__column-8">
																				<label class="bui-form__label">
																					Lockbox key collection at a separate
																					location near the property
																				</label>
																			</div>
																			<div
																				class="bui-grid__column bui-grid__column-4">
																				<div
																					class="bui-group bui-group--inline bui-group--large">
																					<label class="bui-radio">
																						<input type="radio"
																							class="bui-radio__input"
																							aria-describedby="radio-group-inline"
																							name="facility_473"
																							value="1" />
																						<span class="bui-radio__label">
																							Yes
																						</span>
																					</label>
																					<label class="bui-radio">
																						<input type="radio"
																							class="bui-radio__input"
																							aria-describedby="radio-group-inline"
																							name="facility_473"
																							value="0" />
																						<span class="bui-radio__label">
																							No
																						</span>
																					</label>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>

															<div
																class="bui-grid__column-full bui-grid__column-6@medium">
																<!-- Room-level digital key access -->
																<div
																	class="facilities-section__checkin_services__field">
																	<div class="bui-group" role="group">
																		<label class="bui-form__label">
																			Room-level digital key access
																		</label>
																		<div class="bui-form__group">
																			<div class="facility_items">
																				<label class="bui-checkbox">
																					<input type="checkbox"
																						class="bui-checkbox__input"
																						name="" />
																					<span class="bui-checkbox__label">
																						Mobile phone to open lock using
																						bluetooth
																					</span>
																				</label>
																			</div>
																			<div class="facility_items">
																				<label class="bui-checkbox">
																					<input type="checkbox"
																						class="bui-checkbox__input"
																						name="" />
																					<span class="bui-checkbox__label">
																						Mobile phone to open lock using
																						internet
																						connection
																					</span>
																				</label>
																			</div>
																			<div class="facility_items">
																				<label class="bui-checkbox">
																					<input type="checkbox"
																						class="bui-checkbox__input"
																						name="" />
																					<span class="bui-checkbox__label">
																						Pre-shared PIN/code to open lock
																					</span>
																				</label>
																			</div>
																			<div class="facility_items">
																				<label class="bui-checkbox">
																					<input type="checkbox"
																						class="bui-checkbox__input"
																						name="" />
																					<span class="bui-checkbox__label">
																						QR code scan
																					</span>
																				</label>
																			</div>
																			<div class="facility_items">
																				<label class="bui-checkbox">
																					<input type="checkbox"
																						class="bui-checkbox__input"
																						name="" />
																					<span class="bui-checkbox__label">
																						Downloadable check-in app
																					</span>
																				</label>
																			</div>
																		</div>
																	</div>
																</div>
																<!-- Property-level digital key access -->

																<div
																	class="facilities-section__checkin_services__field">
																	<div class="bui-group" role="group">
																		<label class="bui-form__label">
																			Property-level digital key access
																		</label>
																		<div class="bui-form__group">
																			<div class="facility_items">
																				<label class="bui-checkbox">
																					<input type="checkbox"
																						class="bui-checkbox__input"
																						name="" />
																					<span class="bui-checkbox__label">
																						Mobile phone to open lock using
																						bluetooth
																					</span>
																				</label>
																			</div>
																			<div class="facility_items">
																				<label class="bui-checkbox">
																					<input type="checkbox"
																						class="bui-checkbox__input"
																						name="" />
																					<span class="bui-checkbox__label">
																						Mobile phone to open lock using
																						internet
																						connection
																					</span>
																				</label>
																			</div>
																			<div class="facility_items">
																				<label class="bui-checkbox">
																					<input type="checkbox"
																						class="bui-checkbox__input"
																						name="" />
																					<span class="bui-checkbox__label">
																						Pre-shared PIN/code to open lock
																					</span>
																				</label>
																			</div>
																			<div class="facility_items">
																				<label class="bui-checkbox">
																					<input type="checkbox"
																						class="bui-checkbox__input"
																						name="" />
																					<span class="bui-checkbox__label">
																						QR code scan
																					</span>
																				</label>
																			</div>
																			<div class="facility_items">
																				<label class="bui-checkbox">
																					<input type="checkbox"
																						class="bui-checkbox__input"
																						name="" />
																					<span class="bui-checkbox__label">
																						Downloadable check-in app
																					</span>
																				</label>
																			</div>
																		</div>
																	</div>
																</div>

															</div>
														</div>
													</div>
												</div>
											</div>
										</fieldset>
									</div>
									<!-- Check-in services -->

									<!-- Activities -->
									<div class="facilities_section">
										<fieldset>
											<legend>Activities</legend>
											<div class="row">

												<ul class="col-sm-6">
													<li id="container_215" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Tennis equipment
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_215" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_215" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
															<div class="col-sm-5">
																<select class="form-control facility_select">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>
														</div>
													</li>

													<li id="container_216" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Badminton equipment
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_216" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_216" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
															<div class="col-sm-5">
																<select class="form-control facility_select">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>
														</div>
													</li>

													<li id="container_302" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Beach
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_302" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_302" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
														<div class="facility_attr_wrap clearfix">
															<ul class="col-sm-12">
																<li id="container_114"
																	class="facility_items facility_item facility_items_child">
																	<div class="clearfix">
																		<div class="col-sm-8">
																			<span class="">
																				Private beach area
																			</span>
																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">
																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_114" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_114" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>
																		</div>
																		<div class="col-sm-5">
																			<select
																				class="form-control facility_select">
																				<option value="3">
																					Please select
																				</option>
																				<option value="4">
																					Free
																				</option>
																				<option value="5">
																					Paid
																				</option>
																			</select>
																		</div>
																	</div>
																</li>
																<li id="container_146"
																	class="facility_items facility_item facility_items_child">
																	<div class="clearfix">
																		<div class="col-sm-8">
																			<span class="">
																				Beachfront
																			</span>
																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">
																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_146" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_146" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>
																		</div>
																	</div>
																</li>
															</ul>
														</div>

													</li>

													<li id="container_400" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Temporary art galleries
																	<span class="badge_new badge_new_subitem">
																		New
																	</span>
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_400" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_400" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
															<div class="col-sm-5">
																<select class="form-control facility_select">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>
														</div>

														<div class="facility_attr_wrap clearfix">
															<div class="facility_attr_row clearfix">
																<label class="col-sm-12 row facility_attr_row_body">
																	<span class="col-sm-5 facility_attr_label">
																		Onsite/Offsite
																	</span>
																	<span class="col-sm-5 control-group">
																		<select class="form-control attribute">
																			<option value="0" selected="selected">
																				Please select
																			</option>
																			<option value="1">
																				On-site
																			</option>
																			<option value="2">
																				Off-site
																			</option>

																		</select>
																	</span>
																</label>
															</div>
														</div>
													</li>

													<li id="container_401" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Pub crawls
																	<span class="badge_new badge_new_subitem">
																		New
																	</span>
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_401" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_401" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
															<div class="col-sm-5">
																<select class="form-control facility_select">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>
														</div>
													</li>

													<li id="container_402" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Stand-up comedy
																	<span class="badge_new badge_new_subitem">
																		New
																	</span>
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_402" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_402" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
															<div class="col-sm-5">
																<select class="form-control facility_select">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>

														</div>
														<div class="facility_attr_wrap clearfix">
															<div class="facility_attr_row clearfix">
																<label class="col-sm-12 row facility_attr_row_body">
																	<span class="col-sm-5 facility_attr_label">
																		Onsite/Offsite
																	</span>
																	<span class="col-sm-5 control-group">
																		<select class="form-control attribute">
																			<option value="0" selected="selected">
																				Please select
																			</option>
																			<option value="1">
																				On-site
																			</option>
																			<option value="2">
																				Off-site
																			</option>
																		</select>
																	</span>
																</label>
															</div>
														</div>
													</li>

													<li id="container_403" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Movie nights
																	<span class="badge_new badge_new_subitem">
																		New
																	</span>
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_403" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_403" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
															<div class="col-sm-5">
																<select class="form-control facility_select">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>
														</div>

														<div class="facility_attr_wrap clearfix">
															<div class="facility_attr_row clearfix">
																<label class="col-sm-12 row facility_attr_row_body">
																	<span class="col-sm-5 facility_attr_label">
																		Onsite/Offsite
																	</span>
																	<span class="col-sm-5 control-group">
																		<select class="form-control attribute">
																			<option value="0" selected="selected">
																				Please select
																			</option>
																			<option value="1">
																				On-site
																			</option>
																			<option value="2">
																				Off-site
																			</option>
																		</select>
																	</span>
																</label>
															</div>
														</div>
													</li>
												</ul>

												<ul class="col-sm-6">

													<li id="container_9" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Tennis court
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_9" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_9" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
															<div class="col-sm-5">
																<select class="form-control facility_select">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>
														</div>
														<div class="facility_attr_wrap clearfix">
															<div class="facility_attr_row clearfix">
																<label class="col-sm-12 row facility_attr_row_body">
																	<span class="col-sm-5 facility_attr_label">
																		Onsite/Offsite
																	</span>
																	<span class="col-sm-5 control-group">
																		<select class="form-control attribute">
																			<option value="0" selected="selected">
																				Please select
																			</option>
																			<option value="1">
																				On-site
																			</option>
																			<option value="2">
																				Off-site
																			</option>
																		</select>
																	</span>
																</label>
															</div>
														</div>
													</li>

													<li id="container_57" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Billiards
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_57" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_57" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
															<div class="col-sm-5">
																<select class="form-control facility_select">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>
														</div>
													</li>

													<li id="container_58" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Table tennis
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_58" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_58" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
															<div class="col-sm-5">
																<select class="form-control facility_select">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>
														</div>
													</li>

													<li id="container_62" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Darts
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_62" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_62" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
															<div class="col-sm-5">
																<select class="form-control facility_select">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>
														</div>
													</li>

													<li id="container_87" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Squash
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_87" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_87" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
															<div class="col-sm-5">
																<select class="form-control facility_select">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>
														</div>

														<div class="facility_attr_wrap clearfix">
															<div class="facility_attr_row clearfix">
																<label class="col-sm-12 row facility_attr_row_body">
																	<span class="col-sm-5 facility_attr_label">
																		Onsite/Offsite
																	</span>
																	<span class="col-sm-5 control-group">
																		<select class="form-control attribute">
																			<option value="0" selected="selected">
																				Please select
																			</option>
																			<option value="1">
																				On-site
																			</option>
																			<option value="2">
																				Off-site
																			</option>
																		</select>
																	</span>
																</label>
															</div>
														</div>
													</li>

													<li id="container_77" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Bowling
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_77" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_77" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>

															<div class="col-sm-5">
																<select class="form-control facility_select">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>
														</div>

														<div class="facility_attr_wrap clearfix">
															<div class="facility_attr_row clearfix">
																<label class="col-sm-12 row facility_attr_row_body">
																	<span class="col-sm-5 facility_attr_label">
																		Onsite/Offsite
																	</span>
																	<span class="col-sm-5 control-group">
																		<select class="form-control attribute">
																			<option value="0" selected="selected">
																				Please select
																			</option>
																			<option value="1">
																				On-site
																			</option>
																			<option value="2">
																				Off-site
																			</option>
																		</select>
																	</span>
																</label>
															</div>
														</div>
													</li>
													<li id="container_97" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Mini golf
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_97" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_97" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
															<div class="col-sm-5">
																<select class="form-control facility_select">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</fieldset>
									</div>

									<!-- Food & drink -->
									<div class="facilities_section">
										<fieldset>
											<legend>Food & drink</legend>
											<div class="row">
												<ul class=" col-sm-6">

													<li id="container_176" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">
																	Kid meals


																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_176" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_176" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>


															<div class="col-sm-5">
																<select class="form-control facility_select">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>



														</div>

														<div class="facility_attr_wrap clearfix
	">
															<div class="facility_attr_row clearfix">
																<label class="col-sm-12 row facility_attr_row_body">
																	<span class="col-sm-5 facility_attr_label">
																		Age restriction
																	</span>
																	<span class="col-sm-5">
																		<select
																			class='attribute form-control facility_select'>
																			<option value="0" selected="selected">
																				Please select
																			</option>
																			<option value="999">
																				No restriction
																			</option>

																			<option value="1">
																				1
																			</option>

																		</select>
																	</span>
																</label>
															</div>

														</div>

													</li>

													<li id="container_177" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">
																	Kid-friendly buffet
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_177" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_177" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>

														</div>

														<div class="facility_attr_wrap clearfix">

															<div class="facility_attr_row clearfix">
																<label class="col-sm-12 row facility_attr_row_body">
																	<span class="col-sm-5 facility_attr_label">
																		Age restriction
																	</span>
																	<span class="col-sm-5">
																		<select
																			class='attribute form-control facility_select'>
																			<option value="0" selected="selected">
																				Please select
																			</option>
																			<option value="999">
																				No restriction
																			</option>
																			<option value="1">
																				1
																			</option>
																		</select>
																	</span>
																</label>
															</div>
														</div>

													</li>

													<li id="container_203" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Wine/champagne

																	<span class="facility_item__name__description">Wine
																		or
																		champagne is available at the property</span>
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_203" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_203" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>

															<div class="col-sm-5">
																<select class="form-control facility_select"
																	style="display:none;">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>

														</div>

													</li>

													<li id="container_205" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Fruits
																	<span
																		class="facility_item__name__description">Fruits
																		are
																		provided in your room</span>
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_205" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_205" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>
															<div class="col-sm-5">
																<select class="form-control facility_select"
																	style="display:none;">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>
														</div>
													</li>

													<li id="container_219" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Coffee house on site
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_219" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_219" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>
														</div>

														<div class="facility_attr_wrap clearfix">
															<div class="facility_attr_row clearfix">
																<div class="facility-attr--name-weektimes weektimes">
																	<div class="weektimes--create">
																		<div class="col-sm-12">
																			<label class="has_facility">
																				Tell guests when they can use this
																				facility
																			</label>
																		</div>
																		<div
																			class="col-md-12 col-lg-4 control-group attrib_row">
																			<select
																				class="form-control weektimes--select"
																				data-name="day"
																				data-placeholder="Day"></select>
																		</div>
																		<div
																			class="col-sm-6 col-md-6 col-lg-2 attrib_pad control-group attrib_row">
																			<select
																				class="form-control weektimes--select"
																				data-name="from"
																				data-placeholder="From"></select>
																		</div>
																		<div
																			class="col-sm-6 col-md-6 col-lg-2 attrib_pad control-group attrib_row">
																			<select
																				class="form-control weektimes--select"
																				data-name="to"
																				data-placeholder="To"></select>
																		</div>
																		<div class="col-sm-12 col-md-4 attrib_row">
																			<a href="{{ url("#") }}"
																				class="btn btn-default weektimes--add">
																				Add
																			</a>
																		</div>
																	</div>
																	<div class="col-sm-12">
																		<div class="attrib_error weektimes--error">
																		</div>
																	</div>
																	<div class="col-sm-12">
																		<div class="times_preview weektimes--list">
																		</div>
																	</div>

																</div>
															</div>
														</div>

													</li>

													<li id="container_117" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">
																<span class="facility-item__name">
																	Snack bar
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_117" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_117" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>
														</div>

													</li>

												</ul>
												<ul class="col-sm-6">

													<li id="container_73" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">

																<span class="facility-item__name">
																	Packed lunches
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_73" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_73" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>
														</div>

													</li>

													<li id="container_72" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	BBQ facilities
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_72" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_72" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>
															<div class="col-sm-5">
																<select class="form-control facility_select">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>
														</div>

													</li>
													<li id="container_135" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">
																	Vending machine (drinks)
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_135" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_135" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>
														</div>

													</li>

													<li id="container_136" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Vending machine (snacks)
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_136" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_136" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>
														</div>

													</li>

													<li id="container_133" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">
																<span class="facility-item__name">
																	Special diet menus (on request)
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_133" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_133" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>
														</div>

													</li>

												</ul>
											</div>
										</fieldset>
									</div>
									<!-- Food & drink -->


									<!-- Pool and wellness -->
									<div class="facilities_section">
										<fieldset>
											<legend>Pool and wellness</legend>
											<div class="row">

												<ul class=" col-sm-6">

													<li id="container_168" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Water slide




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_168" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_168" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>

													<li id="container_220" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Sun loungers or beach chairs




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_220" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_220" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>


															<div class="col-sm-5">
																<select class="form-control facility_select"
																	style="display:none;">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>




														</div>

													</li>

													<li id="container_221" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Sun umbrellas




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_221" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_221" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>


															<div class="col-sm-5">
																<select class="form-control facility_select"
																	style="display:none;">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>




														</div>

													</li>

													<li id="container_226" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Beauty Services




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_226" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_226" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>



														</div>

														<div class="facility_attr_wrap clearfix
	">






															<ul class="col-sm-12">

















																<li id="container_227"
																	class="facility_items facility_item facility_items_child">
																	<div class="clearfix">

																		<div class="col-sm-8">

																			<span class="">






																				Facial treatments




																			</span>









																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">

																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_227" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_227" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>

																		</div>




																	</div>
																</li>

















																<li id="container_228"
																	class="facility_items facility_item facility_items_child">
																	<div class="clearfix">

																		<div class="col-sm-8">

																			<span class="">






																				Waxing services




																			</span>









																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">

																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_228" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_228" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>

																		</div>




																	</div>
																</li>

















																<li id="container_229"
																	class="facility_items facility_item facility_items_child">
																	<div class="clearfix">

																		<div class="col-sm-8">

																			<span class="">






																				Make up services




																			</span>









																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">

																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_229" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_229" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>

																		</div>




																	</div>
																</li>

















																<li id="container_230"
																	class="facility_items facility_item facility_items_child">
																	<div class="clearfix">

																		<div class="col-sm-8">

																			<span class="">






																				Hair treatments




																			</span>









																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">

																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_230" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_230" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>

																		</div>




																	</div>
																</li>

















																<li id="container_231"
																	class="facility_items facility_item facility_items_child">
																	<div class="clearfix">

																		<div class="col-sm-8">

																			<span class="">






																				Manicure




																			</span>









																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">

																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_231" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_231" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>

																		</div>




																	</div>
																</li>

















																<li id="container_232"
																	class="facility_items facility_item facility_items_child">
																	<div class="clearfix">

																		<div class="col-sm-8">

																			<span class="">






																				Pedicure




																			</span>









																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">

																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_232" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_232" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>

																		</div>




																	</div>
																</li>

















																<li id="container_233"
																	class="facility_items facility_item facility_items_child">
																	<div class="clearfix">

																		<div class="col-sm-8">

																			<span class="">






																				Hair cut




																			</span>









																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">

																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_233" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_233" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>

																		</div>




																	</div>
																</li>

















																<li id="container_234"
																	class="facility_items facility_item facility_items_child">
																	<div class="clearfix">

																		<div class="col-sm-8">

																			<span class="">






																				Hair colouring




																			</span>









																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">

																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_234" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_234" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>

																		</div>




																	</div>
																</li>

















																<li id="container_235"
																	class="facility_items facility_item facility_items_child">
																	<div class="clearfix">

																		<div class="col-sm-8">

																			<span class="">






																				Hair styling




																			</span>









																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">

																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_235" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_235" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>

																		</div>




																	</div>
																</li>

















																<li id="container_236"
																	class="facility_items facility_item facility_items_child">
																	<div class="clearfix">

																		<div class="col-sm-8">

																			<span class="">






																				Body treatments




																			</span>









																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">

																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_236" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_236" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>

																		</div>




																	</div>
																</li>

















																<li id="container_237"
																	class="facility_items facility_item facility_items_child">
																	<div class="clearfix">

																		<div class="col-sm-8">

																			<span class="">






																				Body scrub




																			</span>









																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">

																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_237" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_237" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>

																		</div>




																	</div>
																</li>

















																<li id="container_238"
																	class="facility_items facility_item facility_items_child">
																	<div class="clearfix">

																		<div class="col-sm-8">

																			<span class="">






																				Body wrap




																			</span>









																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">

																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_238" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_238" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>

																		</div>




																	</div>
																</li>

















																<li id="container_239"
																	class="facility_items facility_item facility_items_child">
																	<div class="clearfix">

																		<div class="col-sm-8">

																			<span class="">






																				Light therapy




																			</span>









																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">

																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_239" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_239" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>

																		</div>




																	</div>
																</li>

															</ul>



														</div>

													</li>

												</ul>
												<ul class="col-sm-6">

													<li id="container_254" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Yoga classes




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_254" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_254" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>

													<li id="container_256" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Personal trainer




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_256" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_256" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>

													<li id="container_257" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Fitness/spa locker rooms




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_257" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_257" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>

													<li id="container_258" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Kids&#39; pool




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_258" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_258" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>


															<div class="col-sm-5">
																<select class="form-control facility_select"
																	style="display:none;">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>





														</div>

														<div class="facility_attr_wrap clearfix
	">











															<div class="facility_attr_row clearfix">
																<div class="col-sm-12 checkbox">
																	<label>
																		<input type="checkbox" class="attribute"
																			data-type="Boolean" data-mappingid="1"
																			data-facilityid="258" value="1">
																		There is a shallow end
																	</label>
																</div>
															</div>











															<div class="facility_attr_row clearfix">
																<label class="col-sm-12 row facility_attr_row_body">
																	<span class="col-sm-5 facility_attr_label">
																		Length (m)
																	</span>
																	<span class="col-sm-5">
																		<input type="text" data-type="Numeric"
																			data-mappingid="2" data-facilityid="258"
																			value="0" maxlength="20"
																			class="form-control attribute allownumericwithdecimal">
																	</span>
																</label>
															</div>












															<div class="facility_attr_row clearfix">
																<label class="col-sm-12 row facility_attr_row_body">
																	<span class="col-sm-5 facility_attr_label">
																		Width (m)
																	</span>
																	<span class="col-sm-5">
																		<input type="text" data-type="Numeric"
																			data-mappingid="3" data-facilityid="258"
																			value="0" maxlength="20"
																			class="form-control attribute allownumericwithdecimal">
																	</span>
																</label>
															</div>












															<div class="facility_attr_row clearfix">
																<label class="col-sm-12 row facility_attr_row_body">
																	<span class="col-sm-5 facility_attr_label">
																		Depth min. (m)
																	</span>
																	<span class="col-sm-5">
																		<input type="text" data-type="Numeric"
																			data-mappingid="4" data-facilityid="258"
																			value="0" maxlength="20"
																			class="form-control attribute allownumericwithdecimal">
																	</span>
																</label>
															</div>












															<div class="facility_attr_row clearfix">
																<label class="col-sm-12 row facility_attr_row_body">
																	<span class="col-sm-5 facility_attr_label">
																		Depth max. (m)
																	</span>
																	<span class="col-sm-5">
																		<input type="text" data-type="Numeric"
																			data-mappingid="5" data-facilityid="258"
																			value="0" maxlength="20"
																			class="form-control attribute allownumericwithdecimal">
																	</span>
																</label>
															</div>







														</div>

													</li>

												</ul>


											</div>
										</fieldset>
									</div>
									<!-- Pool and wellness -->

									<!-- Transport -->
									<div class="facilities_section">
										<fieldset>
											<legend>Transport</legend>
											<div class="row">
												<ul class=" col-sm-6">
													<li id="container_183" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">
																	Public transport tickets

																	<span
																		class="facility_item__name__description">Public
																		transport tickets are available</span>

																</span>

															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_183" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_183" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>


															<div class="col-sm-5">
																<select class="form-control facility_select">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>
														</div>

													</li>

													<li id="container_304" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">

																	Shuttle service

																	<span class="facility_item__name__description">The
																		property
																		provides or organises transport for
																		guests</span>
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_304" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_304" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>
														</div>

														<div class="facility_attr_wrap clearfix">
															<ul class="col-sm-12">

																<li id="container_128"
																	class="facility_items facility_item facility_items_child">
																	<div class="clearfix">

																		<div class="col-sm-8">
																			<span class="">
																				Shuttle service (free)
																			</span>

																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">

																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_128" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_128" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>

																		</div>




																	</div>
																</li>

																<li id="container_129"
																	class="facility_items facility_item facility_items_child">
																	<div class="clearfix">
																		<div class="col-sm-8">
																			<span class="">
																				Shuttle service (additional charge)
																			</span>
																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">

																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_129" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_129" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>
																		</div>
																	</div>
																</li>
															</ul>
														</div>

													</li>

												</ul>
												<ul class="col-sm-6">

													<li id="container_75" class="facility_items facility_item">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Car hire
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_75" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_75" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>
															</div>
														</div>
													</li>

													<li id="container_parking"
														class="facility_items facility_item facility_items_active">
														<div class="facility_items_body clearfix">
															<div class="col-sm-8">
																<span class="facility-item__name">
																	Is parking available to guests?
																</span>
															</div>
															<div class="col-sm-4 facility-item__radio-buttons">
																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="parking_is_available"
																			checked />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="parking_is_available" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>

														</div>

													</li>
												</ul>


											</div>
										</fieldset>
									</div>
									<!-- Transport -->

									<!-- Reception services -->
									<div class="facilities_section">
										<fieldset>
											<legend>Reception services</legend>



											<div class="row">








												<ul class=" col-sm-6">



















													<li id="container_465" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Invoice provided




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_465" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_465" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_127" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Private check-in/check-out




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_127" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_127" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_49" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Express check-in/check-out




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_49" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_49" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>


															<div class="col-sm-5">
																<select class="form-control facility_select"
																	style="display:none;">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>




														</div>

													</li>





















													<li id="container_124" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Concierge service




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_124" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_124" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>


												</ul>
												<ul class="col-sm-6">




















													<li id="container_78" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Tour desk




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_78" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_78" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_53" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Currency exchange




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_53" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_53" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_111" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	ATM/cash machine on site




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_111" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_111" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>




												</ul>


											</div>
										</fieldset>
									</div>
									<!-- Reception services -->

									<!-- Common areas -->
									<div class="facilities_section">
										<fieldset>
											<legend>Common areas</legend>



											<div class="row">










												<ul class=" col-sm-6">



















													<li id="container_222" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Outdoor furniture




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_222" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_222" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_224" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Picnic area




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_224" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_224" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_511" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Indoor fireplace



																	<span class="badge_new badge_new_subitem">
																		New
																	</span>


																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_511" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_511" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_225" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Outdoor fireplace




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_225" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_225" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_118" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Sun terrace




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_118" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_118" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>


												</ul>
												<ul class="col-sm-6">




















													<li id="container_141" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Shared kitchen




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_141" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_141" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_143" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Shared lounge/TV area




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_143" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_143" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_29" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Games room




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_29" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_29" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_71" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Chapel/shrine




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_71" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_71" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>




												</ul>


											</div>
										</fieldset>
									</div>
									<!-- Common areas -->

									<!-- Entertainment -->
									<div class="facilities_section">
										<fieldset>
											<legend>Entertainment and family services</legend>



											<div class="row">










												<ul class=" col-sm-6">



















													<li id="container_170" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Board games/puzzles




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_170" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_170" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_172" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Indoor play area




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_172" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_172" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_173" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Kids&#39; outdoor play equipment




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_173" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_173" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_174" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Baby safety gates




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_174" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_174" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_214" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Strollers




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_214" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_214" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_147" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Evening entertainment




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_147" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_147" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>


															<div class="col-sm-5">
																<select class="form-control facility_select"
																	style="display:none;">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>




														</div>

													</li>


												</ul>
												<ul class="col-sm-6">




















													<li id="container_126" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Nightclub/DJ




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_126" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_126" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>


															<div class="col-sm-5">
																<select class="form-control facility_select"
																	style="display:none;">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>




														</div>

													</li>





















													<li id="container_30" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Casino




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_30" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_30" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_59" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Karaoke




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_59" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_59" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>


															<div class="col-sm-5">
																<select class="form-control facility_select"
																	style="display:none;">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>




														</div>

													</li>





















													<li id="container_125" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Entertainment staff




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_125" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_125" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_56" class="facility_items facility_item">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Children&#39;s playground




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_56" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_56" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>






														</div>

														<div class="facility_attr_wrap clearfix
	">












															<div class="facility_attr_row clearfix">
																<div class="facility-attr--name-weektimes weektimes"
																	data-component="week_times">
																	<div class="weektimes--create">
																		<div class="col-sm-12">
																			<label class="has_facility">
																				Tell guests when they can use this
																				facility
																			</label>
																		</div>
																		<div
																			class="col-md-12 col-lg-4 control-group attrib_row">
																			<select
																				class="form-control weektimes--select"
																				data-name="day"
																				data-placeholder="Day"></select>
																		</div>
																		<div
																			class="col-sm-6 col-md-6 col-lg-2 attrib_pad control-group attrib_row">
																			<select
																				class="form-control weektimes--select"
																				data-name="from"
																				data-placeholder="From"></select>
																		</div>
																		<div
																			class="col-sm-6 col-md-6 col-lg-2 attrib_pad control-group attrib_row">
																			<select
																				class="form-control weektimes--select"
																				data-name="to"
																				data-placeholder="To"></select>
																		</div>
																		<div class="col-sm-12 col-md-4 attrib_row">
																			<a href="{{ url("#") }}"
																				class="btn btn-default weektimes--add">
																				Add
																			</a>
																		</div>
																	</div>
																	<div class="col-sm-12">
																		<div class="attrib_error weektimes--error">
																		</div>
																	</div>
																	<div class="col-sm-12">
																		<div class="times_preview weektimes--list">
																		</div>
																	</div>

																</div>
															</div>






														</div>

													</li>





















													<li id="container_21" class="facility_items facility_item"
														data-id="21" data-kind="free_or_paid">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Babysitting/child services




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_21" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_21" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>


															<div class="col-sm-5">
																<select class="form-control facility_select"
																	style="display:none;">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>




														</div>

													</li>




												</ul>


											</div>
										</fieldset>
									</div>
									<!-- Entertainment -->

									<!-- Cleaning services -->
									<div class="facilities_section">
										<fieldset>
											<legend>Cleaning services</legend>



											<div class="row">








												<ul class=" col-sm-6">



















													<li id="container_23" class="facility_items facility_item"
														data-id="23" data-kind="free_or_paid">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Dry cleaning




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_23" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_23" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>


															<div class="col-sm-5">
																<select class="form-control facility_select"
																	style="display:none;">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>




														</div>

													</li>





















													<li id="container_44" class="facility_items facility_item"
														data-id="44" data-kind="free_or_paid">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Ironing service




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_44" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_44" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>


															<div class="col-sm-5">
																<select class="form-control facility_select"
																	style="display:none;">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>




														</div>

													</li>





















													<li id="container_22" class="facility_items facility_item"
														data-id="22" data-kind="free_or_paid">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Laundry




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_22" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_22" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>


															<div class="col-sm-5">
																<select class="form-control facility_select"
																	style="display:none;">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>






														</div>

														<div class="facility_attr_wrap clearfix
	">












															<div class="facility_attr_row clearfix">
																<div class="facility-attr--name-weektimes weektimes"
																	data-component="week_times">
																	<div class="weektimes--create">
																		<div class="col-sm-12">
																			<label class="has_facility">
																				Tell guests when they can use this
																				facility
																			</label>
																		</div>
																		<div
																			class="col-md-12 col-lg-4 control-group attrib_row">
																			<select
																				class="form-control weektimes--select"
																				data-name="day"
																				data-placeholder="Day"></select>
																		</div>
																		<div
																			class="col-sm-6 col-md-6 col-lg-2 attrib_pad control-group attrib_row">
																			<select
																				class="form-control weektimes--select"
																				data-name="from"
																				data-placeholder="From"></select>
																		</div>
																		<div
																			class="col-sm-6 col-md-6 col-lg-2 attrib_pad control-group attrib_row">
																			<select
																				class="form-control weektimes--select"
																				data-name="to"
																				data-placeholder="To"></select>
																		</div>
																		<div class="col-sm-12 col-md-4 attrib_row">
																			<a href="{{ url("#") }}"
																				class="btn btn-default weektimes--add">
																				Add
																			</a>
																		</div>
																	</div>
																	<div class="col-sm-12">
																		<div class="attrib_error weektimes--error">
																		</div>
																	</div>
																	<div class="col-sm-12">
																		<div class="times_preview weektimes--list">
																		</div>
																	</div>

																</div>
															</div>






														</div>

													</li>


												</ul>
												<ul class="col-sm-6">




















													<li id="container_158" class="facility_items facility_item"
														data-id="158" data-kind="free_or_paid">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Daily housekeeping




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_158" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_158" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>


															<div class="col-sm-5">
																<select class="form-control facility_select"
																	style="display:none;">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>




														</div>

													</li>





















													<li id="container_134" class="facility_items facility_item"
														data-id="134" data-kind="free_or_paid">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Trouser press




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_134" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_134" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>


															<div class="col-sm-5">
																<select class="form-control facility_select"
																	style="display:none;">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>




														</div>

													</li>




												</ul>


											</div>
										</fieldset>
									</div>
									<!-- Cleaning services -->

									<!-- Business facilities -->
									<div class="facilities_section">
										<fieldset>
											<legend>Business facilities</legend>



											<div class="row">








												<ul class=" col-sm-6">



















													<li id="container_6" class="facility_items facility_item"
														data-id="6" data-kind="free_or_paid">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Meeting/banquet facilities




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_6" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_6" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>


															<div class="col-sm-5">
																<select class="form-control facility_select"
																	style="display:none;">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>




														</div>

													</li>





















													<li id="container_20" class="facility_items facility_item"
														data-id="20" data-kind="free_or_paid">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Business centre




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_20" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_20" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>


															<div class="col-sm-5">
																<select class="form-control facility_select"
																	style="display:none;">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>




														</div>

													</li>


												</ul>
												<ul class="col-sm-6">




















													<li id="container_81" class="facility_items facility_item"
														data-id="81" data-kind="free_or_paid">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Fax/photocopying




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_81" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_81" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>


															<div class="col-sm-5">
																<select class="form-control facility_select"
																	style="display:none;">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>




														</div>

													</li>




												</ul>


											</div>
										</fieldset>
									</div>
									<!-- Business facilities -->

									<!-- Shops -->
									<div class="facilities_section">
										<fieldset>
											<legend>Shops</legend>



											<div class="row">








												<ul class=" col-sm-6">



















													<li id="container_145" class="facility_items facility_item"
														data-id="145">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Minimarket on site




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_145" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_145" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>


												</ul>
												<ul class="col-sm-6">




















													<li id="container_27" class="facility_items facility_item"
														data-id="27">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Barber/beauty shop




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_27" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_27" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>




												</ul>


											</div>
										</fieldset>
									</div>
									<!-- Shops -->

									<!-- Miscellaneous -->
									<div class="facilities_section">
										<fieldset id="29" data-component="facilities/yes-no-facilities">
											<legend>Miscellaneous</legend>



											<div class="row">










												<ul class=" col-sm-6">



















													<li id="container_217" class="facility_items facility_item"
														data-id="217">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Pet basket




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_217" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_217" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_218" class="facility_items facility_item"
														data-id="218">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Pet bowls




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_218" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_218" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_419" class="facility_items facility_item"
														data-id="419">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Key access



																	<span class="badge_new badge_new_subitem">
																		New
																	</span>


																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_419" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_419" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_420" class="facility_items facility_item"
														data-id="420">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Key card access



																	<span class="badge_new badge_new_subitem">
																		New
																	</span>


																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_420" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_420" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_149" class="facility_items facility_item"
														data-id="149">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Adult only




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_149"
																			data-message="Sorry, you can&#39;t select this while the &#39;family room&#39; option is selected." />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_149" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_101" class="facility_items facility_item"
														data-id="101">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Allergy-free room




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_101" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_101" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_108" class="facility_items facility_item"
														data-id="108">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Non-smoking throughout




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_108" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_108" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>


												</ul>
												<ul class="col-sm-6">




















													<li id="container_110" class="facility_items facility_item"
														data-id="110">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Designated smoking area




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_110" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_110" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_25" class="facility_items facility_item"
														data-id="25">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Facilities for disabled guests




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_25" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_25" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>






														</div>

														<div class="facility_attr_wrap clearfix
	">






															<ul class="col-sm-12">

















																<li id="container_185"
																	class="facility_items facility_item facility_items_child"
																	data-id="185">
																	<div class="clearfix">

																		<div class="col-sm-8">

																			<span class="">






																				Wheelchair accessible

																				<span
																					class="facility_item__name__description">A
																					person in a wheelchair can easily
																					reach the
																					room without obstacles (not limited
																					to
																					stairs, the entire process must be
																					easy)</span>



																			</span>









																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">

																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_185" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_185" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>

																		</div>




																	</div>
																</li>

















																<li id="container_186"
																	class="facility_items facility_item facility_items_child"
																	data-id="186">
																	<div class="clearfix">

																		<div class="col-sm-8">

																			<span class="">






																				Toilet with grab rails

																				<span
																					class="facility_item__name__description">The
																					toilet has grab rails by the
																					side</span>



																			</span>









																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">

																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_186" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_186" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>

																		</div>




																	</div>
																</li>

















																<li id="container_187"
																	class="facility_items facility_item facility_items_child"
																	data-id="187">
																	<div class="clearfix">

																		<div class="col-sm-8">

																			<span class="">






																				Higher level toilet

																				<span
																					class="facility_item__name__description">The
																					toilet is at least 51cm off the
																					ground</span>



																			</span>









																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">

																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_187" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_187" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>

																		</div>




																	</div>
																</li>

















																<li id="container_188"
																	class="facility_items facility_item facility_items_child"
																	data-id="188">
																	<div class="clearfix">

																		<div class="col-sm-8">

																			<span class="">






																				Lower bathroom sink




																			</span>









																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">

																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_188" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_188" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>

																		</div>




																	</div>
																</li>

















																<li id="container_189"
																	class="facility_items facility_item facility_items_child"
																	data-id="189">
																	<div class="clearfix">

																		<div class="col-sm-8">

																			<span class="">






																				Emergency cord in bathroom

																				<span
																					class="facility_item__name__description">A
																					cord that can be pulled in case of
																					emergency
																					is in the bathroom</span>



																			</span>









																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">

																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_189" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_189" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>

																		</div>




																	</div>
																</li>

















																<li id="container_211"
																	class="facility_items facility_item facility_items_child"
																	data-id="211">
																	<div class="clearfix">

																		<div class="col-sm-8">

																			<span class="">






																				Visual aids: Braille

																				<span
																					class="facility_item__name__description">Braille
																					is provided for visitors with
																					impaired or no
																					vision</span>



																			</span>









																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">

																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_211" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_211" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>

																		</div>




																	</div>
																</li>

















																<li id="container_212"
																	class="facility_items facility_item facility_items_child"
																	data-id="212">
																	<div class="clearfix">

																		<div class="col-sm-8">

																			<span class="">






																				Visual aids: Tactile signs

																				<span
																					class="facility_item__name__description">e.g.
																					http://www.lindensigns.org/images/tactile_signs_DDA.jpg</span>



																			</span>









																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">

																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_212" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_212" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>

																		</div>




																	</div>
																</li>

















																<li id="container_213"
																	class="facility_items facility_item facility_items_child"
																	data-id="213">
																	<div class="clearfix">

																		<div class="col-sm-8">

																			<span class="">






																				Auditory guidance

																				<span
																					class="facility_item__name__description">e.g.
																					talking elevator</span>



																			</span>









																		</div>
																		<div
																			class="col-sm-4 facility-item__radio-buttons">

																			<div class="bui-inline-container">
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="1"
																						name="facility_213" />
																					<span class="bui-radio__label">
																						Yes
																					</span>
																				</label>
																				<label class="bui-radio">
																					<input class="bui-radio__input"
																						type="radio" value="0"
																						name="facility_213" />
																					<span class="bui-radio__label">
																						No
																					</span>
																				</label>
																			</div>

																		</div>




																	</div>
																</li>

															</ul>



														</div>

													</li>





















													<li id="container_48" class="facility_items facility_item"
														data-id="48">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Lift




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_48" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_48" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_64" class="facility_items facility_item"
														data-id="64">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Soundproof rooms




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_64" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_64" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_80" class="facility_items facility_item"
														data-id="80">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Heating




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_80" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_80" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_142" class="facility_items facility_item"
														data-id="142">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Lockers




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_142" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_142" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_91" class="facility_items facility_item"
														data-id="91" data-kind="free_or_paid">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Luggage storage




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_91" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_91" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>


															<div class="col-sm-5">
																<select class="form-control facility_select"
																	style="display:none;">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>





														</div>

														<div class="facility_attr_wrap clearfix
	">












															<div class="facility_attr_row clearfix">
																<div class="facility-attr--name-weektimes weektimes"
																	data-component="week_times">
																	<div class="weektimes--create">
																		<div class="col-sm-12">
																			<label class="has_facility">
																				Tell guests when they can use this
																				facility
																			</label>
																		</div>
																		<div
																			class="col-md-12 col-lg-4 control-group attrib_row">
																			<select
																				class="form-control weektimes--select"
																				data-name="day"
																				data-placeholder="Day"></select>
																		</div>
																		<div
																			class="col-sm-6 col-md-6 col-lg-2 attrib_pad control-group attrib_row">
																			<select
																				class="form-control weektimes--select"
																				data-name="from"
																				data-placeholder="From"></select>
																		</div>
																		<div
																			class="col-sm-6 col-md-6 col-lg-2 attrib_pad control-group attrib_row">
																			<select
																				class="form-control weektimes--select"
																				data-name="to"
																				data-placeholder="To"></select>
																		</div>
																		<div class="col-sm-12 col-md-4 attrib_row">
																			<a href="{{ url("#") }}"
																				class="btn btn-default weektimes--add">
																				Add
																			</a>
																		</div>
																	</div>
																	<div class="col-sm-12">
																		<div class="attrib_error weektimes--error">
																		</div>
																	</div>
																	<div class="col-sm-12">
																		<div class="times_preview weektimes--list">
																		</div>
																	</div>

																</div>
															</div>






														</div>

													</li>




												</ul>


											</div>
										</fieldset>
									</div>
									<!-- Miscellaneous -->

									<!-- Safety & security -->
									<div class="facilities_section">
										<fieldset>
											<legend>Safety & security</legend>



											<div class="row">










												<ul class=" col-sm-6">



















													<li id="container_418" class="facility_items facility_item"
														data-id="418">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	24-hour security



																	<span class="badge_new badge_new_subitem">
																		New
																	</span>


																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_418" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_418" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_421" class="facility_items facility_item"
														data-id="421">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Security alarm



																	<span class="badge_new badge_new_subitem">
																		New
																	</span>


																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_421" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_421" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_422" class="facility_items facility_item"
														data-id="422">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Smoke alarms



																	<span class="badge_new badge_new_subitem">
																		New
																	</span>


																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_422" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_422" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_423" class="facility_items facility_item"
														data-id="423">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	CCTV in common areas



																	<span class="badge_new badge_new_subitem">
																		New
																	</span>


																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_423" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_423" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_424" class="facility_items facility_item"
														data-id="424">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	CCTV outside property



																	<span class="badge_new badge_new_subitem">
																		New
																	</span>


																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_424" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_424" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>


												</ul>
												<ul class="col-sm-6">




















													<li id="container_425" class="facility_items facility_item"
														data-id="425">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Fire extinguishers



																	<span class="badge_new badge_new_subitem">
																		New
																	</span>


																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_425" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_425" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_437" class="facility_items facility_item"
														data-id="437">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Carbon monoxide detector




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_437" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_437" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>

														</div>

													</li>



													<li id="container_438" class="facility_items facility_item"
														data-id="438">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Carbon monoxide sources






																	<span
																		class="facility_tooltip glyphicon glyphicon-question-sign"></span>

																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_438" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_438" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>





														</div>

													</li>





















													<li id="container_51" class="facility_items facility_item"
														data-id="51" data-kind="free_or_paid">
														<div class="facility_items_body clearfix">

															<div class="col-sm-8">

																<span class="facility-item__name">






																	Safety deposit box




																</span>









															</div>
															<div class="col-sm-4 facility-item__radio-buttons">

																<div class="bui-inline-container">
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="1" name="facility_51" />
																		<span class="bui-radio__label">
																			Yes
																		</span>
																	</label>
																	<label class="bui-radio">
																		<input class="bui-radio__input" type="radio"
																			value="0" name="facility_51" />
																		<span class="bui-radio__label">
																			No
																		</span>
																	</label>
																</div>

															</div>


															<div class="col-sm-5">
																<select class="form-control facility_select"
																	style="display:none;">
																	<option value="3">
																		Please select
																	</option>
																	<option value="4">
																		Free
																	</option>
																	<option value="5">
																		Paid
																	</option>
																</select>
															</div>




														</div>

													</li>




												</ul>


											</div>
										</fieldset>
									</div>
									<!-- Safety & security -->


									<!-- Sustainability practices -->
									<div class="facilities_section" id="sustainable-facilities">
										<fieldset>
											<legend>Sustainability practices</legend>

											<p>
												Listing your sustainability efforts can help customers understand how
												you are contributing. <a href='#'>Read
													more about sustainability initiatives.</a>
												<br>Entering any false information in the sustainability section goes
												against the Booking.com terms and conditions.
											</p>

											<div class="row">
												<ul class="category_with_subcategories_wrapper col-sm-12">

													<ul class="facilities_subsection col-sm-6">
														<h5>Have you implemented any of these practices to reduce waste?
														</h5>

														<li id="container_446" class="facility_items facility_item"
															data-id="446">
															<div class="facility_items_body clearfix">

																<div class="col-sm-8">

																	<span class="facility-item__name">






																		Water cooler/dispenser




																	</span>









																</div>
																<div class="col-sm-4 facility-item__radio-buttons">

																	<div class="bui-inline-container">
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="1" name="facility_446" />
																			<span class="bui-radio__label">
																				Yes
																			</span>
																		</label>
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="0" name="facility_446" />
																			<span class="bui-radio__label">
																				No
																			</span>
																		</label>
																	</div>

																</div>





															</div>

														</li>

														<li id="container_490" class="facility_items facility_item"
															data-id="490">
															<div class="facility_items_body clearfix">

																<div class="col-sm-8">

																	<span class="facility-item__name">






																		Recycling bins are available to guests and waste
																		is
																		recycled




																	</span>









																</div>
																<div class="col-sm-4 facility-item__radio-buttons">

																	<div class="bui-inline-container">
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="1" name="facility_490" />
																			<span class="bui-radio__label">
																				Yes
																			</span>
																		</label>
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="0" name="facility_490" />
																			<span class="bui-radio__label">
																				No
																			</span>
																		</label>
																	</div>

																</div>





															</div>

														</li>

														<li id="container_496" class="facility_items facility_item"
															data-id="496">
															<div class="facility_items_body clearfix">

																<div class="col-sm-8">

																	<span class="facility-item__name">






																		Food waste policy in place that includes
																		education, food
																		waste prevention, reduction, recycling, and
																		disposal




																	</span>









																</div>
																<div class="col-sm-4 facility-item__radio-buttons">

																	<div class="bui-inline-container">
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="1" name="facility_496" />
																			<span class="bui-radio__label">
																				Yes
																			</span>
																		</label>
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="0" name="facility_496" />
																			<span class="bui-radio__label">
																				No
																			</span>
																		</label>
																	</div>

																</div>





															</div>

														</li>
													</ul>

													<ul class="facilities_subsection col-sm-6">
														<h5>Have you implemented any of these practices to reduce water
															use?
														</h5>

														<li id="container_436" class="facility_items facility_item"
															data-id="436">
															<div class="facility_items_body clearfix">

																<div class="col-sm-8">

																	<span class="facility-item__name">






																		Guests have the option to reuse towels




																	</span>









																</div>
																<div class="col-sm-4 facility-item__radio-buttons">

																	<div class="bui-inline-container">
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="1" name="facility_436" />
																			<span class="bui-radio__label">
																				Yes
																			</span>
																		</label>
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="0" name="facility_436" />
																			<span class="bui-radio__label">
																				No
																			</span>
																		</label>
																	</div>

																</div>





															</div>

														</li>

														<li id="container_445" class="facility_items facility_item">
															<div class="facility_items_body clearfix">

																<div class="col-sm-8">

																	<span class="facility-item__name">






																		Guests can opt-out of daily cleaning service




																	</span>









																</div>
																<div class="col-sm-4 facility-item__radio-buttons">

																	<div class="bui-inline-container">
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="1" name="facility_445" />
																			<span class="bui-radio__label">
																				Yes
																			</span>
																		</label>
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="0" name="facility_445" />
																			<span class="bui-radio__label">
																				No
																			</span>
																		</label>
																	</div>

																</div>





															</div>

														</li>

														<li id="container_493" class="facility_items facility_item">
															<div class="facility_items_body clearfix">

																<div class="col-sm-8">

																	<span class="facility-item__name">






																		Only using water-efficient toilets (e.g.
																		low-flow
																		toilets, dual flush toilets)




																	</span>









																</div>
																<div class="col-sm-4 facility-item__radio-buttons">

																	<div class="bui-inline-container">
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="1" name="facility_493" />
																			<span class="bui-radio__label">
																				Yes
																			</span>
																		</label>
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="0" name="facility_493" />
																			<span class="bui-radio__label">
																				No
																			</span>
																		</label>
																	</div>

																</div>





															</div>

														</li>

														<li id="container_494" class="facility_items facility_item">
															<div class="facility_items_body clearfix">

																<div class="col-sm-8">

																	<span class="facility-item__name">






																		Only using water-efficient showers (e.g smart
																		showers,
																		low-flow showerheads)




																	</span>









																</div>
																<div class="col-sm-4 facility-item__radio-buttons">

																	<div class="bui-inline-container">
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="1" name="facility_494" />
																			<span class="bui-radio__label">
																				Yes
																			</span>
																		</label>
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="0" name="facility_494" />
																			<span class="bui-radio__label">
																				No
																			</span>
																		</label>
																	</div>

																</div>





															</div>

														</li>

													</ul>

													<ul class="facilities_subsection col-sm-6">
														<h5>Have you implemented any of these practices to save energy
															or reduce greenhouse gasses?</h5>

														<li id="container_444" class="facility_items facility_item">
															<div class="facility_items_body clearfix">

																<div class="col-sm-8">

																	<span class="facility-item__name">






																		Key card or motion-controlled electricity for
																		guests




																	</span>









																</div>
																<div class="col-sm-4 facility-item__radio-buttons">

																	<div class="bui-inline-container">
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="1" name="facility_444" />
																			<span class="bui-radio__label">
																				Yes
																			</span>
																		</label>
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="0" name="facility_444" />
																			<span class="bui-radio__label">
																				No
																			</span>
																		</label>
																	</div>

																</div>





															</div>

														</li>

														<li id="container_447" class="facility_items facility_item">
															<div class="facility_items_body clearfix">

																<div class="col-sm-8">

																	<span class="facility-item__name">






																		Bicycle rental




																	</span>









																</div>
																<div class="col-sm-4 facility-item__radio-buttons">

																	<div class="bui-inline-container">
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="1" name="facility_447" />
																			<span class="bui-radio__label">
																				Yes
																			</span>
																		</label>
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="0" name="facility_447" />
																			<span class="bui-radio__label">
																				No
																			</span>
																		</label>
																	</div>

																</div>


																<div class="col-sm-5">
																	<select class="form-control facility_select"
																		style="display:none;">
																		<option value="3">
																			Please select
																		</option>
																		<option value="4">
																			Free
																		</option>
																		<option value="5">
																			Paid
																		</option>
																	</select>
																</div>




															</div>

														</li>

														<li id="container_491" class="facility_items facility_item">
															<div class="facility_items_body clearfix">

																<div class="col-sm-8">

																	<span class="facility-item__name">






																		At least 80% of food is sourced from your region




																	</span>









																</div>
																<div class="col-sm-4 facility-item__radio-buttons">

																	<div class="bui-inline-container">
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="1" name="facility_491" />
																			<span class="bui-radio__label">
																				Yes
																			</span>
																		</label>
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="0" name="facility_491" />
																			<span class="bui-radio__label">
																				No
																			</span>
																		</label>
																	</div>

																</div>





															</div>

														</li>

														<li id="container_492" class="facility_items facility_item">
															<div class="facility_items_body clearfix">

																<div class="col-sm-8">

																	<span class="facility-item__name">






																		At least 80% of lighting uses energy-efficient
																		LED bulbs




																	</span>









																</div>
																<div class="col-sm-4 facility-item__radio-buttons">

																	<div class="bui-inline-container">
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="1" name="facility_492" />
																			<span class="bui-radio__label">
																				Yes
																			</span>
																		</label>
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="0" name="facility_492" />
																			<span class="bui-radio__label">
																				No
																			</span>
																		</label>
																	</div>

																</div>





															</div>

														</li>

													</ul>

													<ul class="facilities_subsection col-sm-6">
														<h5>
															Have you implemented any of these practices to support the
															surrounding area or community?
														</h5>

														<li id="container_497" class="facility_items facility_item">
															<div class="facility_items_body clearfix">

																<div class="col-sm-8">

																	<span class="facility-item__name">






																		Invest a percentage of revenue back into
																		community
																		projects or sustainability projects




																	</span>









																</div>
																<div class="col-sm-4 facility-item__radio-buttons">

																	<div class="bui-inline-container">
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="1" name="facility_497" />
																			<span class="bui-radio__label">
																				Yes
																			</span>
																		</label>
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="0" name="facility_497" />
																			<span class="bui-radio__label">
																				No
																			</span>
																		</label>
																	</div>

																</div>





															</div>

														</li>

														<li id="container_499" class="facility_items facility_item">
															<div class="facility_items_body clearfix">

																<div class="col-sm-8">

																	<span class="facility-item__name">






																		Tours and activities organized by local guides
																		and
																		businesses offered




																	</span>









																</div>
																<div class="col-sm-4 facility-item__radio-buttons">

																	<div class="bui-inline-container">
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="1" name="facility_499" />
																			<span class="bui-radio__label">
																				Yes
																			</span>
																		</label>
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="0" name="facility_499" />
																			<span class="bui-radio__label">
																				No
																			</span>
																		</label>
																	</div>

																</div>





															</div>

														</li>

														<li id="container_505" class="facility_items facility_item">
															<div class="facility_items_body clearfix">

																<div class="col-sm-8">

																	<span class="facility-item__name">






																		Local artists are offered a platform to display
																		their
																		talents




																	</span>









																</div>
																<div class="col-sm-4 facility-item__radio-buttons">

																	<div class="bui-inline-container">
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="1" name="facility_505" />
																			<span class="bui-radio__label">
																				Yes
																			</span>
																		</label>
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="0" name="facility_505" />
																			<span class="bui-radio__label">
																				No
																			</span>
																		</label>
																	</div>

																</div>





															</div>

														</li>

														<li id="container_506" class="facility_items facility_item">
															<div class="facility_items_body clearfix">

																<div class="col-sm-8">

																	<span class="facility-item__name">






																		Provide guests with information regarding local
																		ecosystems, heritage and culture, as well as
																		visitor
																		etiquette




																	</span>









																</div>
																<div class="col-sm-4 facility-item__radio-buttons">

																	<div class="bui-inline-container">
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="1" name="facility_506" />
																			<span class="bui-radio__label">
																				Yes
																			</span>
																		</label>
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="0" name="facility_506" />
																			<span class="bui-radio__label">
																				No
																			</span>
																		</label>
																	</div>

																</div>





															</div>

														</li>

													</ul>

													<ul class="facilities_subsection col-sm-6">
														<h5>
															Have you implemented any of these practices to reduce the
															impact on the environment?
														</h5>

														<li id="container_489" class="facility_items facility_item">
															<div class="facility_items_body clearfix">

																<div class="col-sm-8">

																	<span class="facility-item__name">






																		Wild (non-domesticated) animals are not
																		displayed/interacted with while captive on the
																		property
																		or harvested, consumed, or sold.




																	</span>









																</div>
																<div class="col-sm-4 facility-item__radio-buttons">

																	<div class="bui-inline-container">
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="1" name="facility_489" />
																			<span class="bui-radio__label">
																				Yes
																			</span>
																		</label>
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="0" name="facility_489" />
																			<span class="bui-radio__label">
																				No
																			</span>
																		</label>
																	</div>

																</div>





															</div>

														</li>

														<li id="container_502" class="facility_items facility_item">
															<div class="facility_items_body clearfix">

																<div class="col-sm-8">

																	<span class="facility-item__name">






																		Green spaces such as gardens/rooftop gardens on
																		the
																		property




																	</span>









																</div>
																<div class="col-sm-4 facility-item__radio-buttons">

																	<div class="bui-inline-container">
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="1" name="facility_502" />
																			<span class="bui-radio__label">
																				Yes
																			</span>
																		</label>
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="0" name="facility_502" />
																			<span class="bui-radio__label">
																				No
																			</span>
																		</label>
																	</div>

																</div>





															</div>

														</li>

														<li id="container_503" class="facility_items facility_item">
															<div class="facility_items_body clearfix">

																<div class="col-sm-8">

																	<span class="facility-item__name">






																		At least 80% of the food provided is organic




																	</span>









																</div>
																<div class="col-sm-4 facility-item__radio-buttons">

																	<div class="bui-inline-container">
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="1" name="facility_503" />
																			<span class="bui-radio__label">
																				Yes
																			</span>
																		</label>
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="0" name="facility_503" />
																			<span class="bui-radio__label">
																				No
																			</span>
																		</label>
																	</div>

																</div>





															</div>

														</li>

													</ul>

													<ul class="facilities_subsection col-sm-6">
														<h5>Removing single-use plastics from your property</h5>

														<li id="container_435" class="facility_items facility_item">
															<div class="facility_items_body clearfix">

																<div class="col-sm-8">
																	<span class="facility-item__name">
																		Have you removed, or never offered, all
																		single-use
																		plastic miniature shampoo, conditioner, and body
																		wash
																		bottles?
																	</span>
																</div>
																<div class="col-sm-4 facility-item__radio-buttons">

																	<div class="bui-inline-container">
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="1" name="facility_435" />
																			<span class="bui-radio__label">
																				Yes
																			</span>
																		</label>
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="0" name="facility_435" />
																			<span class="bui-radio__label">
																				No
																			</span>
																		</label>
																	</div>

																</div>
															</div>
														</li>

														<li id="container_439" class="facility_items facility_item">
															<div class="facility_items_body clearfix">

																<div class="col-sm-8">

																	<span class="facility-item__name">
																		Have you removed, or never offered, all plastic
																		straws?
																	</span>
																</div>
																<div class="col-sm-4 facility-item__radio-buttons">

																	<div class="bui-inline-container">
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="1" name="facility_439" />
																			<span class="bui-radio__label">
																				Yes
																			</span>
																		</label>
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="0" name="facility_439" />
																			<span class="bui-radio__label">
																				No
																			</span>
																		</label>
																	</div>

																</div>
															</div>

														</li>

														<li id="container_440" class="facility_items facility_item">
															<div class="facility_items_body clearfix">
																<div class="col-sm-8">
																	<span class="facility-item__name">

																		Have you removed, or never offered, all plastic
																		cups?
																	</span>
																</div>
																<div class="col-sm-4 facility-item__radio-buttons">

																	<div class="bui-inline-container">
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="1" name="facility_440" />
																			<span class="bui-radio__label">
																				Yes
																			</span>
																		</label>
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="0" name="facility_440" />
																			<span class="bui-radio__label">
																				No
																			</span>
																		</label>
																	</div>

																</div>
															</div>

														</li>

														<li id="container_441" class="facility_items facility_item">
															<div class="facility_items_body clearfix">
																<div class="col-sm-8">
																	<span class="facility-item__name">
																		Have you removed, or never offered, all plastic
																		water
																		bottles?
																	</span>
																</div>
																<div class="col-sm-4 facility-item__radio-buttons">

																	<div class="bui-inline-container">
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="1" name="facility_441" />
																			<span class="bui-radio__label">
																				Yes
																			</span>
																		</label>
																		<label class="bui-radio">
																			<input class="bui-radio__input" type="radio"
																				value="0" name="facility_441" />
																			<span class="bui-radio__label">
																				No
																			</span>
																		</label>
																	</div>

																</div>

															</div>

														</li>

													</ul>

												</ul>

											</div>

										</fieldset>
									</div>
									<!-- Sustainability practices -->


									<!-- Temporary closure -->
									<div class="facilities_section facilities_section__temporary_closed_facilities">
										<fieldset>
											<legend>
												Temporary closure of facilities
											</legend>
											<p>To help manage guest expectations, please let them know which facilities
												will be temporarily closed. </p>
											<p>We'll show this information to guests in the fine print section of your
												property page.
											</p>
											<div class="">
												<div class="row">
													<div class="col-sm-4">
														<p>
															<strong>
																Select facilities:
															</strong>
														</p>
														<ul class="eligible-closed-facility-list">

															<li>

																<div class="bui-form__group">
																	<label class="bui-checkbox"><input
																			class="bui-checkbox__input" data-ref="input"
																			type="checkbox"
																			id="eligible-closed-facility-checkbox__11"
																			name="11" /><span
																			class="bui-checkbox__label"
																			data-ref="label">Fitness
																			centre</span></label></div>
															</li>

															<li>

																<div class="bui-form__group">
																	<label class="bui-checkbox"><input
																			class="bui-checkbox__input" data-ref="input"
																			type="checkbox"
																			id="eligible-closed-facility-checkbox__433_33_18499115"
																			name="433_33_18499115" /><span
																			class="bui-checkbox__label"
																			data-ref="label">Swimming pool
																			#1</span></label>
																</div>
															</li>

														</ul>
													</div>
													<div class="col-sm-8">
														<p>
															<strong>
																Will be closed:
															</strong>
														</p>
														<div class="row">
															<div class="col-sm-3">
																<div class="bui-form__group">
																	<input name="temporary_closed_from"
																		id="temporary-closed-from"
																		class="has-datepicker bui-form__control"
																		type="text" placeholder="From" value=""
																		data-on-change="onSelectStartDate(event)"
																		disabled="disabled">
																</div>
															</div>
															<div class="col-sm-3">
																<div class="bui-form__group">
																	<input name="temporary_closed_until"
																		id="temporary-closed-until" class="has-datepicker bui-form__control
	
	" type="text" placeholder="Until" value="">
																</div>
															</div>
															<div class="col-sm-2 mt-lg-0 text-center mt-sm-5">
																<button class="bui-button bui-button--primary "
																	type="button"><span
																		class="bui-button__text">Add</span></button>
															</div>
														</div>


													</div>
												</div>

											</div>
											<div class="text-center">
												Any thoughts or suggestions to help us to improve?<br />
											</div>
										</fieldset>
									</div>


									<input type="submit" name="save" id="save" value="Save"
										class="btn btn-primary btn-block btn-lg btn-save-bottom">

								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</main>


	</div>
	<!-- close div#main-container -->

	<!-- Footer -->


	<!-- ===================== Required Js File Links ===================== -->
	<!-- jquery js  -->
	<script src="{{ asset("/hotel-admin/assets/js/jquery-1.12.4.min.js") }}"></script>
	<!-- bootstrap js  -->
	<script src="{{ asset("/hotel-admin/assets/js/bootstrap.bundle.min.js") }}"></script>
	<!-- custom Js  -->
	<script src="{{ asset("/hotel-admin/assets/js/script.js") }}"></script>


</body>

</html>