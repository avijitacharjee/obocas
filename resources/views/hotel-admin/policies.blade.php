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
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/style.min.css") }}">
	
	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/pages/policies.min.css") }}">

</head>


<body>
	<div id="main-container" class="container-fluid tfa_phone_alt container-fluid--color">
		<main id="content">
			<div class="page-body ">

				<div id="legacy-banners-new-hp" class="bui-u-hidden"></div>

				<div class="js-dont-warn-about-unsaved-changes">

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
												<a href="{{ url("#") }}" class="ext-navigation-top-item__link">
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



					<main class="main">
						<div class="bui-container bui-container--center">
							<!-- Page Header -->
							<div class="bui-page-header">
								<h1 class="bui-page-header__title">
									<span>Policies</span>
								</h1>
								<p class="bui-page-header__description">
									<span>
										All your payment, cancellation and policy
										information is kept here - so you can view, manage and edit everything in one
										place.
									</span>
								</p>
							</div>
							<!-- /Page Header -->

							<!-- Cancellation and prepayment policies -->
							<div id="Cancellation">
								<div class="bui-spacer">
									<h2>Cancellation and prepayment policies </h2>
									<hr class="bui-divider">
								</div>
								<div class="policies-group">
									<div class="cancellation-policies-wrapper">
										<div class="policies-block">
											<div class="policy-block__content">
												<div class="policy-block__row">
													<div class="policy-block__col-info">
														<header
															class="policy-block__header-wrapper policy-block__header-wrapper_transparent">

															<h4 class="policy-block__header js-smp-term-title">
																Flexible - 18:00 on arrival day
															</h4>
														</header>
														<div class="policy-block__content-wrapper">
															<ul class="policy-block__item-option-list">
																<li class="policy-block__item-option">
																	The guest can cancel free of charge until 18:00 on
																	the day of arrival. The guest will be charged the
																	total price of the reservation if they cancel after
																	18:00 on the day of arrival.
																</li>
																<li class="policy-block__item-option">No prepayment is
																	needed.</li>

															</ul>


														</div>
														<div class="policy-block__button-wrapper">
															<div class="ext-passport-validation">
																<button type="button" data-bs-toggle="modal"
																	data-bs-target="#EditModal"
																	class="bui-button bui-button--primary">
																	<span class="bui-button__text">
																		<span>Edit</span>
																	</span>
																</button>

															</div>

															<div class="ext-passport-validation">
																<button type="button" data-bs-toggle="modal"
																	data-bs-target="#ApplyProperties"
																	class="bui-button bui-button--secondary">
																	<span class="bui-button__text">
																		<span>Apply
																			to other properties</span>
																	</span>
																</button>

															</div>


														</div>
													</div>

												</div>
											</div>
										</div>
										<div class="policies-block">
											<div class="policy-block__content">
												<div class="policy-block__row">
													<div class="policy-block__col-info">
														<header
															class="policy-block__header-wrapper policy-block__header-wrapper_transparent">

															<h4 class="policy-block__header js-smp-term-title">
																Non-refundable
															</h4>
														</header>
														<div class="policy-block__content-wrapper">
															<ul class="policy-block__item-option-list">
																<li class="policy-block__item-option">
																	The guest will be charged the total price of the
																	reservation if they cancel at any time.
																</li>
																<li class="policy-block__item-option">The guest will be
																	charged a prepayment of the total price of the
																	reservation at any time.</li>

															</ul>


														</div>
														<div class="policy-block__button-wrapper">
															<div class="ext-passport-validation">
																<button type="button"
																	class="bui-button bui-button--destructive"
																	data-bs-toggle="modal"
																	data-bs-target="#Deletemodal">
																	<span class="bui-button__text">
																		<span>Delete</span>
																	</span>
																</button>

															</div>
															<div class="ext-passport-validation">
																<button type="button" data-bs-toggle="modal"
																	data-bs-target="#ApplyProperties"
																	class="bui-button bui-button--secondary">
																	<span class="bui-button__text">
																		<span>
																			Apply
																			to other properties</span>
																	</span>
																</button>
															</div>


														</div>
													</div>

												</div>
											</div>
										</div>

										<div class="policies-block policy-block--create-policy">
											<div
												class="policy-block__content-wrapper policy-block__content-wrapper--full">
												<p class="card-form-copy text-center">
													<span>You can create 4 more policies</span>
												</p>
												<div class="text-center">
													<div class="ext-passport-validation">
														<button type="button" class="bui-button bui-button--primary"
															data-bs-toggle="modal" data-bs-target="#CreateModal">
															<span class="bui-button__icon">
																<svg width="14" height="14" color="#fff" fill="#fff"
																	viewBox="0 0 24 24" role="presentation"
																	aria-hidden="true" focusable="false"
																	class="bk-icon -streamline-plus">
																	<path
																		d="M20.25 11.25h-7.5v-7.5a.75.75 0 0 0-1.5 0v7.5h-7.5a.75.75 0 0 0 0 1.5h7.5v7.5a.75.75 0 0 0 1.5 0v-7.5h7.5a.75.75 0 0 0 0-1.5z">
																	</path>
																</svg>
															</span>
															<span class="bui-button__text">
																<span>
																	Create new cancellation policy</span>
															</span>
														</button>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- /Cancellation and prepayment policies -->

							<!-- Modification and cancellation exceptions -->
							<div id="ModificationAndCancellationExceptions">
								<div class="bui-spacer">
									<h2>Modification and cancellation exceptions</h2>
									<hr class="bui-divider">
								</div>
								<div class="policies-group">
									<div class="policies-block">
										<div class="policies-block__content">
											<header class="policies-block__header-wrapper">
												<h4 class="policies-block__header">
													Date changes for non-refundable bookings
												</h4>
											</header>
											<div class="policies-block__content-wrapper">
												<h6 class="policy-block__item-header">
													<span>
														<strong>
															Save time, make it
															easier for guests to reschedule if plans
															change
														</strong>
													</span>
												</h6>
												<p>
													<span>
														Reduce your workload and improve guest experience by automating
														your process for date changes. You'll always be in control of
														when guests make changes.
													</span>
												</p>
											</div>
											<div class="policies-block__footer">
												<div class="ext-passport-validation">
													<a href="{{ url("date-changes-non-refundable-booking.html.html") }}"
														class="bui-button bui-button--primary">
														<span class="bui-button__text">
															<span>Edit</span>
														</span>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="policies-block">
										<div class="policies-block__content">
											<header class="policies-block__header-wrapper">
												<h4 class="policies-block__header">
													Cancellation exceptions
												</h4>
											</header>
											<div class="policies-block__content-wrapper">
												<h6 class="policy-block__item-header">
													<span>Grace Period</span>
												</h6>
												<ul>
													<li><span>Nothing selected</span>
													</li>
												</ul>

											</div>
											<div class="policies-block__footer">
												<div class="ext-passport-validation">
													<button type="button" class="bui-button bui-button--primary"
														data-bs-toggle="modal" data-bs-target="#GracePeriodModal">
														<span class="bui-button__text">
															<span>Edit</span>
														</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Modification and cancellation exceptions -->

							<!-- Children & extra beds -->
							<div id="ChildrenAndExtraBeds">
								<div class="bui-spacer">
									<h2>Children &amp; extra beds</h2>
									<hr class="bui-divider">
								</div>
								<div role="status" class="bui-alert bui-alert--info">
									<span role="presentation" class="icon--hint bui-alert__icon">
										<svg data-test-id="default-icon" xmlns="http://www.w3.org/2000/svg"
											viewBox="0 0 24 24">
											<path
												d="M14.25 15.75h-.75a.75.75 0 0 1-.75-.75v-3.75a1.5 1.5 0 0 0-1.5-1.5h-.75a.75.75 0 0 0 0 1.5h.75V15a2.25 2.25 0 0 0 2.25 2.25h.75a.75.75 0 0 0 0-1.5zM11.625 6a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zM22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
											</path>
										</svg>
									</span>
									<div class="bui-alert__description">

										<p class="bui-alert__text">
											<span>You can create even more tailored children
												rates with the new
												<strong>
													flexible children rates</strong>.
												Learn more
												<a href="{{ url("#") }}">here</a>.
											</span>
										</p>

									</div>
								</div>
								<div class="policies-group">
									<div id="policies-block-child-policies" class="policies-block">
										<div class="policies-block__content">
											<header class="policies-block__header-wrapper">
												<h4 class="policies-block__header">
													Children policies
												</h4>
											</header>
											<div class="policies-block__content-wrapper">
												<div class="policy-group-preview">
													<div class="bui-spacer--large">
														<p class="policy-group-preview__category">
															Child policies
														</p>
														<ul
															class="policy-group-preview__list bui-list bui-list--unordered">
															<li class="bui-list__item">
																<div>
																	Children of any age are allowed.
																</div>
															</li>
														</ul>
													</div>
												</div>
												<div class="policy-group-preview">
													<p class="policy-group-preview__category">
														Children rates
													</p>
													<ul class="policy-group-preview__list bui-list bui-list--unordered">
														<li class="bui-list__item">
															You have no child rates set
														</li>
													</ul>
												</div>
											</div>
											<div class="policies-block__footer">
												<div class="ext-passport-validation"><button type="button"
														class="bui-button bui-button--primary">
														<span class="bui-button__text">
															<span>Edit</span>
														</span>
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="policies-block">
										<div class="policies-block__content">
											<header class="policies-block__header-wrapper">
												<h4 class="policies-block__header">
													Extra bed &amp; cot options
												</h4>
											</header>
											<div class="policies-block__content-wrapper">
												<div class="policy-group-preview">
													<p class="policy-group-preview__category">
														Cots
													</p>
													<ul class="policy-group-preview__list bui-list bui-list--unordered">
														<li class="bui-list__item">
															No cots are available.
														</li>
													</ul>
												</div>
												<div class="policy-group-preview">
													<p class="policy-group-preview__category">
														Extra beds
													</p>
													<ul class="policy-group-preview__list bui-list bui-list--unordered">
														<li class="bui-list__item">
															No extra beds are available.
														</li>
													</ul>
												</div>
											</div>
											<div class="policies-block__footer">
												<div class="ext-passport-validation"><button type="button"
														class="bui-button bui-button--primary">
														<span class="bui-button__text"><span>Edit</span></span></button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Children & extra beds -->

							<!-- Other policies -->
							<div id="Rest">
								<div class="bui-spacer">
									<h2>Other policies</h2>
									<hr class="bui-divider">
								</div>
								<div class="policies-group">
									<div class="policies-block">
										<div class="policies-block__content">
											<header class="policies-block__header-wrapper">
												<h4 class="policies-block__header">
													Guest payment options
												</h4>
											</header>
											<div class="policies-block__content-wrapper">
												<div>
													<h6 class="policy-block__item-header">
														<span>You only accept
															cash</span>
													</h6>
												</div>
											</div>
											<div class="policies-block__footer">
												<div class="ext-passport-validation">

													<button type="button" class="bui-button bui-button--primary"
														data-bs-toggle="modal" data-bs-target="#PaymentOptionModal">
														<span class="bui-button__text">
															<span>Edit</span>
														</span>
													</button>

												</div>
											</div>
										</div>
									</div>
									<div class="policies-block">
										<div class="policies-block__content">
											<header class="policies-block__header-wrapper">
												<h4 class="policies-block__header">
													Internet, parking and pets
												</h4>
											</header>
											<div class="policies-block__content-wrapper">
												<div>
													<h6 class="policy-block__item-header">
														<span>Internet</span>
													</h6>
													<ul>
														<li>
															No internet access available.
														</li>
													</ul>
												</div>
												<div>
													<h6 class="policy-block__item-header">
														<span>Parking</span></h6>
													<ul class="policy-block__list-item-alert">
														<div role="status"
															class="bui-alert bui-alert--inline bui-alert--info"><span
																role="presentation"
																class="icon--hint bui-alert__icon"><svg
																	data-test-id="default-icon"
																	xmlns="http://www.w3.org/2000/svg"
																	viewBox="0 0 24 24">
																	<path
																		d="M14.25 15.75h-.75a.75.75 0 0 1-.75-.75v-3.75a1.5 1.5 0 0 0-1.5-1.5h-.75a.75.75 0 0 0 0 1.5h.75V15a2.25 2.25 0 0 0 2.25 2.25h.75a.75.75 0 0 0 0-1.5zM11.625 6a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zM22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
																	</path>
																</svg></span>
															<div class="bui-alert__description">

																<p class="bui-alert__text">
																	<span>Parking information can now
																		be found on the <a href="{{ url("#") }}">facilities
																			&amp; services</a> page
																	</span>
																</p>
															</div>
														</div>
													</ul>
												</div>
												<div>
													<h6 class="policy-block__item-header">
														<span>Pets</span></h6>
													<ul>
														<li>
															Pets are not allowed.
														</li>
													</ul>
												</div>
											</div>
											<div class="policies-block__footer">
												<div class="ext-passport-validation">
													<button type="button" class="bui-button bui-button--primary"
														data-bs-toggle="modal" data-bs-target="#InternetnModal">
														<span class="bui-button__text">
															<span>Edit</span>
														</span>
													</button>
												</div>
											</div>
										</div>
									</div>

									<div class="policies-block">
										<div class="policies-block__content">
											<header class="policies-block__header-wrapper">
												<h4 class="policies-block__header">
													Guest information
												</h4>
											</header>
											<div class="policies-block__content-wrapper">
												<div>
													<h6 class="policy-block__item-header">
														<span>Check-in and check-out
															times</span>
													</h6>
													<ul>
														<li class="policy-block__item-option">
															<span>Check-in from 12:00
																to 12:00</span>
														</li>
														<li class="policy-block__item-option">
															<span>Check-out until
																10:00</span>
														</li>
													</ul>
												</div>
												<div>
													<h6 class="policy-block__item-header">
														<span>Guest address
															details</span>
													</h6>
													<ul>
														<li>
															<span>Your guests do not have to provide their address
																details when they book</span>

														</li>
													</ul>
													<h6 class="policy-block__item-header">
														<span>Guest phone
															number</span></h6>
													<ul>
														<li><span>Your guests must provide a phone number when they
																book</span></li>
													</ul>
												</div>
												<div>
													<h6 class="policy-block__item-header"><span>Age limit</span></h6>
													<ul>
														<li><span>No age limit</span></li>
													</ul>
												</div>
												<div>
													<h6 class="policy-block__item-header"><span>Curfew</span></h6>
													<ul>
														<li><span>No curfew</span></li>
													</ul>
												</div>
											</div>
											<div class="policies-block__footer">
												<div class="ext-passport-validation">
													<button type="button" data-bs-toggle="modal"
														data-bs-target="#GuestInformationModal"
														class="bui-button bui-button--primary">
														<span class="bui-button__text"><span>Edit</span></span>
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="policies-block">
										<div class="policies-block__content">
											<header class="policies-block__header-wrapper">
												<h4 class="policies-block__header">
													Damage deposit
												</h4>
											</header>
											<div class="policies-block__content-wrapper">
												<h6 class="policy-block__item-header">
													Guests are not required to pay a damage deposit.
												</h6>
											</div>
											<div class="policies-block__footer">
												<div class="ext-passport-validation">
													<a href="{{ url("damage-deposit.html") }}"
														class="bui-button bui-button--primary">
														<span class="bui-button__text"><span>Edit</span>
														</span>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div id="RiskFreeReservations" class="policies-block">
										<div class="policies-block__content">
											<header class="policies-block__header-wrapper">
												<h4 class="policies-block__header">
													Risk-Free Reservations
												</h4>
											</header>
											<div class="policies-block__content-wrapper">
												<div>
													<div><span>Join today and get more bookings with minimal
															risk!</span>
													</div>
													<div class="bui-spacer"></div>
													<div><span>Recent study shows that the main reason for over 70% of
															guests to book a property was the free cancellation policy.
															With Risk-Free Reservations programme, you can offer extra
															flexibility in your cancellation policy to attract more
															guests with minimal risk.</span>
													</div>
												</div>
											</div>
											<div class="policies-block__footer">
												<div class="ext-passport-validation"><button type="button"
														class="bui-button bui-button--primary">
														<span class="bui-button__text"><span>
																Learn more
															</span>
														</span>
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="policies-block">
										<div class="policies-block__content">
											<header class="policies-block__header-wrapper">
												<h4 class="policies-block__header">
													Prevent bookings that are likely to be cancelled
												</h4>
											</header>
											<div class="policies-block__content-wrapper">
												<h6 class="policy-block__item-header policy-block__item-header--empty">
													<span>We're introducing a feature that shortens the period of your
														FREE cancellation policy specifically for customers that are
														very likely to cancel. </span>
												</h6>
											</div>
											<div class="policies-block__footer">
												<div class="ext-passport-validation"><button type="button"
														class="bui-button bui-button--primary">
														<span class="bui-button__text">
															<span>Edit</span>
														</span>
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="policies-block">
										<div class="policies-block__content">
											<header class="policies-block__header-wrapper">
												<h4 class="policies-block__header">
													30+ night stays (monthly stays)
												</h4>
											</header>
											<div class="policies-block__content-wrapper">
												<ul class="policy-block__item-option-list">
													<li class="policy-block__item-option">
														<span>You do not accept
															reservations for stays over 30 nights</span>
													</li>
												</ul>
											</div>
											<div class="policies-block__footer">
												<div class="ext-passport-validation"><button type="button"
														class="bui-button bui-button--primary">
														<span class="bui-button__text">
															<span>Edit</span>
														</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Other policies -->
						</div>
					</main>



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
											<a href="{{ url("#") }}" data-test-id="ext-footer-add-property-link"
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

	<!-- Edit Model -->
	<div id="EditModal" class="bui-modal modal fade">
		<div class="bui-modal__wrapper modal-dialog">
			<div class="bui-modal__align">
				<aside class="bui-modal__content bui-f-depth-1">
					<div class="bui-modal__body">
						<div>
							<h3 class="policy-form-title">
								Flexible - 18:00 on arrival day
							</h3>
							<div class="policy-form-section">
								<h4 class="policy-form-section-title">
									<span>Cancellation preference</span>
								</h4>
								<div class="form-group">
									<label>
										<span>Is there a period when the guest can cancel free of
											charge?</span>
									</label>
									<div class="radio-block">
										<div class="radio">
											<label>
												<input type="radio" name="free_cancel" value="1">
												<span>Yes</span>
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="free_cancel" value="0">
												<span>No</span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="policy-form-section">
									<h4 class="policy-form-section-title">
										<span>Specify conditions</span>
									</h4>
									<ul class="list-unstyled row clearfix list-smp-customized-condition">
										<li class="col-xs-12 col-sm-6">
											<div>
												<div class="form-group">
													<label>How long before arrival can the guest
														cancel free of charge?</label>
													<select name="interval" class="form-control">
														<option value=""><span>Please select...</span></option>
														<option value="18h">until 18:00 on the day of arrival</option>
														<option value="14h">until 14:00 on the day of arrival</option>
														<option value="1d">until 1 day before arrival</option>
													</select>
												</div>
												<div class="form-group">
													<label>
														How much is the guest charged for
														cancellation after 18:00 on the day of arrival?
													</label>

													<select name="cancelation" class="form-control">
														<option value=""><span>Please select...</span></option>
														<option value="100fn">the cost of the first night</option>
														<option value="50">50% of the total price</option>
														<option value="100">100% of the total price</option>
													</select>

												</div>
											</div>
										</li>
									</ul>
									<ul class="list-unstyled row clearfix list-smp-customized-condition ">
										<li class="col-xs-12 col-sm-6">
											<div class="form-group">
												<label>
													<span>
														How much is the guest charged for a no
														show?
													</span>
												</label>
												<select name="noshow_id" class="form-control">
													<option value=""><span>Same as the cancellation fee</span></option>
													<option value="337">100% of the total price </option>
												</select>
											</div>
										</li>
									</ul>
									<div class="policy-form-summary">
										<h5 class="policy-form-summary-title">
											<span>Policy summary</span>
										</h5>
										<p class="policy-form-summary-text">
											The guest can cancel free of charge until 18:00 on the day of arrival. The
											guest will be charged the total price of the reservation if they cancel
											after 18:00 on the day of arrival.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<footer data-test-id="footer" class="bui-modal__footer">
						<div class="bui-group bui-group--inline">
							<button type="button" class="bui-button bui-button--primary">
								<span class="bui-button__text">
									<span>Save</span>
								</span>
							</button>
							<button type="button" class="bui-button bui-button--secondary" data-bs-dismiss="modal">
								<span class="bui-button__text">
									<span>Cancel</span>
								</span>
							</button>
						</div>
					</footer>
					<button type="button" class="bui-modal__close" data-bs-dismiss="modal">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
							<path
								d="M13 12l6.26-6.26a.73.73 0 0 0-1-1L12 11 5.74 4.71a.73.73 0 1 0-1 1L11 12l-6.29 6.26a.73.73 0 0 0 .52 1.24.73.73 0 0 0 .51-.21L12 13l6.26 6.26a.74.74 0 0 0 1 0 .74.74 0 0 0 0-1z">
							</path>
						</svg>
					</button>
				</aside>
			</div>
		</div>
	</div>
	<!-- /Edit Model -->

	<!-- Delete Modal -->
	<div id="Deletemodal" class="bui-modal modal fade">
		<div class="bui-modal__wrapper modal-dialog">
			<div class="bui-modal__align">
				<aside class="bui-modal__content bui-f-depth-1">
					<header class="bui-modal__header">
						<h1 id="" class="bui-modal__title">
							Non-refundable
						</h1>
					</header>
					<hr class="bui-divider bui-divider--light">
					<div class="bui-modal__body">
						<span>
							Are you sure you want to delete this policy? If so, you can click "Yes, delete it" below.
						</span>
					</div>
					<hr class="bui-divider bui-divider--light">
					<footer class="bui-modal__footer">
						<div class="bui-group bui-group--inline">
							<button type="button" class="bui-button bui-button--secondary" data-bs-dismiss="modal">
								<span class="bui-button__text">
									<span>Cancel</span>
								</span>
							</button>
							<button type="button" class="bui-button bui-button--destructive">
								<span class="bui-button__text">
									<span>Yes, delete it</span>
								</span>
							</button>
						</div>
					</footer>
					<button type="button" class="bui-modal__close" data-bs-dismiss="modal">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
							<path
								d="M13 12l6.26-6.26a.73.73 0 0 0-1-1L12 11 5.74 4.71a.73.73 0 1 0-1 1L11 12l-6.29 6.26a.73.73 0 0 0 .52 1.24.73.73 0 0 0 .51-.21L12 13l6.26 6.26a.74.74 0 0 0 1 0 .74.74 0 0 0 0-1z">
							</path>
						</svg>
					</button>
				</aside>
			</div>
			<!-- <div data-bs-dismiss="modal" class="bui-modal__overlay"></div> -->
		</div>
	</div>
	<!-- /Delete Modal -->

	<!-- Apply to other properties -->
	<div id="ApplyProperties" class="bui-modal modal fade">
		<div class="bui-modal__wrapper modal-dialog">
			<div class="bui-modal__align">
				<aside class="bui-modal__content bui-f-depth-1">
					<div class="bui-modal__body">
						<div class="bulk--modal">
							<div>
								<h1 id="" class="bui-modal__title">
									You’re about to apply a policy
								</h1>
								<hr class="bui-divider">
							</div>
							<div class="bulk--modal__step-container">
								<p><span>All selected properties will have the following policy:</span></p>
								<div class="bui-spacer--large">
									<div class="bulk--modal__policy-summary bui-card">
										<div class="bui-card__content">
											<header class="bui-card__header">
												<h1 class="bui-card__title">
													Flexible - 18:00 on arrival day
												</h1>
											</header>
											<ul>
												<li>
													The guest can cancel free of charge until 18:00 on the day of
													arrival. The guest will be charged the total price of the
													reservation if they cancel after 18:00 on the day of arrival.
												</li>
												<li>
													No prepayment is needed.
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="bulk--modal__properties-list__header">
									<h2 class="bui-card__title bulk--modal__properties-list__header-title">
										<span>Select properties to apply to</span>
									</h2>
								</div>
								<div class="bui-spacer--large">
									<div>

										<div class="peg-wizard__filter">
											<div class="bui-spacer--large">
												<div class="bui-grid bui-grid--align-center"></div>
											</div>
										</div>

										<!-- Empty Data Table -->
										<div class="bui-empty-state d-none">
											<svg data-test-id="default-icon" xmlns="http://www.w3.org/2000/svg"
												viewBox="0 0 24 24" class="bui-empty-state__icon">
												<path
													d="M13.629 22.5H2.25a.75.75 0 0 1-.75-.75V2.25a.75.75 0 0 1 .75-.75h19.5a.75.75 0 0 1 .75.75v11.379a.75.75 0 0 1-.22.53L14.16 22.28a.75.75 0 0 1-.53.219zm0 1.5a2.25 2.25 0 0 0 1.59-.659l8.122-8.122A2.25 2.25 0 0 0 24 13.63V2.25A2.25 2.25 0 0 0 21.75 0H2.25A2.25 2.25 0 0 0 0 2.25v19.5A2.25 2.25 0 0 0 2.25 24h11.379zM15 23.115V15.75a.75.75 0 0 1 .75-.75h7.365a.75.75 0 0 0 0-1.5H15.75a2.25 2.25 0 0 0-2.25 2.25v7.365a.75.75 0 0 0 1.5 0z">
												</path>
											</svg>
											<p class="bui-empty-state__text">
												<span>We couldn't find any eligible properties</span>
											</p>
										</div>
										<!-- /Empty Data Table -->

										<!-- Data Table -->
										<div class="table-responsive modal-data">
											<table class="table table-bordered">
												<thead>
													<tr class="text-center">
														<th scope="col">S.N</th>
														<th scope="col">First</th>
														<th scope="col">Last</th>
														<th scope="col">Select</th>
													</tr>
												</thead>
												<tbody>
													<tr class="text-center">
														<th scope="row">1</th>
														<td>Mark</td>
														<td>Otto</td>
														<td>
															<input name="radio" class="Select_properties"
																type="radio" />
														</td>
													</tr>
													<tr class="text-center">
														<th scope="row">1</th>
														<td>Mark</td>
														<td>Otto</td>
														<td>
															<input name="radio" class="Select_properties"
																type="radio" />
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<!-- /Data Table -->

									</div>
								</div>

							</div>

						</div>
					</div>


					<footer class="bui-modal__footer">
						<div role="group" class="bui-group bui-group--inline">
							<button type="button" class="bui-button bui-button--primary" id="Select_properties_btn"
								disabled>
								<span class="bui-button__text">
									Next
								</span>
							</button>
							<button type="button" class="bui-button bui-button--secondary" data-bs-dismiss="modal">
								<span class="bui-button__text">
									Cancel
								</span>
							</button>
						</div>
					</footer>
					<button type="button" class="bui-modal__close" data-bs-dismiss="modal">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
							<path
								d="M13 12l6.26-6.26a.73.73 0 0 0-1-1L12 11 5.74 4.71a.73.73 0 1 0-1 1L11 12l-6.29 6.26a.73.73 0 0 0 .52 1.24.73.73 0 0 0 .51-.21L12 13l6.26 6.26a.74.74 0 0 0 1 0 .74.74 0 0 0 0-1z">
							</path>
						</svg>
					</button>
				</aside>
			</div>
		</div>
	</div>
	<!-- /Apply to other properties -->

	<!-- You can create 4 more policies -->
	<div id="CreateModal" class="bui-modal modal fade">
		<div class="bui-modal__wrapper modal-dialog">
			<div class="bui-modal__align">
				<aside class="bui-modal__content bui-f-depth-1">
					<div class="bui-modal__body">
						<div>
							<h3 class="policy-form-title">
								Flexible - 18:00 on arrival day
							</h3>
							<div class="policy-form-section">
								<h4 class="policy-form-section-title">
									<span>Cancellation preference</span>
								</h4>
								<div class="form-group">
									<label>
										<span>Is there a period when the guest can cancel free of
											charge?</span>
									</label>
									<div class="radio-block">
										<div class="radio">
											<label>
												<input type="radio" name="free_cancel" value="1">
												<span>Yes</span>
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="free_cancel" value="0">
												<span>No</span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="policy-form-section">
									<h4 class="policy-form-section-title">
										<span>Specify conditions</span>
									</h4>
									<ul class="list-unstyled row clearfix list-smp-customized-condition">
										<li class="col-xs-12 col-sm-6">
											<div>
												<div class="form-group">
													<label>How long before arrival can the guest
														cancel free of charge?</label>
													<select name="interval" class="form-control">
														<option value=""><span>Please select...</span></option>
														<option value="18h">until 18:00 on the day of arrival</option>
														<option value="14h">until 14:00 on the day of arrival</option>
														<option value="1d">until 1 day before arrival</option>
													</select>
												</div>
												<div class="form-group">
													<label>
														How much is the guest charged for
														cancellation after 18:00 on the day of arrival?
													</label>

													<select name="cancelation" class="form-control">
														<option value=""><span>Please select...</span></option>
														<option value="100fn">the cost of the first night</option>
														<option value="50">50% of the total price</option>
														<option value="100">100% of the total price</option>
													</select>

												</div>
											</div>
										</li>
									</ul>
									<ul class="list-unstyled row clearfix list-smp-customized-condition ">
										<li class="col-xs-12 col-sm-6">
											<div class="form-group">
												<label>
													<span>
														How much is the guest charged for a no
														show?
													</span>
												</label>
												<select name="noshow_id" class="form-control">
													<option value=""><span>Same as the cancellation fee</span></option>
													<option value="337">100% of the total price </option>
												</select>
											</div>
										</li>
									</ul>
									<div class="policy-form-summary">
										<h5 class="policy-form-summary-title">
											<span>Policy summary</span>
										</h5>
										<p class="policy-form-summary-text">
											The guest can cancel free of charge until 18:00 on the day of arrival. The
											guest will be charged the total price of the reservation if they cancel
											after 18:00 on the day of arrival.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<footer data-test-id="footer" class="bui-modal__footer">
						<div class="bui-group bui-group--inline">
							<button type="button" class="bui-button bui-button--primary">
								<span class="bui-button__text">
									<span>Save</span>
								</span>
							</button>
							<button type="button" class="bui-button bui-button--secondary" data-bs-dismiss="modal">
								<span class="bui-button__text">
									<span>Cancel</span>
								</span>
							</button>
						</div>
					</footer>
					<button type="button" class="bui-modal__close" data-bs-dismiss="modal">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
							<path
								d="M13 12l6.26-6.26a.73.73 0 0 0-1-1L12 11 5.74 4.71a.73.73 0 1 0-1 1L11 12l-6.29 6.26a.73.73 0 0 0 .52 1.24.73.73 0 0 0 .51-.21L12 13l6.26 6.26a.74.74 0 0 0 1 0 .74.74 0 0 0 0-1z">
							</path>
						</svg>
					</button>
				</aside>
			</div>
		</div>
	</div>
	<!-- /You can create 4 more policies -->

	<!-- Grace Period -->
	<div id="GracePeriodModal" class="bui-modal modal fade">
		<div class="bui-modal__wrapper modal-dialog">
			<div class="bui-modal__align">
				<aside class="bui-modal__content bui-f-depth-1">

					<div class="bui-modal__body">
						<div role="group" class="bui-group">
							<h3>
								<span>Waive some Cancellation fees
								</span></h3>
							<div class="bui-spacer--large"></div>
							<p><span>Save yourself time dealing with some cancellations. Choose an option below:</span>
							</p>
							<div role="group" class="bui-group">
								<div class="bui-form__group"><label class="bui-checkbox"><input autocomplete="off"
											type="checkbox" class="bui-checkbox__input"> <span
											class="bui-checkbox__label"><span>Grace Period</span></span></label>

								</div>
								<p><span>Waive cancellation fees for guests who cancel their bookings 1, 4, or 24 hours
										after they book (excludes last-minute bookings made up to 48 hours before
										check-in)</span></p>
								<div role="group" class="bui-group">
									<div class="bui-form__group"><label class="bui-radio"><input id="nr_grace_period_1"
												autocomplete="off" type="radio" name="nr_grace_period"
												class="bui-radio__input" value="1"> <span
												class="bui-radio__label"><span>1 hour after booking: Handles instant
													cancellation requests</span></span></label>

									</div>
									<div class="bui-form__group"><label class="bui-radio"><input id="nr_grace_period_4"
												autocomplete="off" type="radio" name="nr_grace_period"
												class="bui-radio__input" value="4"> <span
												class="bui-radio__label"><span>4 hours after booking: Covers most
													accidental bookings</span></span></label>

									</div>
									<div class="bui-form__group"><label class="bui-radio"><input id="nr_grace_period_24"
												autocomplete="off" type="radio" name="nr_grace_period"
												class="bui-radio__input" value="24"> <span
												class="bui-radio__label"><span>24 hours after booking: Protects you from
													the highest amount of cancellation requests</span></span></label>

									</div>
								</div>
							</div>
						</div>
					</div>
					<footer data-test-id="footer" class="bui-modal__footer">


						<div role="group" class="bui-group bui-group--inline">
							<button type="button" class="bui-button bui-button--primary">
								<span class="bui-button__text"><span>Save</span></span>
							</button>
							<button type="button" class="bui-button bui-button--secondary" data-bs-dismiss="modal">
								<span class="bui-button__text"><span>Cancel</span></span>
							</button>

						</div>
					</footer>
					<button type="button" class="bui-modal__close" data-bs-dismiss="modal">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
							<path
								d="M13 12l6.26-6.26a.73.73 0 0 0-1-1L12 11 5.74 4.71a.73.73 0 1 0-1 1L11 12l-6.29 6.26a.73.73 0 0 0 .52 1.24.73.73 0 0 0 .51-.21L12 13l6.26 6.26a.74.74 0 0 0 1 0 .74.74 0 0 0 0-1z">
							</path>
						</svg>
					</button>
				</aside>
			</div>
		</div>
	</div>
	<!-- /Grace Period -->

	<!-- Guest payment options -->
	<div id="PaymentOptionModal" class="bui-modal modal fade">
		<div class="bui-modal__wrapper modal-dialog">
			<div class="bui-modal__align">
				<aside class="bui-modal__content bui-f-depth-1">

					<div class="bui-modal__body">
						<div>
							<fieldset>
								<legend><span>Guest payment options</span></legend>
								<div id="cc_accepted" class="cc_accepted">
									<div class="form-group clearfix"><label><span>Can you charge credit cards at the
												property?</span></label>
										<div class="radio-block">
											<div class="radio"><label><input id="cc_accepted" type="radio"
														name="cc_accepted" value="yes"> <span>Yes</span></label></div>
											<div class="radio"><label><input id="cc_accepted" type="radio"
														name="cc_accepted" value="no"> <span>No</span></label></div>

										</div>
									</div>
								</div>
								<div id="creditcard_section" class="creditcard_section form-group row">
									<input type="hidden" name="creditcards" value="">
									<div class="col-sm-6"><label for="cc_id_1"
											class="checkbox creditcard americanexpress"><input id="cc_id_1"
												type="checkbox" name="cc_id" value="1">
											American Express
										</label>
										<div class="clearfix"></div>
									</div>
									<div class="col-sm-6"><label for="cc_id_2" class="checkbox creditcard visa"><input
												id="cc_id_2" type="checkbox" name="cc_id" value="2">
											Visa
										</label>
										<div class="clearfix"></div>
									</div>
									<div class="col-sm-6"><label for="cc_id_3"
											class="checkbox creditcard euromastercard"><input id="cc_id_3"
												type="checkbox" name="cc_id" value="3">
											Euro/Mastercard
										</label>
										<div class="clearfix"></div>
									</div>
									<div class="col-sm-6"><label for="cc_id_5"
											class="checkbox creditcard dinersclub"><input id="cc_id_5" type="checkbox"
												name="cc_id" value="5">
											Diners Club
										</label>
										<div class="clearfix"></div>
									</div>
									<div class="col-sm-6"><label for="cc_id_7" class="checkbox creditcard jcb"><input
												id="cc_id_7" type="checkbox" name="cc_id" value="7">
											JCB
										</label>
										<div class="clearfix"></div>
									</div>
									<div class="col-sm-6"><label for="cc_id_10"
											class="checkbox creditcard maestro"><input id="cc_id_10" type="checkbox"
												name="cc_id" value="10">
											Maestro
										</label>
										<div class="clearfix"></div>
									</div>
									<div class="col-sm-6"><label for="cc_id_11"
											class="checkbox creditcard discover"><input id="cc_id_11" type="checkbox"
												name="cc_id" value="11">
											Discover
										</label>
										<div class="clearfix"></div>
									</div>
									<div class="col-sm-6"><label for="cc_id_35"
											class="checkbox creditcard unionpaydebitcard"><input id="cc_id_35"
												type="checkbox" name="cc_id" value="35">
											UnionPay debit card
										</label>
										<div class="clearfix"></div>
									</div>
									<div class="col-sm-6"><label for="cc_id_44"
											class="checkbox creditcard unionpaycreditcard"><input id="cc_id_44"
												type="checkbox" name="cc_id" value="44">
											UnionPay credit card
										</label>
										<div class="clearfix"></div>
									</div>
								</div>


							</fieldset>


						</div>
					</div>
					<footer data-test-id="footer" class="bui-modal__footer">


						<div role="group" class="bui-group bui-group--inline"><button type="button"
								class="bui-button bui-button--primary">
								<span class="bui-button__text"><span>Save</span></span></button>
							<button type="button" class="bui-button bui-button--secondary" data-bs-dismiss="modal">
								<span class="bui-button__text">
									<span>Cancel</span></span>
							</button>

						</div>
					</footer>
					<button type="button" class="bui-modal__close" data-bs-dismiss="modal">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
							<path
								d="M13 12l6.26-6.26a.73.73 0 0 0-1-1L12 11 5.74 4.71a.73.73 0 1 0-1 1L11 12l-6.29 6.26a.73.73 0 0 0 .52 1.24.73.73 0 0 0 .51-.21L12 13l6.26 6.26a.74.74 0 0 0 1 0 .74.74 0 0 0 0-1z">
							</path>
						</svg>
					</button>
				</aside>
			</div>
		</div>
	</div>
	<!-- /Guest payment options -->

	<!-- Internet -->
	<div id="InternetnModal" class="bui-modal modal fade">
		<div class="bui-modal__wrapper modal-dialog">
			<div class="bui-modal__align">
				<aside class="bui-modal__content bui-f-depth-1">

					<div class="bui-modal__body">
						<div>
							<fieldset id="internet_section" class="policy-fieldset">
								<h2><span>Internet</span></h2>
								<div class="bui-spacer">
									<div class="bui-grid">
										<div class="bui-grid__column-4">
											<div class="bui-form__group"><label for="internet_payment"><span>Is internet
														available to guests?</span></label>
												<div class="bui-input-select"><select id="internet_payment"
														class="bui-form__control">
														<option value="">
															Please select...
														</option>
														<option value="no">
															No
														</option>
														<option value="paid">
															Yes, paid
														</option>
														<option value="free">
															Yes, free
														</option>
														<option value="charges_are_applicable">
															Charges are applicable (not specified)
														</option>
													</select> <svg xmlns="http://www.w3.org/2000/svg"
														viewBox="0 0 24 24" class="bui-input-select__icon">
														<path
															d="M12 20.09a1.24 1.24 0 0 1-.88-.36L6 14.61a.75.75 0 1 1 1.06-1.06L12 18.49l4.94-4.94A.75.75 0 0 1 18 14.61l-5.12 5.12a1.24 1.24 0 0 1-.88.36zm6-9.46a.75.75 0 0 0 0-1.06l-5.12-5.11a1.24 1.24 0 0 0-1.754-.006l-.006.006L6 9.57a.75.75 0 0 0 0 1.06.74.74 0 0 0 1.06 0L12 5.7l4.94 4.93a.73.73 0 0 0 .53.22c.2 0 .39-.078.53-.22z">
														</path>
													</svg></div>

											</div>
										</div>
										<div class="bui-grid__column-4">
											<div class="bui-form__group"><label for="internet_type"><span>Connection
														type</span></label>
												<div class="bui-input-select"><select id="internet_type"
														class="bui-form__control">
														<option value="wifi">
															WiFi
														</option>
														<option value="wired">
															Cable
														</option>
													</select> <svg xmlns="http://www.w3.org/2000/svg"
														viewBox="0 0 24 24" class="bui-input-select__icon">
														<path
															d="M12 20.09a1.24 1.24 0 0 1-.88-.36L6 14.61a.75.75 0 1 1 1.06-1.06L12 18.49l4.94-4.94A.75.75 0 0 1 18 14.61l-5.12 5.12a1.24 1.24 0 0 1-.88.36zm6-9.46a.75.75 0 0 0 0-1.06l-5.12-5.11a1.24 1.24 0 0 0-1.754-.006l-.006.006L6 9.57a.75.75 0 0 0 0 1.06.74.74 0 0 0 1.06 0L12 5.7l4.94 4.93a.73.73 0 0 0 .53.22c.2 0 .39-.078.53-.22z">
														</path>
													</svg></div>

											</div>
										</div>
										<div class="bui-grid__column-4">
											<div class="bui-form__group"><label for="internet_area"><span>Connection
														location</span></label>
												<div class="bui-input-select"><select id="internet_area"
														class="bui-form__control">
														<option value="public_areas">
															Public areas
														</option>
														<option value="some_rooms">
															Some rooms
														</option>
														<option value="all_rooms">
															All rooms
														</option>
														<option value="business_centre">
															Business centre
														</option>
														<option value="entire_property">
															Entire property
														</option>
													</select> <svg xmlns="http://www.w3.org/2000/svg"
														viewBox="0 0 24 24" class="bui-input-select__icon">
														<path
															d="M12 20.09a1.24 1.24 0 0 1-.88-.36L6 14.61a.75.75 0 1 1 1.06-1.06L12 18.49l4.94-4.94A.75.75 0 0 1 18 14.61l-5.12 5.12a1.24 1.24 0 0 1-.88.36zm6-9.46a.75.75 0 0 0 0-1.06l-5.12-5.11a1.24 1.24 0 0 0-1.754-.006l-.006.006L6 9.57a.75.75 0 0 0 0 1.06.74.74 0 0 0 1.06 0L12 5.7l4.94 4.93a.73.73 0 0 0 .53.22c.2 0 .39-.078.53-.22z">
														</path>
													</svg></div>

											</div>
										</div>
									</div>
								</div>
								<div class="bui-grid">
									<div class="bui-grid__column-6">
										<div role="group" class="bui-group bui-group--inline">
											<div class="bui-form__group"><label for="internet_price"><span>Price for
														internet</span></label>
												<div
													class="bui-input__group bui-text-input__group bui-text-input__group--prepend">
													<div data-test-id="prepend-slot" class="bui-input__addon">
														<span>US$</span></div> <input id="internet_price"
														aria-describedby="describe-internet_price" autocomplete="off"
														type="text" class="bui-form__control">
												</div>

											</div>
											<div class="internet-price-type">
												<div class="bui-form__group"><label for="internet_price_type"></label>
													<div class="bui-input-select"><select id="internet_price_type"
															class="bui-form__control">
															<option value="per_minute">
																Per minute
															</option>
															<option value="per_half_hour">
																Per half an hour
															</option>
															<option value="per_hour">
																Per hour
															</option>
															<option value="per_day">
																Per day
															</option>
														</select> <svg xmlns="http://www.w3.org/2000/svg"
															viewBox="0 0 24 24" class="bui-input-select__icon">
															<path
																d="M12 20.09a1.24 1.24 0 0 1-.88-.36L6 14.61a.75.75 0 1 1 1.06-1.06L12 18.49l4.94-4.94A.75.75 0 0 1 18 14.61l-5.12 5.12a1.24 1.24 0 0 1-.88.36zm6-9.46a.75.75 0 0 0 0-1.06l-5.12-5.11a1.24 1.24 0 0 0-1.754-.006l-.006.006L6 9.57a.75.75 0 0 0 0 1.06.74.74 0 0 0 1.06 0L12 5.7l4.94 4.93a.73.73 0 0 0 .53.22c.2 0 .39-.078.53-.22z">
															</path>
														</svg></div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</fieldset>
							<fieldset id="pets_section" class="policy-fieldset">
								<h2><span>Pets</span></h2>
								<div id="pets">
									<div class="bui-grid">
										<div class="bui-grid__column-6">
											<div class="bui-form__group"><label for="pets_allowed"><span>Do you allow
														pets?</span></label>
												<div class="bui-input-select"><select id="pets_allowed"
														class="bui-form__control">
														<option value="">
															Please select...
														</option>
														<option value="no">
															No
														</option>
														<option value="yes">
															Yes
														</option>
														<option value="on_request">
															Upon request
														</option>
													</select> <svg xmlns="http://www.w3.org/2000/svg"
														viewBox="0 0 24 24" class="bui-input-select__icon">
														<path
															d="M12 20.09a1.24 1.24 0 0 1-.88-.36L6 14.61a.75.75 0 1 1 1.06-1.06L12 18.49l4.94-4.94A.75.75 0 0 1 18 14.61l-5.12 5.12a1.24 1.24 0 0 1-.88.36zm6-9.46a.75.75 0 0 0 0-1.06l-5.12-5.11a1.24 1.24 0 0 0-1.754-.006l-.006.006L6 9.57a.75.75 0 0 0 0 1.06.74.74 0 0 0 1.06 0L12 5.7l4.94 4.93a.73.73 0 0 0 .53.22c.2 0 .39-.078.53-.22z">
														</path>
													</svg></div>

											</div>
										</div>
										<div class="bui-grid__column-6">
											<div class="bui-form__group"><label for="pets_price_type"><span>Are there
														additional charges for pets?</span></label>
												<div class="bui-input-select"><select id="pets_price_type"
														class="bui-form__control">
														<option value="charges_may_apply">
															Charges may apply
														</option>
														<option value="free">
															Pets can stay for free
														</option>
													</select> <svg xmlns="http://www.w3.org/2000/svg"
														viewBox="0 0 24 24" class="bui-input-select__icon">
														<path
															d="M12 20.09a1.24 1.24 0 0 1-.88-.36L6 14.61a.75.75 0 1 1 1.06-1.06L12 18.49l4.94-4.94A.75.75 0 0 1 18 14.61l-5.12 5.12a1.24 1.24 0 0 1-.88.36zm6-9.46a.75.75 0 0 0 0-1.06l-5.12-5.11a1.24 1.24 0 0 0-1.754-.006l-.006.006L6 9.57a.75.75 0 0 0 0 1.06.74.74 0 0 0 1.06 0L12 5.7l4.94 4.93a.73.73 0 0 0 .53.22c.2 0 .39-.078.53-.22z">
														</path>
													</svg></div>

											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="bui-spacer">
										<h4><span>Please select all of the following options that your property
												offers:</span></h4>


									</div>
									<div class="bui-grid">
										<div class="bui-grid__column-6">
											<div id="container_217">
												<div class="facility-item__pets">
													<div class="facility-item__pets-checkbox">
														<div class="bui-form__group"><label class="bui-checkbox"><input
																	autocomplete="off" type="checkbox"
																	class="bui-checkbox__input" value="217"> <span
																	class="bui-checkbox__label">
																	Pet basket
																</span></label>

														</div>
													</div>

												</div>
											</div>
										</div>
										<div class="bui-grid__column-6">
											<div id="container_218">
												<div class="facility-item__pets">
													<div class="facility-item__pets-checkbox">
														<div class="bui-form__group"><label class="bui-checkbox"><input
																	autocomplete="off" type="checkbox"
																	class="bui-checkbox__input" value="218"> <span
																	class="bui-checkbox__label">
																	Pet bowls
																</span></label>

														</div>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</fieldset>
						</div>
					</div>
					<footer data-test-id="footer" class="bui-modal__footer">


						<div role="group" class="bui-group bui-group--inline">
							<button type="button" class="bui-button bui-button--primary">
								<span class="bui-button__text"><span>Save</span></span></button>
							<button type="button" class="bui-button bui-button--secondary" data-bs-dismiss="modal">
								<span class="bui-button__text">
									<span>Cancel</span></span>
							</button>

						</div>
					</footer> <button type="button" class="bui-modal__close" data-bs-dismiss="modal">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
							<path
								d="M13 12l6.26-6.26a.73.73 0 0 0-1-1L12 11 5.74 4.71a.73.73 0 1 0-1 1L11 12l-6.29 6.26a.73.73 0 0 0 .52 1.24.73.73 0 0 0 .51-.21L12 13l6.26 6.26a.74.74 0 0 0 1 0 .74.74 0 0 0 0-1z">
							</path>
						</svg></button>
				</aside>
			</div>
		</div>
	</div>
	<!-- /Internet -->

	<!-- Guest Information -->
	<div id="GuestInformationModal" class="bui-modal modal fade">
		<div class="bui-modal__wrapper modal-dialog">
			<div class="bui-modal__align">
				<aside class="bui-modal__content bui-f-depth-1">

					<div class="bui-modal__body">
						<div>
							<fieldset>
								<legend><span>Check-in/Check-out times</span></legend>
								<div class="row"><label class="col-xs-6"><span>Guests can check-in
											between</span></label>
									<div class="col-xs-6 text-right"><label><input type="checkbox"
												name="24_hours_checkin"> <span>24-hour check-in</span></label></div>
									<div class="col-xs-12 fluid-table">
										<div class="fluid-table__column fluid-table__column--width-50 form-group"><label
												for="checkin_start" class="sr-only"><span>from</span></label> <select
												id="checkin_start" name="checkin_start" class="form-control">
												<option value=""><span>Please select</span></option>
												<option value="00:00">
													12:00 AM
												</option>
												<option value="00:30">
													12:30 AM
												</option>
											</select>

										</div>
										<div
											class="fluid-table__column fluid-table__column--width-auto fluid-table__column--with-padding fluid-table__column--nowrap text-center">
											<span>and</span></div>
										<div class="fluid-table__column fluid-table__column--width-50 form-group"><label
												for="checkin_end" class="sr-only"><span>to (optional)</span></label>
											<select id="checkin_end" name="checkin_end" class="form-control">
												<option value=""><span>Please select</span></option>
												<option value="00:00">
													12:00 AM
												</option>
												<option value="00:30">
													12:30 AM
												</option>
											</select>

										</div>
									</div>
								</div>
								<div class="row"><label class="col-xs-6"><span>Guests can check-out
											between</span></label>
									<div class="col-xs-6 text-right"><label><input type="checkbox"
												name="24_hours_checkout"> <span>24-hour check-out</span></label></div>
									<div class="col-xs-12 fluid-table">
										<div class="fluid-table__column fluid-table__column--width-50 form-group"><label
												for="checkout_start" class="sr-only"><span>from
													(optional)</span></label> <select id="checkout_start"
												name="checkout_start" class="form-control">
												<option value=""><span>Please select</span></option>
												<option value="00:00">
													12:00 AM
												</option>
												<option value="00:30">
													12:30 AM
												</option>

											</select>

										</div>
										<div
											class="fluid-table__column fluid-table__column--width-auto fluid-table__column--with-padding fluid-table__column--nowrap text-center">
											<span>and</span></div>
										<div class="fluid-table__column fluid-table__column--width-50 form-group"><label
												for="checkout_end" class="sr-only"><span>to</span></label> <select
												id="checkout_end" name="checkout_end" class="form-control">
												<option value=""><span>Please select</span></option>
												<option value="00:00">
													12:00 AM
												</option>
												<option value="00:30">
													12:30 AM
												</option>

											</select>

										</div>
									</div>
								</div>

							</fieldset>
							<fieldset>
								<legend><span>Guest information</span></legend>
								<div class="form-group"><label><span>Can guests book without providing address
											details?</span></label>
									<div id="always_require_booker_address" class="radio-block">
										<div class="radio"><label><input type="radio"
													name="always_require_booker_address" value="1">
												<span>Yes</span></label></div>
										<div class="radio"><label><input type="radio"
													name="always_require_booker_address" value="0">
												<span>No</span></label></div>
									</div>
								</div>
								<div class="form-group"><label><span>Can guests book without providing a phone
											number?</span></label>
									<div id="always_require_booker_contact_number" class="radio-block">
										<div class="radio"><label><input type="radio"
													name="always_require_booker_contact_number" value="1">
												<span>Yes</span></label></div>
										<div class="radio"><label><input type="radio"
													name="always_require_booker_contact_number" value="0">
												<span>No</span></label></div>
									</div>
								</div>
							</fieldset>
							<fieldset>
								<legend><span>Age limit</span></legend>
								<div class="form-group"><label><span>Is there an age limit to check in?</span></label>
									<div id="has_age_restriction" class="radio-block">
										<div class="radio"><label><input type="radio" name="has_age_restriction"
													value="1"> <span>Yes</span></label></div>
										<div class="radio"><label><input type="radio" name="has_age_restriction"
													value="0"> <span>No</span></label></div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-xs-12 fluid-table">
										<div
											class="fluid-table__column fluid-table__column--with-padding-r fluid-table__column--width-50 form-group">
											<label for="age_restriction_min"><span>Minimum age</span></label> <select
												id="age_restriction_min" name="age_restriction_min"
												class="form-control">
												<option value="18">
													18
												</option>
												<option value="19">
													19
												</option>

											</select></div>
										<div
											class="fluid-table__column fluid-table__column--with-padding-l fluid-table__column--width-50 form-group">
											<label for="age_restriction_max"><span>Maximum age</span></label> <select
												id="age_restriction_max" name="age_restriction_max"
												class="form-control">
												<option value="0"><span>No age limit</span></option>
												<option value="18">
													18
												</option>

											</select></div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-xs-12 fluid-table">
										<div role="alert" class="alert alert-warning"><span>The use of any age
												restriction is for the risk and account of the accommodation and the
												accommodation shall be liable and indemnify Booking.com for any age
												discrimination claims. By using an age restriction, the accommodation
												confirms that this is permitted by applicable laws and not a form of age
												discrimination.</span></div>
									</div>
								</div>
							</fieldset>
							<fieldset>
								<legend><span>Curfew</span></legend>
								<p><span>A curfew is a policy that limits the hours your guests can leave or enter your
										property.</span></p>
								<div class="form-group"><label><span>Does a curfew apply to guests?</span></label>
									<div id="has_curfew" class="radio-block">
										<div class="radio"><label><input type="radio" name="has_curfew" value="1">
												<span>Yes</span></label></div>
										<div class="radio"><label><input type="radio" name="has_curfew" value="0">
												<span>No</span></label></div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 fluid-table">
										<div
											class="fluid-table__column fluid-table__column--with-padding-r fluid-table__column--width-50 form-group">
											<label for="curfew_start"><span>Start time</span></label> <select
												id="curfew_start" name="curfew_start" class="form-control">
												<option value=""><span>Please select</span></option>
												<option value="00:00">
													12:00 AM
												</option>

											</select></div>
										<div
											class="fluid-table__column fluid-table__column--with-padding-l fluid-table__column--width-50 form-group">
											<label for="curfew_end"><span>End time</span></label> <select
												id="curfew_end" name="curfew_end" class="form-control">
												<option value=""><span>Please select</span></option>
												<option value="00:00">
													12:00 AM
												</option>

											</select>
										</div>
									</div>
								</div>
							</fieldset>
						</div>
					</div>
					<footer data-test-id="footer" class="bui-modal__footer">


						<div role="group" class="bui-group bui-group--inline"><button type="button"
								class="bui-button bui-button--primary">
								<span class="bui-button__text"><span>Save</span></span></button>
							<button type="button" class="bui-button bui-button--secondary" data-bs-dismiss="modal">
								<span class="bui-button__text"><span>Cancel</span></span>
							</button>

						</div>
					</footer> <button type="button" class="bui-modal__close" data-bs-dismiss="modal">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
							<path
								d="M13 12l6.26-6.26a.73.73 0 0 0-1-1L12 11 5.74 4.71a.73.73 0 1 0-1 1L11 12l-6.29 6.26a.73.73 0 0 0 .52 1.24.73.73 0 0 0 .51-.21L12 13l6.26 6.26a.74.74 0 0 0 1 0 .74.74 0 0 0 0-1z">
							</path>
						</svg>
					</button>
				</aside>
			</div>
		</div>
	</div>
	<!-- /Guest Information -->

	<!-- ===================== Required Js File Links ===================== -->
	<!-- jquery js  -->
	<script src="{{ asset("/hotel-admin/assets/js/jquery-1.12.4.min.js") }}"></script>
	<!-- bootstrap js  -->
	<script src="{{ asset("/hotel-admin/assets/js/bootstrap.bundle.min.js") }}"></script>
	<!-- custom Js  -->
	<script src="{{ asset("/hotel-admin/assets/js/script.js") }}"></script>


</body>

</html>