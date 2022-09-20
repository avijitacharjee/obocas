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
	<!-- Bootstrap v5.0.0-beta3 -->
	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/bootstrap.min.css") }}">
	<!-- font awesome -->
	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/all.min.css") }}">

	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/style.min.css") }}">
	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/pages/index.min.css") }}">

</head>


<body>
	<div id="main-container" class="container-fluid tfa_phone_alt container-fluid--color">
		<main id="content">
			<div class="page-body">

				<div id="legacy-banners-new-hp" class="bui-u-hidden"></div>

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
									Time squers - 7962700
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
												style="background-image: url({{asset('/hotel-admin/assets/images/hotel.jfif')}});">
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
														<a href="{{ url("change-password") }}"
															class="ext-action-dropdown__item">
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
														<a href="{{ url("notification-settings") }}"
															class="ext-action-dropdown__item">
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
														<a href="{{ url("contacts") }}" class="ext-action-dropdown__item">
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
														<a href="{{ url("security") }}" class="ext-action-dropdown__item">
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
														<a href="{{ url("hotel-admin/signin") }}" class="ext-action-dropdown__item">
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
											<li class="ext-navigation-top-item ext-navigation-top-item--active">
												<a href="{{ url("index") }}" class="ext-navigation-top-item__link">
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



												</button>
												<!-- /toggle botton -->

												<!-- Sub Menu -->
												<div class="ext-navigation-top-item__submenu dropdown-menu">
													<ul class="ext-navigation-submenu-item__list">
														<!-- <li data-nav-tag="availability_calendar"
															class="ext-navigation-submenu-item">
															<a href="calendar"
																class="ext-navigation-submenu-item__link">
																<span class="ext-navigation-submenu-item__icon">
																</span>
																<span
																	class="ext-navigation-submenu-item__title">Calendar</span>

															</a>

														</li> -->
														<li data-nav-tag="open_close_rooms"
															class="ext-navigation-submenu-item">
															<a href="{{ url("open-close-rooms") }}"
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
															<a href="{{ url("rate-plans") }}"
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
												<a href="{{ url("reservations") }}" class="ext-navigation-top-item__link">
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
											<li class="ext-navigation-top-item">

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
												</button>
												<!-- /toggle botton -->

												<!-- Sub Menu -->
												<div class="ext-navigation-top-item__submenu dropdown-menu">
													<ul class="ext-navigation-submenu-item__list">
														<li data-nav-tag="content_score"
															class="ext-navigation-submenu-item">
															<a href="{{ url("property-page-score") }}"
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
															<a href="{{ url("general-info") }}"
																class="ext-navigation-submenu-item__link"><span
																	class="ext-navigation-submenu-item__icon">
																</span> <span
																	class="ext-navigation-submenu-item__title">General
																	info</span>

															</a>

														</li>
														<li data-nav-tag="vat_tax_charges"
															class="ext-navigation-submenu-item">
															<a href="{{ url("vat-tax-charges") }}"
																class="ext-navigation-submenu-item__link">
																<span class="ext-navigation-submenu-item__icon">
																</span>
																<span
																	class="ext-navigation-submenu-item__title">VAT/tax/charges</span>

															</a>

														</li>
														<li data-nav-tag="photos" class="ext-navigation-submenu-item">
															<a href="{{ url("photos") }}"
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
															<a href="{{ url("policies") }}"
																class="ext-navigation-submenu-item__link"><span
																	class="ext-navigation-submenu-item__icon">
																</span> <span
																	class="ext-navigation-submenu-item__title">Policies</span>

															</a>

														</li>
														<li data-nav-tag="facilities"
															class="ext-navigation-submenu-item">
															<a href="{{ url("facilities-services") }}"
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
															<a href="{{ url("room-details") }}"
																class="ext-navigation-submenu-item__link">
																<span class="ext-navigation-submenu-item__icon">
																</span>
																<span class="ext-navigation-submenu-item__title">Room
																	details</span>

															</a>

														</li>

														<li class="ext-navigation-submenu-item">
															<a href="{{ url("get-time-squers") }}"
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
															<a href="{{ url("what's-nearby") }}"
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

												</button>
												<!-- /toggle botton -->
												<!-- Sub Menu -->
												<div class="ext-navigation-top-item__submenu dropdown-menu">
													<ul class="ext-navigation-submenu-item__list">
														<li class="ext-navigation-submenu-item">
															<a href="{{ url("reservation-messages") }}"
																class="ext-navigation-submenu-item__link">
																<span class="ext-navigation-submenu-item__icon">
																</span>
																<span class="ext-navigation-submenu-item__title">
																	Reservation messages
																</span>

															</a>

														</li>
														<li class="ext-navigation-submenu-item">
															<a href="{{ url("obacas-messages") }}"
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

												</button>
												<!-- /toggle botton -->
												<!-- Sub Menu -->
												<div class="ext-navigation-top-item__submenu dropdown-menu">
													<ul class="ext-navigation-submenu-item__list">
														<li class="ext-navigation-submenu-item">
															<a href="{{ url("guest-reviews") }}"
																class="ext-navigation-submenu-item__link">
																<span class="ext-navigation-submenu-item__icon">
																</span>
																<span class="ext-navigation-submenu-item__title">Guest
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

												</button>
												<!-- /toggle botton -->
												<!-- Sub Menu -->
												<div class="ext-navigation-top-item__submenu dropdown-menu">
													<ul class="ext-navigation-submenu-item__list">
														<li data-nav-tag="finance_invoices"
															class="ext-navigation-submenu-item">
															<a href="{{ url("invoices") }}"
																class="ext-navigation-submenu-item__link">
																<span class="ext-navigation-submenu-item__icon">
																</span>
																<span
																	class="ext-navigation-submenu-item__title">Invoices</span>

															</a>

														</li>
														<li data-nav-tag="finance_reservations"
															class="ext-navigation-submenu-item">
															<a href="{{ url("reservation-statements") }}"
																class="ext-navigation-submenu-item__link">
																<span class="ext-navigation-submenu-item__icon"></span>
																<span
																	class="ext-navigation-submenu-item__title">Reservation
																	statements</span>

															</a>

														</li>
														<li data-nav-tag="finance_overview"
															class="ext-navigation-submenu-item">
															<a href="{{ url("financial-overview") }}"
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


					<!-- Main Content -->
					<main class="main">
						<div class="bui-container">
							<div class="bui-grid">
								<div class="homepage-main-column bui-grid__column-full bui-grid__column-9@huge">
									<div class="bui-grid bui-grid--justify-center">
										<div class="bui-grid__column-full bui-grid__column-10@large">
											<div class="bui-page-header peg-page-header">

												<h1 class="bui-page-header__title">
													Time Squers
													<span class="bui-badge bui-badge--destructive">
														<span>Closed / Notbookable</span>
													</span>
												</h1>

											</div>

											<div class="homepage-main-tabs-container bui-spacer--large">
												<div class="customize-controls">
													<svg role="presentation" focusable="false" width="16"
														aria-hidden="true" height="16" fill="#6B6B6B"
														viewBox="0 0 24 24"
														class="bui-u-hidden@huge bk-icon -streamline-bell_normal"
														color="#6B6B6B">
														<path
															d="M9.28 21.961a2.837 2.837 0 0 0 5.445 0 .75.75 0 1 0-1.44-.422 1.337 1.337 0 0 1-2.565 0 .75.75 0 1 0-1.44.422zM12.75 3V.75a.75.75 0 0 0-1.5 0V3a.75.75 0 0 0 1.5 0zm-.75.75a6.75 6.75 0 0 1 6.75 6.75c0 3.154.29 5.436.785 6.994.323 1.02.684 1.59.995 1.84L21 18H3l.59 1.212c.248-.315.572-.958.88-2 .49-1.66.78-3.872.78-6.712A6.75 6.75 0 0 1 12 3.75zm0-1.5a8.25 8.25 0 0 0-8.25 8.25c0 2.702-.272 4.772-.72 6.288-.254.864-.493 1.336-.62 1.5A.75.75 0 0 0 3 19.5h18c.708 0 1.022-.892.47-1.335.019.016-.008-.015-.07-.113-.14-.223-.29-.553-.435-1.012-.443-1.396-.715-3.529-.715-6.54A8.25 8.25 0 0 0 12 2.25z">
														</path>
													</svg>
												</div>


												<div class="bui-tab">

													<!-- Tab Butoon -->
													<ul class="bui-tab__nav nav  nav-tabs" id="myTab" role="tablist">

														<li role="presentation"
															class="bui-tab__item homepage-tab-button homepage-tab-button__performance homepage-tab-button--full">

															<button class="bui-tab__link" id="home-tab"
																data-bs-toggle="tab" data-bs-target="#home" role="tab"
																aria-controls="home" aria-selected="true">
																<div class="bui-group bui-group--inline">
																	<svg aria-hidden="true" width="20" focusable="false"
																		role="presentation" fill="#6B6B6B"
																		viewBox="0 0 24 24" height="20"
																		class="homepage-tab-item-icon bk-icon -material-ic_today"
																		color="#6B6B6B">
																		<path
																			d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z">
																		</path>
																	</svg>
																	<span class="homepage-tab-item-wrapper">
																		<span>
																			<span>Operations</span>
																		</span>
																	</span>
																</div>
															</button>

														</li>

														<li role="presentation"
															class="bui-tab__item homepage-tab-button homepage-tab-button__performance homepage-tab-button--full">

															<button class="bui-tab__link" id="profile-tab"
																data-bs-toggle="tab" data-bs-target="#profile"
																role="tab" aria-controls="profile"
																aria-selected="false">
																<div class="bui-group bui-group--inline">
																	<svg focusable="false" role="presentation"
																		aria-hidden="true" width="20" fill="#6B6B6B"
																		viewBox="0 0 24 24" height="20"
																		class="homepage-tab-item-icon bk-icon -material-ic_timeline"
																		color="#6B6B6B">
																		<path
																			d="M23 8c0 1.1-.9 2-2 2-.18 0-.35-.02-.51-.07l-3.56 3.55c.05.16.07.34.07.52 0 1.1-.9 2-2 2s-2-.9-2-2c0-.18.02-.36.07-.52l-2.55-2.55c-.16.05-.34.07-.52.07s-.36-.02-.52-.07l-4.55 4.56c.05.16.07.33.07.51 0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2c.18 0 .35.02.51.07l4.56-4.55C8.02 9.36 8 9.18 8 9c0-1.1.9-2 2-2s2 .9 2 2c0 .18-.02.36-.07.52l2.55 2.55c.16-.05.34-.07.52-.07s.36.02.52.07l3.55-3.56C19.02 8.35 19 8.18 19 8c0-1.1.9-2 2-2s2 .9 2 2z">
																		</path>
																	</svg>
																	<span class="homepage-tab-item-wrapper">
																		<span>
																			Data
																		</span>
																	</span>
																</div>
															</button>

														</li>

													</ul>
													<!-- /Tab Butoon -->

													<div class="tab-content" id="myTabContent">

														<!-- Tab Content -->
														<div class="tab-pane fade show active" id="home" role="tabpanel"
															aria-labelledby="home-tab">
															<div class="bui-spacer--large"></div>
															<div class="homepage-operations-tab">
																<div class="bui-group bui-group--large">
																	<div>
																		<div class="bui-spacer--large"></div>
																		<div class="homepage-blocks-wrapper">
																			<div
																				class="homepage-blocks-wrapper__content">
																				<header
																					class="homepage-blocks-wrapper__header">
																					<div
																						class="bui-grid bui-grid--align-center bui-grid--bleed">
																						<div
																							class="bui-grid__column-full bui-grid__column-7@medium">
																							<div
																								class="bui-group bui-group--inline bui-group--large">
																								<span
																									class="bui-f-font-display_one">
																									<span>Reservations
																										overview</span>
																								</span>
																								<div aria-label="Reservations overview"
																									class="bui-form__group">
																									<label
																										for="date-range"
																										style="display:none;"></label>
																									<div
																										class="bui-input-select">
																										<select
																											id="date-range"
																											aria-label="Reservations overview"
																											class="bui-form__control">
																											<option
																												value="-7">
																												Last
																												7
																												days
																											</option>
																											<option
																												value="-1">
																												Yesterday
																											</option>
																											<option
																												value="0"
																												selected="selected">
																												Today
																											</option>
																											<option
																												value="1">
																												Tomorrow
																											</option>
																											<option
																												value="7">
																												Next
																												7
																												days
																											</option>
																											<option
																												value="30">
																												Next
																												30
																												days
																											</option>
																											<option
																												value="60">
																												Next
																												60
																												days
																											</option>
																											<option
																												value="link">
																												More
																												dates
																											</option>
																										</select>
																										<svg xmlns="http://www.w3.org/2000/svg"
																											viewBox="0 0 24 24"
																											class="bui-input-select__icon">
																											<path
																												d="M12 20.09a1.24 1.24 0 0 1-.88-.36L6 14.61a.75.75 0 1 1 1.06-1.06L12 18.49l4.94-4.94A.75.75 0 0 1 18 14.61l-5.12 5.12a1.24 1.24 0 0 1-.88.36zm6-9.46a.75.75 0 0 0 0-1.06l-5.12-5.11a1.24 1.24 0 0 0-1.754-.006l-.006.006L6 9.57a.75.75 0 0 0 0 1.06.74.74 0 0 0 1.06 0L12 5.7l4.94 4.93a.73.73 0 0 0 .53.22c.2 0 .39-.078.53-.22z">
																											</path>
																										</svg></div>

																								</div>
																							</div>
																						</div>
																						<div
																							class="homepage-header__text-right bui-grid__column-full bui-grid__column-5@medium">
																							<a href="{{ url("#") }}"
																								class="bui-link bui-link--primary"><span>View
																									all
																									reservations</span></a>
																						</div>
																					</div>
																				</header>

																				<div>

																					<!-- Message Tab -->
																					<div
																						class="bui-tab homepage-activity-tab">

																						<ul class="bui-tab__nav nav nav-tabs"
																							id="myMessageTab"
																							role="tablist">
																							<li class="bui-tab__item"
																								role="presentation">
																								<button
																									id="MessageTab-one"
																									data-bs-toggle="tab"
																									data-bs-target="#messages-one"
																									class="bui-tab__link active"
																									role="tab"
																									aria-controls="messages-one"
																									aria-selected="true">
																									<div
																										class="prop-overview-counter__wrapper">
																										<span>Arrivals</span>
																										<span>
																											<span
																												class="homepage-custom-bubble">
																												0
																											</span>
																										</span>
																									</div>
																								</button>
																							</li>

																							<li class="bui-tab__item"
																								role="presentation">
																								<button
																									class="bui-tab__link"
																									id="MessageTab-tow"
																									data-bs-toggle="tab"
																									data-bs-target="#messages-tow"
																									role="tab"
																									aria-controls="messages-tow"
																									aria-selected="false">
																									<div
																										class="prop-overview-counter__wrapper">
																										<span>Departures</span>
																										<span>
																											<span
																												class="homepage-custom-bubble">
																												0
																											</span>
																										</span>
																									</div>

																								</button>
																							</li>

																							<li class="bui-tab__item"
																								role="presentation">
																								<button
																									class="bui-tab__link"
																									id="MessageTab-three"
																									data-bs-toggle="tab"
																									data-bs-target="#messages-three"
																									role="tab"
																									aria-controls="messages-three"
																									aria-selected="false">
																									<div
																										class="prop-overview-counter__wrapper">
																										<span>Stay-overs</span>
																										<span>
																											<span
																												class="homepage-custom-bubble">
																												0
																											</span>
																										</span>
																									</div>

																								</button>
																							</li>

																							<li class="bui-tab__item"
																								role="presentation">
																								<button
																									class="bui-tab__link"
																									id="MessageTab-four"
																									data-bs-toggle="tab"
																									data-bs-target="#messages-four"
																									role="tab"
																									aria-controls="messages-four"
																									aria-selected="false">
																									<div
																										class="prop-overview-counter__wrapper">
																										<span>Guest
																											requests</span>
																										<span><span
																												aria-label=""
																												class="homepage-custom-bubble">
																												0
																											</span></span>
																									</div>

																								</button>
																							</li>

																						</ul>

																						<!-- Sub Tab Palne -->
																						<div id="myMessageTabContent"
																							class="reservation-tab-content tab-content">

																							<div class="tab-pane fade show active"
																								id="messages-one"
																								role="tabpanel"
																								aria-labelledby="MessageTab-one">

																								<!-- Data Table-->
																								<div
																									class="table-responsive">
																									<table
																										class="table align-middle">
																										<!-- Table Head -->
																										<thead>
																											<tr>
																												<th
																													class="">
																													<span>Guest
																														name</span>
																												</th>
																												<th
																													class="">
																													<span>Check-in</span>
																												</th>
																												<th
																													class="">
																													<span>Check-out</span>
																												</th>
																												<th
																													class="">
																													<span>Rooms</span>
																												</th>
																												<th
																													class="">
																													<span>Booked
																														on</span>
																												</th>


																											</tr>
																										</thead>
																										<!-- /Table Head -->
																										<!-- Table Body -->
																										<tbody>
																											<tr>
																												<td>XYZ
																												</td>
																												<td>12-02-2022
																												</td>
																												<td>12-02-2022
																												</td>
																												<td>5
																												</td>
																												<td>12-02-2022
																												</td>
																											</tr>
																										</tbody>
																										<!-- /Table Body -->
																									</table>
																								</div>
																								<!-- /Data Table-->

																							</div>

																							<div class="tab-pane fade"
																								id="messages-tow"
																								role="tabpanel"
																								aria-labelledby="MessageTab-tow">

																								<!-- Data Table-->
																								<div
																									class="table-responsive">
																									<table
																										class="table align-middle">
																										<!-- Table Head -->
																										<thead>
																											<tr>
																												<th
																													class="">
																													<span>Guest
																														name</span>
																												</th>
																												<th
																													class="">
																													<span>Check-in</span>
																												</th>
																												<th
																													class="">
																													<span>Check-out</span>
																												</th>
																												<th
																													class="">
																													<span>Rooms</span>
																												</th>
																												<th
																													class="">
																													<span>Booked
																														on</span>
																												</th>


																											</tr>
																										</thead>
																										<!-- /Table Head -->
																										<!-- Table Body -->
																										<tbody>
																											<tr>
																												<td>XYZ
																												</td>
																												<td>12-02-2022
																												</td>
																												<td>12-02-2022
																												</td>
																												<td>5
																												</td>
																												<td>12-02-2022
																												</td>
																											</tr>
																										</tbody>
																										<!-- /Table Body -->
																									</table>
																								</div>
																								<!-- /Data Table-->

																							</div>

																							<div class="tab-pane fade"
																								id="messages-three"
																								role="tabpanel"
																								aria-labelledby="MessageTab-three">
																								<!-- Data Table-->
																								<div
																									class="table-responsive">
																									<table
																										class="table align-middle">
																										<!-- Table Head -->
																										<thead>
																											<tr>
																												<th
																													class="">
																													<span>Guest
																														name</span>
																												</th>
																												<th
																													class="">
																													<span>Check-in</span>
																												</th>
																												<th
																													class="">
																													<span>Check-out</span>
																												</th>
																												<th
																													class="">
																													<span>Rooms</span>
																												</th>
																												<th
																													class="">
																													<span>Booked
																														on</span>
																												</th>


																											</tr>
																										</thead>
																										<!-- /Table Head -->
																										<!-- Table Body -->
																										<tbody>
																											<tr>
																												<td>XYZ
																												</td>
																												<td>12-02-2022
																												</td>
																												<td>12-02-2022
																												</td>
																												<td>5
																												</td>
																												<td>12-02-2022
																												</td>
																											</tr>
																										</tbody>
																										<!-- /Table Body -->
																									</table>
																								</div>
																								<!-- /Data Table-->

																							</div>

																							<div class="tab-pane fade"
																								id="messages-four"
																								role="tabpanel"
																								aria-labelledby="MessageTab-four">

																								<!-- Data Table-->
																								<div
																									class="table-responsive">
																									<table
																										class="table align-middle">
																										<!-- Table Head -->
																										<thead>
																											<tr>
																												<th
																													class="">
																													<span>Guest
																														name</span>
																												</th>
																												<th
																													class="">
																													<span>Check-in</span>
																												</th>
																												<th
																													class="">
																													<span>Check-out</span>
																												</th>
																												<th
																													class="">
																													<span>Rooms</span>
																												</th>
																												<th
																													class="">
																													<span>Booked
																														on</span>
																												</th>


																											</tr>
																										</thead>
																										<!-- /Table Head -->
																										<!-- Table Body -->
																										<tbody>
																											<tr>
																												<td>XYZ
																												</td>
																												<td>12-02-2022
																												</td>
																												<td>12-02-2022
																												</td>
																												<td>5
																												</td>
																												<td>12-02-2022
																												</td>
																											</tr>
																										</tbody>
																										<!-- /Table Body -->
																									</table>
																								</div>
																								<!-- /Data Table-->

																							</div>

																						</div>
																						<!-- Sub Tab Palne -->

																					</div>
																					<!-- Message Tab -->
																				</div>

																			</div>
																		</div>
																	</div>

																	<div
																		class="homepage-selectable-card-wrapper homepage-blocks-wrapper">
																		<div class="homepage-blocks-wrapper__content">
																			<div class="homepage-card-header">
																				<div
																					class="bui-grid bui-grid--align-center bui-grid--bleed">
																					<div
																						class="bui-grid__column-full bui-grid__column-9@medium">
																						<span
																							class="bui-f-font-display_one">
																							<span>Latest bookings</span>
																						</span>
																					</div>
																					<div
																						class="homepage-header__text-right bui-grid__column-full bui-grid__column-3@medium">
																						<a href="{{ url("#") }}"
																							class="bui-link bui-link--primary">
																							<span>View more
																								bookings</span>
																						</a>
																					</div>
																				</div>
																				<div class="bui-spacer--large"></div>
																			</div>
																			<!-- Data Table-->
																			<div class="table-responsive m-tb-lr-15">
																				<table class="table align-middle">
																					<!-- Table Head -->
																					<thead>
																						<tr>
																							<th class="">
																								<span>Guest name</span>
																							</th>
																							<th class="">
																								<span>Check-in</span>
																							</th>
																							<th class="">
																								<span>Check-out</span>
																							</th>
																							<th class="">
																								<span>Rooms</span>
																							</th>
																							<th class="">
																								<span>Booked on</span>
																							</th>


																						</tr>
																					</thead>
																					<!-- /Table Head -->
																					<!-- Table Body -->
																					<tbody>
																						<tr>
																							<td>XYZ</td>
																							<td>12-02-2022</td>
																							<td>12-02-2022</td>
																							<td>5</td>
																							<td>12-02-2022</td>
																						</tr>
																					</tbody>
																					<!-- /Table Body -->
																				</table>
																			</div>
																			<!-- /Data Table-->
																		</div>
																	</div>


																	<div>
																		<div
																			class="homepage-selectable-card-wrapper homepage-blocks-wrapper">
																			<div
																				class="homepage-blocks-wrapper__content">

																				<div class="homepage-card-header">
																					<div
																						class="bui-grid bui-grid--align-center bui-grid--bleed">
																						<div
																							class="bui-grid__column-full bui-grid__column-9@medium">
																							<span
																								class="bui-f-font-display_one"><span>Unanswered
																									messages</span></span>
																						</div>
																						<div
																							class="homepage-header__text-right bui-grid__column-full bui-grid__column-3@medium">
																							<a href="{{ url("#") }}"
																								title="View all messages"
																								class="bui-link bui-link--primary">
																								<span>View all
																									messages</span>
																							</a>
																						</div>
																					</div>
																					<div class="bui-spacer--large">
																					</div>
																				</div>
																				<!-- Data Table-->
																				<div
																					class="table-responsive m-tb-lr-15">
																					<table class="table align-middle">
																						<!-- Table Head -->
																						<thead>
																							<tr>
																								<th class="">
																									<span>Guest
																										name</span>
																								</th>
																								<th class="">
																									<span>Check-in</span>
																								</th>
																								<th class="">
																									<span>Check-out</span>
																								</th>
																								<th class="">
																									<span>Rooms</span>
																								</th>
																								<th class="">
																									<span>Booked
																										on</span>
																								</th>


																							</tr>
																						</thead>
																						<!-- /Table Head -->
																						<!-- Table Body -->
																						<tbody>
																							<tr>
																								<td>XYZ</td>
																								<td>12-02-2022</td>
																								<td>12-02-2022</td>
																								<td>5</td>
																								<td>12-02-2022</td>
																							</tr>
																						</tbody>
																						<!-- /Table Body -->
																					</table>
																				</div>
																				<!-- /Data Table-->
																			</div>
																		</div>
																	</div>
																	<div>
																		<div
																			class="homepage-selectable-card-wrapper homepage-blocks-wrapper">
																			<div
																				class="homepage-blocks-wrapper__content">

																				<div class="homepage-card-header">
																					<div
																						class="bui-grid bui-grid--align-center bui-grid--bleed">
																						<div
																							class="bui-grid__column-full bui-grid__column-9@medium">
																							<span
																								class="bui-f-font-display_one"><span>Recent
																									reviews</span></span>
																						</div>
																						<div
																							class="homepage-header__text-right bui-grid__column-full bui-grid__column-3@medium">
																							<a href="{{ url("#") }}"
																								title="View all reviews"
																								class="bui-link bui-link--primary">
																								<span>View all
																									reviews</span>
																							</a>
																						</div>
																					</div>
																					<div class="bui-spacer--large">
																					</div>
																				</div>
																				<!-- Data Table-->
																				<div
																					class="table-responsive m-tb-lr-15">
																					<table class="table align-middle">
																						<!-- Table Head -->
																						<thead>
																							<tr>
																								<th class="">
																									<span>Guest
																										name</span>
																								</th>
																								<th class="">
																									<span>Check-in</span>
																								</th>
																								<th class="">
																									<span>Check-out</span>
																								</th>
																								<th class="">
																									<span>Rooms</span>
																								</th>
																								<th class="">
																									<span>Booked
																										on</span>
																								</th>


																							</tr>
																						</thead>
																						<!-- /Table Head -->
																						<!-- Table Body -->
																						<tbody>
																							<tr>
																								<td>XYZ</td>
																								<td>12-02-2022</td>
																								<td>12-02-2022</td>
																								<td>5</td>
																								<td>12-02-2022</td>
																							</tr>
																						</tbody>
																						<!-- /Table Body -->
																					</table>
																				</div>
																				<!-- /Data Table-->
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- /Tab Content -->

														<!-- Tab Content -->
														<div class="tab-pane fade" id="profile" role="tabpanel"
															aria-labelledby="profile-tab">
															<div class="bui-spacer--large"></div>
															<div class="homepage-performance-tab">
																<div class="bui-group bui-group--large">
																	<div>
																		<div>
																			<span class="bui-f-font-display_one">
																				<span>Guest
																					demand for Dhaka over the past 14
																					days</span>
																			</span>
																			<div class="bui-spacer--larger">
																				<span>Search
																					patterns and cancellation policy
																					preferences are changing. Learn more
																					about the travellers interested in
																					Dhaka, and when they're looking to
																					stay.
																					(Last updated on 18 Mar, based on
																					the
																					guest demand for Dhaka over the past
																					14
																					days)</span>
																			</div>
																			<div class="bui-spacer--larger">
																				<div class="homepage-blocks-wrapper">
																					<div
																						class="homepage-blocks-wrapper__content">
																						<!---->
																						<div>
																							<div class="bui-grid">
																								<div
																									class="bui-grid__column-full bui-grid__column-full@large">
																									<div
																										class="homepage-demand-data">
																										<div
																											class="bui-spacer--larger">
																											<div
																												class="homepage-demand-data__header">
																												<div
																													class="homepage-demand-data__header-score-wrapper">
																													<div
																														class="homepage-demand-data__header-score bui-f-font-display_two bui-f-color-constructive">
																														+4%
																													</div>
																												</div>
																												<div
																													class="homepage-demand-data__copy">
																													<span
																														class="bui-f-font-display_one">
																														Change
																														in
																														demand
																													</span>
																													<p>
																														Total
																														demand
																														in
																														Dhaka
																														has
																														increased
																														in
																														the
																														last
																														week
																														in
																														comparison
																														to
																														the
																														previous
																														week
																													</p>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																								<div
																									class="bui-grid__column-full bui-grid__column-6@large">
																									<div>
																										<div
																											class="bui-spacer">
																											<div
																												class="homepage-demand-data__header">
																												<div
																													class="homepage-demand-data__header-icon-wrapper">
																													<svg width="24"
																														height="24"
																														fill="currentColor"
																														viewBox="0 0 24 24"
																														role="presentation"
																														aria-hidden="true"
																														focusable="false"
																														class="homepage-demand-data__header-icon bk-icon -streamline-calendar_dates">
																														<path
																															d="M22.5 13.5v8.25a.75.75 0 0 1-.75.75H2.25a.75.75 0 0 1-.75-.75V5.25a.75.75 0 0 1 .75-.75h19.5a.75.75 0 0 1 .75.75v8.25zm1.5 0V5.25A2.25 2.25 0 0 0 21.75 3H2.25A2.25 2.25 0 0 0 0 5.25v16.5A2.25 2.25 0 0 0 2.25 24h19.5A2.25 2.25 0 0 0 24 21.75V13.5zm-23.25-3h22.5a.75.75 0 0 0 0-1.5H.75a.75.75 0 0 0 0 1.5zM7.5 6V.75a.75.75 0 0 0-1.5 0V6a.75.75 0 0 0 1.5 0zM18 6V.75a.75.75 0 0 0-1.5 0V6A.75.75 0 0 0 18 6zM5.095 14.03a.75.75 0 1 0 1.06-1.06.75.75 0 0 0-1.06 1.06zm.53-1.28a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zm-.53 6.53a.75.75 0 1 0 1.06-1.06.75.75 0 0 0-1.06 1.06zm.53-1.28a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zm5.845-3.97a.75.75 0 1 0 1.06-1.06.75.75 0 0 0-1.06 1.06zm.53-1.28A1.125 1.125 0 1 0 12 15a1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zm-.53 6.53a.75.75 0 1 0 1.06-1.06.75.75 0 0 0-1.06 1.06zM12 18a1.125 1.125 0 1 0 0 2.25A1.125 1.125 0 0 0 12 18a.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zm5.845-3.97a.75.75 0 1 0 1.06-1.06.75.75 0 0 0-1.06 1.06zm.53-1.28a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zm-.53 6.53a.75.75 0 1 0 1.06-1.06.75.75 0 0 0-1.06 1.06zm.53-1.28a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5z">
																														</path>
																													</svg>
																												</div>
																												<div>
																													<span
																														class="bui-f-font-display_one">
																														Book
																														window
																													</span>
																													<p>
																														Most
																														searches
																														were
																														looking
																														for
																														0-1
																														day
																														in
																														the
																														future
																													</p>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																0-1
																																day
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">34.52%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="34.5237405738512"
																																class="bui-score-bar__value"
																																style="width: 34.5237%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																2-7
																																days
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">21.00%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="20.9987373883631"
																																class="bui-score-bar__value"
																																style="width: 20.9987%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																8-30
																																days
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">16.14%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="16.1428952032341"
																																class="bui-score-bar__value"
																																style="width: 16.1429%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																31-90
																																days
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">5.38%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="5.3817373072779695"
																																class="bui-score-bar__value"
																																style="width: 5.38174%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																90+
																																days
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">3.74%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="3.74497561653674"
																																class="bui-score-bar__value"
																																style="width: 3.74498%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																No
																																dates
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">19.21%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="19.2079139107368"
																																class="bui-score-bar__value"
																																style="width: 19.2079%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																										</div>
																										<div
																											class="bui-spacer--larger">
																											<span>You
																												can also
																												check
																												<a class="bui-link"
																													href="{{ url("#") }}">Book
																													Window
																													Info</a>
																												related
																												to your
																												property
																											</span>
																										</div>
																									</div>
																								</div>
																								<div
																									class="bui-grid__column-full bui-grid__column-6@large">
																									<div>
																										<div
																											class="bui-spacer">
																											<div
																												class="homepage-demand-data__header">
																												<div
																													class="homepage-demand-data__header-icon-wrapper">
																													<svg width="24"
																														height="24"
																														fill="currentColor"
																														viewBox="0 0 24 24"
																														role="presentation"
																														aria-hidden="true"
																														focusable="false"
																														class="homepage-demand-data__header-icon bk-icon -streamline-family">
																														<path
																															d="M21.75 5.25a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0zm1.5 0a3.75 3.75 0 1 0-7.5 0 3.75 3.75 0 0 0 7.5 0zm-6.182 15.093l.188 1.5A.75.75 0 0 0 18 22.5h3a.75.75 0 0 0 .744-.657l.75-6-.744.657h1.5a.75.75 0 0 0 .75-.75V13.5a4.5 4.5 0 0 0-7.2-3.6.75.75 0 1 0 .9 1.2 3 3 0 0 1 4.8 2.4v2.25l.75-.75h-1.5a.75.75 0 0 0-.744.657l-.75 6L21 21h-3l.744.657-.188-1.5a.75.75 0 0 0-1.488.186zM6.75 5.25a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0zm1.5 0a3.75 3.75 0 1 0-7.5 0 3.75 3.75 0 0 0 7.5 0zM5.444 20.157l-.188 1.5L6 21H3l.744.657-.75-6A.75.75 0 0 0 2.25 15H.75l.75.75V13.5a3 3 0 0 1 4.8-2.4.75.75 0 1 0 .9-1.2A4.5 4.5 0 0 0 0 13.5v2.25c0 .414.336.75.75.75h1.5l-.744-.657.75 6A.75.75 0 0 0 3 22.5h3a.75.75 0 0 0 .744-.657l.188-1.5a.75.75 0 0 0-1.488-.186zM13.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zM15 9a3 3 0 1 0-6 0 3 3 0 0 0 6 0zm-3 3a4.5 4.5 0 0 0-4.5 4.5v.75c0 .414.336.75.75.75h1.5l-.74-.627.75 4.5a.75.75 0 0 0 .74.627H12a.75.75 0 0 0 0-1.5h-1.5l.74.627-.75-4.5a.75.75 0 0 0-.74-.627h-1.5l.75.75v-.75a3 3 0 0 1 3-3 .75.75 0 0 0 0-1.5zm0 1.5a3 3 0 0 1 3 3v.75l.75-.75h-1.5a.75.75 0 0 0-.74.627l-.75 4.5.74-.627H12a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 .74-.627l.75-4.5-.74.627h1.5a.75.75 0 0 0 .75-.75v-.75A4.5 4.5 0 0 0 12 12a.75.75 0 0 0 0 1.5z">
																														</path>
																													</svg>
																												</div>
																												<div>
																													<span
																														class="bui-f-font-display_one">
																														Traveller
																														type
																													</span>
																													<p>
																														Most
																														searches
																														were
																														from
																														couples
																													</p>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																Couple
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">75.77%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="75.7740736021499"
																																class="bui-score-bar__value"
																																style="width: 75.7741%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																Solo
																																traveller
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">16.14%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="16.1417368439343"
																																class="bui-score-bar__value"
																																style="width: 16.1417%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																Family
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">4.24%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="4.2419117561885304"
																																class="bui-score-bar__value"
																																style="width: 4.24191%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																Group
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">3.84%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="3.8422777977273"
																																class="bui-score-bar__value"
																																style="width: 3.84228%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																										</div>
																										<!---->
																									</div>
																								</div>
																								<div
																									class="bui-grid__column-full bui-grid__column-6@large">
																									<div>
																										<div
																											class="bui-spacer">
																											<div
																												class="homepage-demand-data__header">
																												<div
																													class="homepage-demand-data__header-icon-wrapper">
																													<svg width="24"
																														height="24"
																														fill="currentColor"
																														viewBox="0 0 24 24"
																														role="presentation"
																														aria-hidden="true"
																														focusable="false"
																														class="homepage-demand-data__header-icon bk-icon -streamline-maps_pin">
																														<path
																															d="M8.25 11.019a.761.761 0 0 1-.28-.054L2.057 8.604A1.5 1.5 0 0 0 0 10.004v9.346c0 .92.56 1.748 1.415 2.09l6 2.4a2.25 2.25 0 0 0 1.67 0l6.387-2.556a.75.75 0 0 1 .557 0l5.913 2.366A1.5 1.5 0 0 0 24 22.25V12.9c0-.92-.56-1.748-1.415-2.09l-6-2.4a2.25 2.25 0 0 0-1.67 0l-.907.364a.75.75 0 1 0 .558 1.392l.906-.363a.75.75 0 0 1 .557 0l6 2.4a.75.75 0 0 1 .471.697V22.258l-5.914-2.366a2.25 2.25 0 0 0-1.671 0l-6.387 2.555a.75.75 0 0 1-.557 0l-6-2.4a.75.75 0 0 1-.471-.697V10v-.004l5.915 2.362c.266.106.549.16.834.161a.75.75 0 1 0 .002-1.5zm-.75.75V23.25a.75.75 0 0 0 1.5 0V11.769a.75.75 0 0 0-1.5 0zM15 9v11.481a.75.75 0 0 0 1.5 0V9A.75.75 0 0 0 15 9zm-4.5-2.25v9a.75.75 0 0 0 1.5 0v-9a.75.75 0 0 0-1.5 0zm3-3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0zm1.5 0a3.75 3.75 0 1 0-7.5 0 3.75 3.75 0 0 0 7.5 0z">
																														</path>
																													</svg>
																												</div>
																												<div>
																													<span
																														class="bui-f-font-display_one">
																														Domestic
																														and
																														international
																														travellers
																													</span>
																													<p>
																														Most
																														searches
																														were
																														made
																														by
																														domestic
																														travellers
																													</p>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																Domestic
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">64.81%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="64.8102028287134"
																																class="bui-score-bar__value"
																																style="width: 64.8102%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																International
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">35.19%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="35.1897971712866"
																																class="bui-score-bar__value"
																																style="width: 35.1898%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																										</div>
																										<div
																											class="bui-spacer--larger">
																											<span>You
																												can
																												also
																												check
																												your
																												<a class="bui-link"
																													href="{{ url("#") }}">Booker
																													Insights</a>
																											</span>
																										</div>
																									</div>
																								</div>
																								<div
																									class="bui-grid__column-full bui-grid__column-6@large">
																									<div>
																										<div
																											class="bui-spacer">
																											<div
																												class="homepage-demand-data__header">
																												<div
																													class="homepage-demand-data__header-icon-wrapper">
																													<svg width="24"
																														height="24"
																														fill="currentColor"
																														viewBox="0 0 24 24"
																														role="presentation"
																														aria-hidden="true"
																														focusable="false"
																														class="homepage-demand-data__header-icon bk-icon -streamline-mobile_phone">
																														<path
																															d="M18.001 12v8.25a2.25 2.25 0 0 1-2.25 2.25h-7.5a2.25 2.25 0 0 1-2.25-2.25V3.75a2.25 2.25 0 0 1 2.25-2.25h7.5a2.25 2.25 0 0 1 2.25 2.25V12zm1.5 0V3.75A3.75 3.75 0 0 0 15.751 0h-7.5a3.75 3.75 0 0 0-3.75 3.75v16.5A3.75 3.75 0 0 0 8.251 24h7.5a3.75 3.75 0 0 0 3.75-3.75V12zm-14.25 7.5h13.5a.75.75 0 0 0 0-1.5h-13.5a.75.75 0 0 0 0 1.5z">
																														</path>
																													</svg>
																												</div>
																												<div>
																													<span
																														class="bui-f-font-display_one">
																														Device
																													</span>
																													<p>
																														Most
																														searches
																														were
																														mobile
																														searches
																													</p>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																Mobile
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">84.48%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="84.47566866290589"
																																class="bui-score-bar__value"
																																style="width: 84.4757%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																Desktop
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">15.52%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="15.5243313370941"
																																class="bui-score-bar__value"
																																style="width: 15.5243%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																Unidentified
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">0.00%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="0"
																																class="bui-score-bar__value"
																																style="width: 0%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																										</div>
																										<div
																											class="bui-spacer--larger">
																											<span>You
																												can
																												also
																												check
																												your <a
																													class="bui-link"
																													href="{{ url("#") }}">Booker
																													Insights
																												</a>
																											</span>
																										</div>
																									</div>
																								</div>
																								<div
																									class="bui-grid__column-full bui-grid__column-6@large">
																									<div>
																										<div
																											class="bui-spacer">
																											<div
																												class="homepage-demand-data__header">
																												<div
																													class="homepage-demand-data__header-icon-wrapper">
																													<svg width="24"
																														height="24"
																														fill="currentColor"
																														viewBox="0 0 24 24"
																														role="presentation"
																														aria-hidden="true"
																														focusable="false"
																														class="homepage-demand-data__header-icon bk-icon -streamline-world">
																														<path
																															d="M22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12zM7.08 16.5a2.25 2.25 0 0 0 2.182-2.796l-.75-3A2.25 2.25 0 0 0 6.329 9H.976a.75.75 0 0 0-.735.6c-.9 4.42.755 8.97 4.284 11.779a.75.75 0 0 0 1.202-.44l1.008-5.042L6 16.5h1.079zM7.078 15H6a.75.75 0 0 0-.735.603l-1.008 5.042 1.202-.44A10.496 10.496 0 0 1 1.711 9.9l-.735.6h5.353a.75.75 0 0 1 .727.568l.75 3A.75.75 0 0 1 7.08 15zM20.985 4.5h-4.064a2.25 2.25 0 0 0-2.183 1.704l-.75 3A2.25 2.25 0 0 0 16.171 12h1.579l-.74-.627.791 4.75a2.25 2.25 0 0 0 2.22 1.88h1.925a.75.75 0 0 0 .663-.399 11.95 11.95 0 0 0-1.026-12.803l-.598.452h.75V5.25a.75.75 0 0 0-.75-.75zm0 1.5v-.75h-.75v.003a.75.75 0 0 0 .152.452 10.45 10.45 0 0 1 .896 11.197l.663-.399h-1.925a.75.75 0 0 1-.74-.627l-.791-4.75a.75.75 0 0 0-.74-.626h-1.579a.749.749 0 0 1-.727-.932l.75-3A.75.75 0 0 1 16.92 6h4.064z">
																														</path>
																													</svg>
																												</div>
																												<div>
																													<span
																														class="bui-f-font-display_one">
																														Top
																														5
																														countries
																													</span>
																													<p>
																														Most
																														searches
																														were
																														from
																														Bangladesh
																													</p>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																Bangladesh
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">64.81%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="64.8102028287134"
																																class="bui-score-bar__value"
																																style="width: 64.8102%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																United
																																States
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">5.55%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="5.545065968562129"
																																class="bui-score-bar__value"
																																style="width: 5.54507%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																India
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">5.41%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="5.41185464907505"
																																class="bui-score-bar__value"
																																style="width: 5.41185%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																United
																																Kingdom
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">3.61%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="3.6059725005502203"
																																class="bui-score-bar__value"
																																style="width: 3.60597%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																Saudi
																																Arabia
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">3.33%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="3.3337580650766303"
																																class="bui-score-bar__value"
																																style="width: 3.33376%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																										</div>
																										<div
																											class="bui-spacer--larger">
																											<span>You
																												can also
																												check
																												your
																												<a class="bui-link"
																													href="{{ url("#") }}">Booker
																													Insights</a>
																											</span>
																										</div>
																									</div>
																								</div>
																								<div
																									class="bui-grid__column-full bui-grid__column-6@large">
																									<div>
																										<div
																											class="bui-spacer">
																											<div
																												class="homepage-demand-data__header">
																												<div
																													class="homepage-demand-data__header-icon-wrapper">
																													<svg width="24"
																														height="24"
																														fill="currentColor"
																														viewBox="0 0 24 24"
																														role="presentation"
																														aria-hidden="true"
																														focusable="false"
																														class="homepage-demand-data__header-icon bk-icon -streamline-label">
																														<path
																															d="M.311 2.56v6.257a3.75 3.75 0 0 0 1.098 2.651l11.56 11.562a2.25 2.25 0 0 0 3.182 0l6.88-6.88a2.25 2.25 0 0 0 0-3.181L11.468 1.408A3.75 3.75 0 0 0 8.818.31H2.56a2.25 2.25 0 0 0-2.25 2.25zm1.5 0a.75.75 0 0 1 .75-.75h6.257a2.25 2.25 0 0 1 1.59.659l11.562 11.56a.75.75 0 0 1 0 1.06l-6.88 6.88a.75.75 0 0 1-1.06 0L2.47 10.409a2.25 2.25 0 0 1-.659-1.59V2.56zm5.25 3.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm1.5 0a2.25 2.25 0 1 0-4.5 0 2.25 2.25 0 0 0 4.5 0z">
																														</path>
																													</svg>
																												</div>
																												<div>
																													<span
																														class="bui-f-font-display_one">
																														Cancellation
																														policy
																													</span>
																													<p>
																														Most
																														guests
																														staying
																														in
																														Dhaka
																														made
																														free
																														cancellation
																														bookings
																													</p>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																Free
																																cancellation
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">72.27%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="72.2723852520692"
																																class="bui-score-bar__value"
																																style="width: 72.2724%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																Non-refundable
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">24.45%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="24.4544770504138"
																																class="bui-score-bar__value"
																																style="width: 24.4545%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																Partially
																																refundable
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">3.27%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="3.27313769751693"
																																class="bui-score-bar__value"
																																style="width: 3.27314%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																										</div>
																										<div
																											class="bui-spacer--larger">
																											<span>You
																												can
																												also
																												check
																												<a class="bui-link"
																													href="{{ url("#") }}">your
																													cancellation
																													policies</a>
																											</span>
																										</div>
																									</div>
																								</div>
																								<div
																									class="bui-grid__column-full bui-grid__column-6@large">
																									<div>
																										<div
																											class="bui-spacer">
																											<div
																												class="homepage-demand-data__header">
																												<div
																													class="homepage-demand-data__header-icon-wrapper">
																													<svg width="24"
																														height="24"
																														fill="currentColor"
																														viewBox="0 0 24 24"
																														role="presentation"
																														aria-hidden="true"
																														focusable="false"
																														class="homepage-demand-data__header-icon bk-icon -streamline-calendar_dates">
																														<path
																															d="M22.5 13.5v8.25a.75.75 0 0 1-.75.75H2.25a.75.75 0 0 1-.75-.75V5.25a.75.75 0 0 1 .75-.75h19.5a.75.75 0 0 1 .75.75v8.25zm1.5 0V5.25A2.25 2.25 0 0 0 21.75 3H2.25A2.25 2.25 0 0 0 0 5.25v16.5A2.25 2.25 0 0 0 2.25 24h19.5A2.25 2.25 0 0 0 24 21.75V13.5zm-23.25-3h22.5a.75.75 0 0 0 0-1.5H.75a.75.75 0 0 0 0 1.5zM7.5 6V.75a.75.75 0 0 0-1.5 0V6a.75.75 0 0 0 1.5 0zM18 6V.75a.75.75 0 0 0-1.5 0V6A.75.75 0 0 0 18 6zM5.095 14.03a.75.75 0 1 0 1.06-1.06.75.75 0 0 0-1.06 1.06zm.53-1.28a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zm-.53 6.53a.75.75 0 1 0 1.06-1.06.75.75 0 0 0-1.06 1.06zm.53-1.28a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zm5.845-3.97a.75.75 0 1 0 1.06-1.06.75.75 0 0 0-1.06 1.06zm.53-1.28A1.125 1.125 0 1 0 12 15a1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zm-.53 6.53a.75.75 0 1 0 1.06-1.06.75.75 0 0 0-1.06 1.06zM12 18a1.125 1.125 0 1 0 0 2.25A1.125 1.125 0 0 0 12 18a.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zm5.845-3.97a.75.75 0 1 0 1.06-1.06.75.75 0 0 0-1.06 1.06zm.53-1.28a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zm-.53 6.53a.75.75 0 1 0 1.06-1.06.75.75 0 0 0-1.06 1.06zm.53-1.28a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5z">
																														</path>
																													</svg>
																												</div>
																												<div>
																													<span
																														class="bui-f-font-display_one">
																														Length
																														of
																														stay
																													</span>
																													<p>
																														Most
																														searches
																														were
																														looking
																														for
																														a
																														stay
																														of
																														1
																														night
																													</p>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																1
																																night
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">66.90%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="66.9007"
																																class="bui-score-bar__value"
																																style="width: 66.9007%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																2
																																nights
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">7.86%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="7.8613"
																																class="bui-score-bar__value"
																																style="width: 7.8613%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																3-7
																																nights
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">15.68%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="15.679099999999998"
																																class="bui-score-bar__value"
																																style="width: 15.6791%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																8-14
																																nights
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">5.29%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="5.2911"
																																class="bui-score-bar__value"
																																style="width: 5.2911%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																											<div
																												class="bui-score-bar">
																												<div
																													class="bui-spacer">
																													<div
																														class="bui-score-bar__item">
																														<div
																															class="bui-score-bar__header">
																															<h2 data-test-id="score-title"
																																class="bui-score-bar__title">
																																15+
																																nights
																															</h2>
																															<span
																																data-test-id="score-display"
																																class="bui-score-bar__score">4.27%</span>
																														</div>
																														<div
																															class="bui-score-bar__bar">
																															<span
																																data-value="4.2679"
																																class="bui-score-bar__value"
																																style="width: 4.2679%;"></span>
																														</div>
																													</div>
																												</div>
																											</div>
																										</div>
																										<!---->
																									</div>
																								</div>
																							</div>
																							<div class="bui-spacer">
																								<hr class="bui-divider">
																							</div>
																							<div class="bui-spacer">
																								<div class="bui-grid">
																									<div
																										class="bui-grid__column-6">
																										<strong><span>Get
																												your
																												property
																												recovery
																												ready</span></strong>
																										<p><span>Check
																												some
																												relevant
																												advice
																												to
																												adapt to
																												the
																												changes
																												as
																												demand
																												comes
																												back</span>
																										</p>
																									</div>
																									<div
																										class="bui-u-text-right bui-grid__column-6">
																										<a href="{{ url("#") }}"
																											class="bui-button bui-button--secondary">
																											<!---->
																											<span
																												class="bui-button__text"><span>Visit
																													the
																													Opportunity
																													Centre
																												</span>
																											</span>
																										</a>
																									</div>
																								</div>
																							</div>
																							<div
																								class="homepage-demand-data-feedback-comp bui-card">
																								<div
																									class="bui-card__content">
																									<!---->
																									<div
																										class="ext-feedback-cta">
																										<div
																											class="ext-feedback-thumbs">
																											<span
																												possible-tags="ext_footer_feedback_share_feedback_cta">Your
																												feedback
																												is
																												very
																												important
																												to
																												us. Was
																												this
																												data
																												helpful?</span>
																											<button
																												class="ext-feedback__rating"><svg
																													width="16"
																													height="16"
																													fill="currentColor"
																													viewBox="0 0 24 24"
																													role="presentation"
																													aria-hidden="true"
																													focusable="false"
																													class="ext-feedback__thumb-icon ext-feedback__thumb-icon--up bk-icon -streamline-thumbs_up">
																													<path
																														d="M5.239 22.5c.461.008.92.076 1.363.202l3.634 1.038c.602.172 1.226.26 1.853.26h4.885a6.75 6.75 0 0 0 6.716-6.075l.303-5.131a5.252 5.252 0 0 0-3.967-5.365l-1.477-.324A.745.745 0 0 1 18 6.382V3a3 3 0 1 0-6 0v1.554a6.75 6.75 0 0 1-6.75 6.75.75.75 0 0 0-.75.75v9.697c0 .41.329.744.739.75zm.022-1.499l-.011.75H6v-9.697l-.75.75a8.25 8.25 0 0 0 8.25-8.25V3a1.5 1.5 0 0 1 3 0v3.382a2.25 2.25 0 0 0 1.709 2.184l1.475.323a3.745 3.745 0 0 1 2.811 3.823l-.3 5.094c-.267 2.652-2.525 4.694-5.221 4.694h-4.885a5.25 5.25 0 0 1-1.44-.202L7.013 21.26A6.747 6.747 0 0 0 5.261 21zM.75 10.5h4.5l-.75-.75v13.5l.75-.75H.75l.75.75V9.75l-.75.75zm0-1.5a.75.75 0 0 0-.75.75v13.5c0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75V9.75A.75.75 0 0 0 5.25 9H.75z">
																													</path>
																												</svg></button>
																											<button
																												class="ext-feedback__rating"><svg
																													width="16"
																													height="16"
																													fill="currentColor"
																													viewBox="0 0 24 24"
																													role="presentation"
																													aria-hidden="true"
																													focusable="false"
																													class="ext-feedback__thumb-icon ext-feedback__thumb-icon--down bk-icon -streamline-thumbs_down">
																													<path
																														d="M18.76 1.498a5.205 5.205 0 0 1-1.362-.2L13.764.26A6.75 6.75 0 0 0 11.911 0H7.026A6.75 6.75 0 0 0 .31 6.075l-.303 5.131a5.252 5.252 0 0 0 3.967 5.366l1.477.323a.745.745 0 0 1 .549.723V21a3 3 0 1 0 6 0v-1.554a6.75 6.75 0 0 1 6.75-6.75.75.75 0 0 0 .75-.75V2.248a.75.75 0 0 0-.74-.75zm-.02 1.5l.01-.75H18v9.698l.75-.75a8.25 8.25 0 0 0-8.25 8.25V21a1.5 1.5 0 0 1-3 0v-3.383a2.25 2.25 0 0 0-1.708-2.183l-1.476-.323a3.745 3.745 0 0 1-2.811-3.823l.3-5.094C2.072 3.542 4.33 1.5 7.026 1.5h4.885c.487 0 .972.068 1.44.202l3.635 1.038c.57.163 1.16.25 1.754.258zm.01-1.498h4.5L22.5.75v13.5l.75-.75h-4.5l.75.75V.75l-.75.75zm0-1.5a.75.75 0 0 0-.75.75v13.5c0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75V.75a.75.75 0 0 0-.75-.75h-4.5z">
																													</path>
																												</svg></button>
																										</div>
																									</div>
																									<!---->
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div>
																		<div class="homepage-blocks-wrapper">
																			<div
																				class="homepage-blocks-wrapper__content">
																				<!---->
																				<div class="homepage-scores-table">
																					<div>
																						<div
																							class="bui-grid bui-grid--align-center bui-grid--bleed">
																							<div
																								class="bui-grid__column-full bui-grid__column-9@medium">
																								<span
																									class="bui-f-font-display_one"><span>Your
																										scores</span></span>
																							</div>
																							<div
																								class="homepage-header__text-right bui-grid__column-full bui-grid__column-3@medium">
																							</div>
																						</div>
																						<div class="bui-spacer--large">
																						</div>
																					</div>
																					<div class="bui-grid">
																						<div
																							class="bui-grid__column-full bui-grid__column-6@medium bui-grid__column-6@large bui-grid__column-4@huge">
																							<div class="homepage-scores-table__item"
																								value="2.2">
																								<div>
																									<div
																										class="bui-score-bar bui-score-bar--color">
																										<div
																											class="bui-score-bar__item">
																											<div
																												class="bui-score-bar__header">
																												<h2 data-test-id="score-title"
																													class="bui-score-bar__title">
																													<span>Property
																														page
																														score</span>
																												</h2>
																												<span
																													data-test-id="score-display"
																													class="bui-score-bar__score">22%</span>
																											</div>
																											<div
																												class="bui-score-bar__bar">
																												<span
																													data-value="22"
																													class="bui-score-bar__value"
																													style="width: 22%;"></span>
																											</div>
																										</div>
																									</div>
																									<div
																										class="bui-spacer--medium">
																									</div>
																								</div>
																								<p
																									class="homepage-small-data homepage-performance-data">
																									<!----> <span>
																										<span>
																											<span>Area
																												Avg.</span>
																										</span>
																										<span>95%
																										</span>
																									</span>
																								</p>
																								<a href="{{ url("#") }}">
																									<span>Check
																										your score
																										page</span>
																								</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div>
																		<div class="homepage-blocks-wrapper">
																			<div
																				class="homepage-blocks-wrapper__content">
																				<!---->
																				<div
																					class="homepage-booking-performance">
																					<div>
																						<div
																							class="bui-grid bui-grid--align-center bui-grid--bleed">
																							<div
																								class="bui-grid__column-full bui-grid__column-9@medium">
																								<span
																									class="bui-f-font-display_one"><span>Your
																										performance over
																										the
																										last 30
																										days</span></span>
																							</div>
																							<div
																								class="homepage-header__text-right bui-grid__column-full bui-grid__column-3@medium">
																								<a href="{{ url("#") }}"
																									class="bui-link bui-link--primary"><span>View
																										analytics
																									</span>
																								</a>
																							</div>
																						</div>
																						<div class="bui-spacer--large">
																						</div>
																					</div>
																					<div
																						class="homepage-booking-performance__grid">
																						<div
																							class="bui-grid bui-grid--bleed">
																							<div
																								class="bui-grid__column-full bui-grid__column-3@large">
																								<div
																									class="homepage-booking-performance__item">
																									<h4 class="homepage-item-title"
																										style="height: 20px;">
																										<span>Average
																											daily
																											rate</span>
																									</h4>
																									<p
																										class="homepage-item-total homepage-performance-data">
																										<span>US$0</span>
																									</p>
																									<p
																										class="homepage-small-data homepage-performance-data">
																										<!---->
																										<span><span>Area
																												Avg.</span></span>
																										<span>US$59.44</span>
																									</p>
																								</div>
																							</div>
																							<div
																								class="bui-grid__column-full bui-grid__column-3@large">
																								<div
																									class="homepage-booking-performance__item">
																									<h4 class="homepage-item-title"
																										style="height: 20px;">
																										<span>Cancellation
																											rate</span>
																									</h4>
																									<p
																										class="homepage-item-total homepage-performance-data">
																										<span>0%</span>
																									</p>
																									<p
																										class="homepage-small-data homepage-performance-data">
																										<!---->
																										<span><span>Area
																												Avg.</span></span>
																										<span>38.16%</span>
																									</p>
																								</div>
																							</div>
																							<div
																								class="bui-grid__column-full bui-grid__column-3@large">
																								<div
																									class="homepage-booking-performance__item">
																									<h4 class="homepage-item-title"
																										style="height: 20px;">
																										<span>Revenue</span>
																									</h4>
																									<p
																										class="homepage-item-total homepage-performance-data">
																										<span>US$0</span>
																									</p>
																									<!---->
																								</div>
																							</div>
																							<div
																								class="bui-grid__column-full bui-grid__column-3@large">
																								<div
																									class="homepage-booking-performance__item">
																									<h4 class="homepage-item-title"
																										style="height: 20px;">
																										<span>Nights
																											stayed</span>
																									</h4>
																									<p
																										class="homepage-item-total homepage-performance-data">
																										<span>0</span>
																									</p>
																									<!---->
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div>
																		<div class="homepage-blocks-wrapper">
																			<div
																				class="homepage-blocks-wrapper__content">
																				<!---->
																				<div
																					class="homepage-search-performance">
																					<div>
																						<div
																							class="bui-grid bui-grid--align-center bui-grid--bleed">
																							<div
																								class="bui-grid__column-full bui-grid__column-9@medium">
																								<span
																									class="bui-f-font-display_one"><span>Your
																										search
																										performance
																										on Booking.com
																										in
																										the last 30 days
																									</span></span></div>
																							<div
																								class="homepage-header__text-right bui-grid__column-full bui-grid__column-3@medium">
																							</div>
																						</div>
																						<div class="bui-spacer--large">
																						</div>
																					</div>
																					<div>
																						<div class="bui-grid">
																							<div
																								class="bui-grid__column-full bui-grid__column-4@large">
																								<div
																									class="homepage-search-performance__item">
																									<div
																										class="homepage-search-performance__data">
																										<h4 class="homepage-item-title"
																											style="height: 20px;">
																											<span>Search
																												result
																												views</span>
																										</h4>
																										<p
																											class="homepage-item-total">

																										</p>
																										<p
																											class="homepage-performance-data homepage-kpis-conversion">
																											<span>null%
																												viewed
																												the
																												property
																												page</span>
																										</p>
																										<p
																											class="homepage-small-data homepage-performance-data">
																											<!---->
																											<span><span>Area
																													Avg.</span></span>
																											<span
																												dir="ltr">
																												7.62%
																											</span></p>
																									</div>
																									<div
																										class="homepage-search-performance__arrow-wrapper">
																										<div aria-hidden="true"
																											class="homepage-search-performance__arrow">
																											<p>Next</p>
																										</div>
																									</div>
																								</div>
																							</div>
																							<div
																								class="bui-grid__column-full bui-grid__column-4@large">
																								<div
																									class="homepage-search-performance__item">
																									<div
																										class="homepage-search-performance__data">
																										<h4 class="homepage-item-title"
																											style="height: 20px;">
																											<span>Property
																												page
																												views</span>
																										</h4>
																										<p
																											class="homepage-item-total">

																										</p>
																										<p
																											class="homepage-performance-data homepage-kpis-conversion">
																											<span>null%
																												converted
																												into
																												bookings</span>
																										</p>
																										<p
																											class="homepage-small-data homepage-performance-data">
																											<!---->
																											<span><span>Area
																													Avg.</span></span>
																											<span
																												dir="ltr">
																												1.70%
																											</span></p>
																									</div>
																									<div
																										class="homepage-search-performance__arrow-wrapper">
																										<div aria-hidden="true"
																											class="homepage-search-performance__arrow">
																											<p>Next</p>
																										</div>
																									</div>
																								</div>
																							</div>
																							<div
																								class="bui-grid__column-full bui-grid__column-4@large">
																								<div
																									class="homepage-search-performance__item">
																									<div
																										class="homepage-search-performance__data">
																										<h4 class="homepage-item-title"
																											style="height: 20px;">
																											<span>Bookings
																												received</span>
																										</h4>
																										<p
																											class="homepage-item-total">

																										</p>
																										<p
																											class="homepage-performance-data homepage-kpis-conversion">
																										</p>
																										<!---->
																									</div>
																									<!---->
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- /Tab Content -->

													</div>

												</div>

											</div>
										</div>
									</div>
								</div>

								<!-- Side Notification -->
								<div
									class="bui-f-depth-1@large bui-grid__column-full bui-grid__column-4@medium bui-grid__column-3@huge homepage-sidebar">
									<div>
										<p class="bui-u-hidden@huge">
											<span class="sidebar-back-link">
												<svg role="presentation" focusable="false" width="14" aria-hidden="true"
													height="14" viewBox="0 0 24 24" fill="#6B6B6B"
													class="bk-icon -material-ic_chevron_left" color="#6B6B6B">
													<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
												</svg>
												<span>Back to home page</span>
											</span>
										</p>

										<div class="">
											<div>
												<h3 class="sidebar-title-with-icon">
													<svg width="16" aria-hidden="true" role="presentation"
														focusable="false" height="16" fill="#6B6B6B" viewBox="0 0 24 24"
														class="bk-icon -streamline-bell_normal">
														<path
															d="M9.28 21.961a2.837 2.837 0 0 0 5.445 0 .75.75 0 1 0-1.44-.422 1.337 1.337 0 0 1-2.565 0 .75.75 0 1 0-1.44.422zM12.75 3V.75a.75.75 0 0 0-1.5 0V3a.75.75 0 0 0 1.5 0zm-.75.75a6.75 6.75 0 0 1 6.75 6.75c0 3.154.29 5.436.785 6.994.323 1.02.684 1.59.995 1.84L21 18H3l.59 1.212c.248-.315.572-.958.88-2 .49-1.66.78-3.872.78-6.712A6.75 6.75 0 0 1 12 3.75zm0-1.5a8.25 8.25 0 0 0-8.25 8.25c0 2.702-.272 4.772-.72 6.288-.254.864-.493 1.336-.62 1.5A.75.75 0 0 0 3 19.5h18c.708 0 1.022-.892.47-1.335.019.016-.008-.015-.07-.113-.14-.223-.29-.553-.435-1.012-.443-1.396-.715-3.529-.715-6.54A8.25 8.25 0 0 0 12 2.25z">
														</path>
													</svg>
													<span>Notifications</span>

												</h3>
												<div class="bui-f-font-caption">
													<span>All done! Notifications will show
														up here when new tasks come up.</span>
													<div class="bui-spacer--large"></div>
												</div>
												<hr class="bui-divider">
											</div>
										</div>
										<div>
											<div class="bui-spacer--large">
												<h3 class="sidebar-title-with-icon">
													<svg fill="#6B6B6B" viewBox="0 0 24 24" height="16"
														aria-hidden="true" width="16" focusable="false"
														role="presentation" class="bk-icon -streamline-lightbulb">
														<path
															d="M12.75 2.251v-1.5a.75.75 0 0 0-1.5 0v1.5a.75.75 0 0 0 1.5 0zm6.144 3.167l1.061-1.06a.75.75 0 0 0-1.06-1.061l-1.061 1.06a.75.75 0 0 0 1.06 1.061zM21 12.001h1.5a.75.75 0 0 0 0-1.5H21a.75.75 0 0 0 0 1.5zm-3.166 6.144l1.06 1.061a.75.75 0 1 0 1.061-1.06l-1.06-1.061a.75.75 0 1 0-1.061 1.06zM6.166 4.358l-1.06-1.061a.75.75 0 0 0-1.061 1.06l1.06 1.061a.75.75 0 0 0 1.061-1.06zM3 10.5H1.5a.75.75 0 0 0 0 1.5H3a.75.75 0 0 0 0-1.5zm2.106 6.584l-1.061 1.06a.75.75 0 1 0 1.06 1.061l1.061-1.06a.75.75 0 1 0-1.06-1.061zm3.144-.636v2.3a3.75 3.75 0 1 0 7.5 0v-2.3a.75.75 0 0 0-1.5 0v2.3a2.25 2.25 0 0 1-4.5 0v-2.3a.75.75 0 0 0-1.5 0zm9-5.198a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0zm1.5 0a6.75 6.75 0 1 0-13.5 0 6.75 6.75 0 0 0 13.5 0zm-7.5 10.5v1.5a.75.75 0 0 0 1.5 0v-1.5a.75.75 0 0 0-1.5 0z">
														</path>
													</svg>
													<span>Advice</span>
												</h3>
											</div>
											<div class="bui-spacer--medium">
												<div class="sidebar-advice-list--bleed">
													<div class="bui-empty-state">
														<svg data-test-id="default-icon"
															xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
															class="bui-empty-state__icon">
															<path
																d="M13.629 22.5H2.25a.75.75 0 0 1-.75-.75V2.25a.75.75 0 0 1 .75-.75h19.5a.75.75 0 0 1 .75.75v11.379a.75.75 0 0 1-.22.53L14.16 22.28a.75.75 0 0 1-.53.219zm0 1.5a2.25 2.25 0 0 0 1.59-.659l8.122-8.122A2.25 2.25 0 0 0 24 13.63V2.25A2.25 2.25 0 0 0 21.75 0H2.25A2.25 2.25 0 0 0 0 2.25v19.5A2.25 2.25 0 0 0 2.25 24h11.379zM15 23.115V15.75a.75.75 0 0 1 .75-.75h7.365a.75.75 0 0 0 0-1.5H15.75a2.25 2.25 0 0 0-2.25 2.25v7.365a.75.75 0 0 0 1.5 0z">
															</path>
														</svg>
														<p class="bui-empty-state__text">
															<span>We don't have any advice yet - check back soon!</span>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Side Notification -->

							</div>
						</div>
					</main>
					<!-- /Main Content -->


					<!-- Footer -->
					<footer class="ext-footer bui-u-hidden-print">
						<div class="ext-footer__top-content">
							<div class="bui-container bui-container--center">
								<div class="ext-footer__top-content__inner">
									<div class="ext-footer__top-content__first">
										<div class="ext-footer__links">
											<a href="{{ url("#") }}" class="ext-footer__link bui-link bui-link--primary">
												<span>About
													Us</span>
											</a>
											<a href="{{ url("#") }}" class="ext-footer__link bui-link bui-link--primary">
												<span>Privacy and
													Cookie Statement</span>
											</a>
											<a href="{{ url("#") }}" class="ext-footer__link bui-link bui-link--primary">
												<span>FAQs</span>
											</a>
										</div>
									</div>
									<div class="ext-footer__top-content__second">
										<div class="ext-footer__ctas">
											<a href="{{env("APP_URL")}}{{"/property1"}}" data-test-id="ext-footer-add-property-link"
												class="ext-footer__cta bui-button bui-button--primary">
												<span class="bui-button__text">
													<span>Add new
														property</span>
												</span>
											</a>
											<div class="ext-feedback-cta ext-footer__cta">
												<button type="button" class="bui-button bui-button--primary">
													<span class="bui-button__text">
														<span
															possible-tags="ext_footer_feedback_share_feedback_cta">Share
															your feedback</span>
													</span>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="ext-footer__bottom-content">
							<div class="bui-container bui-container--center">
								<div class="ext-footer__bottom-content__inner">
									<div class="ext-footer__bottom-content__first">
										<span>© Copyright
											<a href="{{ url("#") }}"
												class="bui-link bui-link--primary ext-footer__link">Obocas.com</a>
											2022
										</span>
									</div>

								</div>
							</div>
						</div>

					</footer>
					<!-- /Footer -->

				</div>

			</div>
		</main>

	</div>
	<!-- close div#main-container -->


	<div class="popper-inline-block ext-feedback">
		<div data-test-id="wrapper" class="popper-wrapper" style="display:none;">
			<div class="popper-fade popper--light">

				<div class="bui-panel popper-panel">
					<div class="ext-feedback__header">
						<svg focusable="false" role="presentation" aria-hidden="true" width="20" viewBox="0 0 24 24"
							fill="currentColor" height="20" class="ext-feedback__close-icon bk-icon -streamline-close">
							<path
								d="M13 12l6.26-6.26a.73.73 0 0 0-1-1L12 11 5.74 4.71a.73.73 0 1 0-1 1L11 12l-6.29 6.26a.73.73 0 0 0 .52 1.24.73.73 0 0 0 .51-.21L12 13l6.26 6.26a.74.74 0 0 0 1 0 .74.74 0 0 0 0-1z">
							</path>
						</svg>
						<h4 class="ext-feedback__title">
							<span>Share your feedback</span>
						</h4>
					</div>
					<div class="ext-feedback__body">
						<h5 class="ext-feedback__subtitle"><span>What would you like to give feedback on? </span></h5>
						<div class="ext-feedback__feedback-area bui-group bui-group--inline bui-group--large">
							<div name="rate" class="bui-form__group"><label class="bui-radio"><input
										id="feedback-area-general" autocomplete="off" type="radio" name="rate"
										checked="checked" value="1" class="bui-radio__input"> <span
										class="bui-radio__label"><span>General feedback</span></span></label>

							</div>
							<div name="rate" class="bui-form__group"><label class="bui-radio"><input
										id="feedback-area-page" autocomplete="off" type="radio" name="rate" value="2"
										class="bui-radio__input"> <span class="bui-radio__label"><span>Current
											page</span></span></label>

							</div>
						</div>
						<div class="ext-feedback__scale"><button class="ext-feedback__rating">
								1
							</button><button class="ext-feedback__rating">
								2
							</button><button class="ext-feedback__rating">
								3
							</button><button class="ext-feedback__rating">
								4
							</button><button class="ext-feedback__rating">
								5
							</button></div>
						<div class="ext-feedback__legend-for-scale"><span>Poor</span> <span>Excellent</span></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="popper-inline-block ext-feedback">
		<div data-test-id="wrapper" class="popper-wrapper" style="display:none;">
			<div class="popper-fade popper--light">

				<div class="bui-panel popper-panel">
					<div class="ext-feedback__header"><svg height="20" fill="currentColor" viewBox="0 0 24 24"
							role="presentation" focusable="false" width="20" aria-hidden="true"
							class="ext-feedback__close-icon bk-icon -streamline-close">
							<path
								d="M13 12l6.26-6.26a.73.73 0 0 0-1-1L12 11 5.74 4.71a.73.73 0 1 0-1 1L11 12l-6.29 6.26a.73.73 0 0 0 .52 1.24.73.73 0 0 0 .51-.21L12 13l6.26 6.26a.74.74 0 0 0 1 0 .74.74 0 0 0 0-1z">
							</path>
						</svg>
						<div role="status" class="bui-alert bui-alert--inline bui-alert--success"><span
								role="presentation" class="icon--hint bui-alert__icon"><svg data-test-id="default-icon"
									xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
									<path
										d="M56.62 93.54a4 4 0 0 1-2.83-1.18L28.4 67a4 4 0 1 1 5.65-5.65l22.13 22.1 33-44a4 4 0 1 1 6.4 4.8L59.82 91.94a4.06 4.06 0 0 1-2.92 1.59zM128 64c0-35.346-28.654-64-64-64C28.654 0 0 28.654 0 64c0 35.346 28.654 64 64 64 35.33-.039 63.961-28.67 64-64zm-8 0c0 30.928-25.072 56-56 56S8 94.928 8 64 33.072 8 64 8c30.914.033 55.967 25.086 56 56z">
									</path>
								</svg></span>
							<div class="bui-alert__description">

								<p class="bui-alert__text"><span>Thanks for your feedback</span></p>

							</div>
						</div>
					</div>
					<div class="ext-feedback__body">
						<h5 class="ext-feedback__subtitle"><span>Could you give us more details?</span></h5>
						<div rows="3" class="ext-feedback-written-feedback bui-form__group"><label
								for="feedback"></label> <textarea id="feedback" aria-describedby="describe-feedback"
								autocomplete="off" rows="3" class="bui-form__control bui-input-textarea"></textarea>

						</div>
						<div class="ext-feedback__actions"><button type="button" disabled="disabled"
								class="ext-feedback__action bui-button bui-button--primary">
								<span class="bui-button__text"><span>Send</span></span></button> <button type="button"
								class="ext-feedback__action bui-button bui-button--secondary">
								<span class="bui-button__text"><span>Skip</span></span></button></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="popper-inline-block ext-feedback">
		<div data-test-id="wrapper" class="popper-wrapper" style="display:none;">
			<div class="popper-fade popper--light">

				<div class="bui-panel popper-panel">
					<div class="ext-feedback__header"><svg aria-hidden="true" width="20" focusable="false"
							role="presentation" viewBox="0 0 24 24" fill="currentColor" height="20"
							class="ext-feedback__close-icon bk-icon -streamline-close">
							<path
								d="M13 12l6.26-6.26a.73.73 0 0 0-1-1L12 11 5.74 4.71a.73.73 0 1 0-1 1L11 12l-6.29 6.26a.73.73 0 0 0 .52 1.24.73.73 0 0 0 .51-.21L12 13l6.26 6.26a.74.74 0 0 0 1 0 .74.74 0 0 0 0-1z">
							</path>
						</svg>
						<div role="status" class="bui-alert bui-alert--inline bui-alert--success"><span
								role="presentation" class="icon--hint bui-alert__icon"><svg data-test-id="default-icon"
									xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
									<path
										d="M56.62 93.54a4 4 0 0 1-2.83-1.18L28.4 67a4 4 0 1 1 5.65-5.65l22.13 22.1 33-44a4 4 0 1 1 6.4 4.8L59.82 91.94a4.06 4.06 0 0 1-2.92 1.59zM128 64c0-35.346-28.654-64-64-64C28.654 0 0 28.654 0 64c0 35.346 28.654 64 64 64 35.33-.039 63.961-28.67 64-64zm-8 0c0 30.928-25.072 56-56 56S8 94.928 8 64 33.072 8 64 8c30.914.033 55.967 25.086 56 56z">
									</path>
								</svg></span>
							<div class="bui-alert__description">

								<p class="bui-alert__text"><span>Thanks for your feedback</span></p>

							</div>
						</div>
					</div>
					<div class="ext-feedback__body">
						<p class="ext-feedback__copy"><span>Your feedback helps us optimize the tools and improve your
								experience</span></p> <button type="button" class="bui-button bui-button--primary">
							<span class="bui-button__text"><span>Done</span></span></button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="popper-inline-block ext-feedback">
		<div data-test-id="wrapper" class="popper-wrapper" style="display:none;">
			<div class="popper-fade popper--light">

				<div class="bui-panel popper-panel">
					<div class="ext-feedback__header"><svg fill="currentColor" viewBox="0 0 24 24" height="20"
							focusable="false" role="presentation" aria-hidden="true" width="20"
							class="ext-feedback__close-icon bk-icon -streamline-close">
							<path
								d="M13 12l6.26-6.26a.73.73 0 0 0-1-1L12 11 5.74 4.71a.73.73 0 1 0-1 1L11 12l-6.29 6.26a.73.73 0 0 0 .52 1.24.73.73 0 0 0 .51-.21L12 13l6.26 6.26a.74.74 0 0 0 1 0 .74.74 0 0 0 0-1z">
							</path>
						</svg>
						<div role="status" class="bui-alert bui-alert--inline bui-alert--error"><span
								role="presentation" class="icon--hint bui-alert__icon"><svg data-test-id="default-icon"
									xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path
										d="M12 15.75A1.125 1.125 0 1 0 12 18a1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zm.75-2.25V5.25a.75.75 0 0 0-1.5 0v8.25a.75.75 0 0 0 1.5 0zM22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
									</path>
								</svg></span>
							<div class="bui-alert__description">

								<p class="bui-alert__text"><span>We're experiencing some problems</span></p>

							</div>
						</div>
					</div>
					<div class="ext-feedback__body"><span>Please try again later</span></div>
				</div>
			</div>
		</div>
	</div>

	<div class="popper-inline-block homepage-demand-data-popover" trigger-element="[object HTMLLIElement]">
		<div data-test-id="wrapper" class="popper-wrapper" style="display: none;">
			<div class="popper-fade popper--light">
				<div data-popper-arrow="" data-test-id="arrow" class="popper-tip"></div>
				<div class="bui-panel popper-panel">
					<h4><span>Can't keep up with a constantly changing market?</span></h4>
					<p><span>Learn about the latest search trends in Dhaka, respond to the guest demand and capture new
							revenues.</span></p> <button type="button" class="bui-banner__close"><svg
							fill="currentColor" width="24" height="24" viewBox="0 0 24 24" role="presentation"
							aria-hidden="true" focusable="false" class="bk-icon -streamline-close">
							<path
								d="M13 12l6.26-6.26a.73.73 0 0 0-1-1L12 11 5.74 4.71a.73.73 0 1 0-1 1L11 12l-6.29 6.26a.73.73 0 0 0 .52 1.24.73.73 0 0 0 .51-.21L12 13l6.26 6.26a.74.74 0 0 0 1 0 .74.74 0 0 0 0-1z">
							</path>
						</svg></button>
				</div>
			</div>
		</div>
	</div>



	<!-- ===================== Required Js File Links ===================== -->
	<!-- jquery js  -->
	<script src="{{ asset("/hotel-admin/assets/js/jquery-1.12.4.min.js") }}"></script>
	<!-- bootstrap js  -->
	<script src="{{ asset("/hotel-admin/assets/js/bootstrap.bundle.min.js") }}"></script>
	<!-- custom Js  -->
	<script src="{{ asset("/hotel-admin/assets/js/script.js") }}"></script>


</body>

</html>