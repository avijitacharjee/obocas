@extends('hotel-admin.layout')
@section('css-imports')
    <link rel="shortcut icon" href="{{ asset("/hotel-admin/assets/images/favicon.png") }}" type="image/png" />
	<!-- Bootstrap v5.0.0-beta3 -->
	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/bootstrap.min.css") }}">
	<!-- font awesome -->
	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/all.min.css") }}">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/style.min.css") }}">
@endsection
@section('content')
					<main class="main">
						<div class="bui-container bui-container--center">
							<div class="bui-page-header">

								<h1 class="bui-page-header__title">
									<div class="bui-spacer--medium">
										<span>Property page score</span>
									</div>
								</h1>
							</div>
							<div class="bui-grid bui-grid--reversed">
								<div class="bui-grid__column-full bui-grid__column-4@medium">
									<div class="bui-spacer--large">
										<div class="bui-card">
											<div class="bui-card__content">
												<header class="bui-card__header">
													<h1 class="bui-card__title">
														<span>Property page score</span>
													</h1>
												</header>
												<div class="bui-spacer--large">
													<p class="bui-card__text">
														<span>This indicates how much your
															obocas.com property page appeals to potential guests based
															on the information and photos you add.</span>
													</p>
												</div>
												<div class="bui-spacer--large">
													<hr class="bui-divider">
												</div>
												<div class="bui-score-bar bui-score-bar--color">
													<div class="bui-score-bar__item">
														<div class="bui-score-bar__header">
															<h2 class="bui-score-bar__title">
																There's work to do
															</h2>
															<span class="bui-score-bar__score">23%</span>
														</div>
														<div class="bui-score-bar__bar">
															<span class="bui-score-bar__value" style="width:23%;">
															</span>
														</div>
													</div>


												</div>

											</div>
										</div>
									</div>
									<div class="bui-card">
										<div class="bui-card__content">
											<header class="bui-card__header">
												<h2 class="bui-card__subtitle">
													<span>Other properties' property page
														scores:</span>
												</h2>
											</header>
											<ul class="bui-list bui-list--text">
												<li class="bui-list__item"><span>
														Asia Pacific Hotel
													</span> <span class="bui-u-pull-end">
														<span>100%</span>
													</span>
												</li>
												<li class="bui-list__item">
													<span>
														South Water Caress
													</span>
													<span class="bui-u-pull-end">
														<span>68%</span>
													</span>
												</li>
											</ul>

										</div>
									</div>
									<section>

									</section>
								</div>
								<div class="bui-grid__column-full bui-grid__column-8@medium">
									<div class="bui-spacer">
										<div>
											<p class="bui-f-font-heading">
												<span>Complete the following actions to
													increase your property page score.</span>
											</p>
											<p>
												<span>A 100% property page score can potentially lead to 18% more
													bookings.</span>
											</p>
										</div>
									</div>
									<div class="bui-spacer">
										<div class="bui-card">
											<div class="bui-card__content">

												<div>
													<ul
														class="bui-list bui-list--divided bui-list--icon bui-list--text pps-checklist pps-checklist--classic">
														<li class="bui-list__item">
															<span class="bui-list__icon">
																<svg height="24" fill="#BDBDBD"
																	 viewBox="0 0 24 24" width="24"

																	class="bk-icon -streamline-checkmark_empty"
																	color="#BDBDBD">
																	<path
																		d="M22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
																	</path>
																</svg>
															</span>
															<div class="bui-list__body">
																<div class="bui-list__description">
																	<span class="bui-list__description-title">
																		Upload at least 24 photos
																	</span>
																	<span class="bui-list__description-subtitle">
																		<span>
																			Right now, you only have 4 photos.
																		</span>
																	</span>
																</div>
																<span class="pps-checklist-action">
																	<span>

																		<input class="add-more-photo" type="file" />

																		<form class="bui-u-hidden">
																			<input id="photo" type="file" name="file"
																				accept="image/jpeg,image/png"
																				class="file">
																		</form>
																	</span>
																</span>
															</div>
														</li>
														<li class="bui-list__item">
															<span  class="bui-list__icon">
																<svg  width="24" viewBox="0 0 24 24"
																	 fill="#BDBDBD"
																	height="24"
																	class="bk-icon -streamline-checkmark_empty"
																	color="#BDBDBD">
																	<path
																		d="M22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
																	</path>
																</svg>
															</span>
															<div class="bui-list__body">
																<div class="bui-list__description">
																	<span class="bui-list__description-title">
																		Make sure all of your photos are high quality
																	</span>
																	<span class="bui-list__description-subtitle">
																		<span>
																			4 of your photos are low quality.
																		</span>
																	</span>
																</div>
																<span class="pps-checklist-action">
																	<a href="{{ url("photos.html") }}"
																		title="Replace low quality photos"
																		class="bui-list__item-action bui-link">
																		Replace low quality photos
																	</a>
																</span>
															</div>
														</li>
														<li class="bui-list__item">
															<span class="bui-list__icon">
																<svg viewBox="0 0 24 24" fill="#BDBDBD"

																	role="presentation" width="24" height="24"
																	class="bk-icon -streamline-checkmark_empty"
																	color="#BDBDBD">
																	<path
																		d="M22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
																	</path>
																</svg>
															</span>
															<div class="bui-list__body">
																<div class="bui-list__description"><span
																		class="bui-list__description-title">
																		Add or tag a photo of your swimming pool
																	</span> <span
																		class="bui-list__description-subtitle"><span>
																			You mentioned your pool, but didn’t add a
																			photo of it.
																		</span>
																	</span></div>
																<span class="pps-checklist-action">
																	<span>
																		<form method="POST" class="">
																			<input class="upload-photo" type="file" />

																		</form>
																	</span>
																</span>
																<span class="pps-checklist-action"><span
																		class="pps-checklist-or"><span>or</span></span>
																	<a href="{{ url("photos.html") }}" title="tag photos"
																		class="bui-list__item-action bui-link">
																		tag photos
																	</a></span>
															</div>
														</li>
														<li class="bui-list__item"><span class="bui-list__icon"><svg
																	width="24" aria-hidden="true" focusable="false"
																	fill="#BDBDBD" viewBox="0 0 24 24" height="24"
																	class="bk-icon -streamline-checkmark_empty"
																	color="#BDBDBD">
																	<path
																		d="M22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
																	</path>
																</svg>
															</span>
															<div class="bui-list__body">
																<div class="bui-list__description"><span
																		class="bui-list__description-title">
																		Add or tag a photo of your restaurant
																	</span> <span
																		class="bui-list__description-subtitle"><span>
																			You mentioned your restaurant but didn’t
																			include a photo.
																		</span></span></div> <span
																	class="pps-checklist-action">
																	<span>
																		<form method="POST" class="">
																			<input class="upload-photo" type="file" />

																		</form>
																	</span>
																</span>
																<span class="pps-checklist-action"><span
																		class="pps-checklist-or"><span>or</span></span>
																	<a href="{{ url("photos.html") }}" title="tag photos"
																		class="bui-list__item-action bui-link">
																		tag photos
																	</a></span>
															</div>
														</li>
														<li class="bui-list__item"><span role="presentation"
																class="bui-list__icon"><svg height="24"
																	role="presentation" width="24" viewBox="0 0 128 128"
																	fill="#008009" focusable="false" aria-hidden="true"
																	class="bk-icon -streamline-checkmark_selected"
																	color="#008009">
																	<path
																		d="M56.62 93.54a4 4 0 0 1-2.83-1.18L28.4 67a4 4 0 1 1 5.65-5.65l22.13 22.1 33-44a4 4 0 1 1 6.4 4.8L59.82 91.94a4.06 4.06 0 0 1-2.92 1.59zM128 64c0-35.346-28.654-64-64-64C28.654 0 0 28.654 0 64c0 35.346 28.654 64 64 64 35.33-.039 63.961-28.67 64-64zm-8 0c0 30.928-25.072 56-56 56S8 94.928 8 64 33.072 8 64 8c30.914.033 55.967 25.086 56 56z">
																	</path>
																</svg></span>
															<div class="bui-list__body">
																<div class="bui-list__description"><span
																		class="bui-list__description-title">
																		Add or tag a photo of your property’s exterior
																	</span>
																	<span class="bui-list__description-subtitle">
																		<span class="bui-f-color-constructive">
																			<span>Done!</span>
																		</span>
																	</span>
																</div> <span class="pps-checklist-action">
																	<span>
																		<form method="POST" class="">
																			<input class="upload-photo" type="file" />

																		</form>
																	</span></span><span class="pps-checklist-action">
																	<span class="pps-checklist-or">
																		<span>or</span>
																	</span>
																	<a href="{{ url("photos.html") }}" title="tag photos"
																		class="bui-list__item-action bui-link">
																		tag photos
																	</a>
																</span>
															</div>
														</li>
														<li class="bui-list__item">
															<span class="bui-list__icon"><svg height="24"
																	viewBox="0 0 128 128" fill="#008009"
																	aria-hidden="true" focusable="false"
																	role="presentation" width="24"
																	class="bk-icon -streamline-checkmark_selected"
																	color="#008009">
																	<path
																		d="M56.62 93.54a4 4 0 0 1-2.83-1.18L28.4 67a4 4 0 1 1 5.65-5.65l22.13 22.1 33-44a4 4 0 1 1 6.4 4.8L59.82 91.94a4.06 4.06 0 0 1-2.92 1.59zM128 64c0-35.346-28.654-64-64-64C28.654 0 0 28.654 0 64c0 35.346 28.654 64 64 64 35.33-.039 63.961-28.67 64-64zm-8 0c0 30.928-25.072 56-56 56S8 94.928 8 64 33.072 8 64 8c30.914.033 55.967 25.086 56 56z">
																	</path>
																</svg>
															</span>
															<div class="bui-list__body">
																<div class="bui-list__description">
																	<span class="bui-list__description-title">
																		Add the languages spoken by your staff
																	</span>
																	<span class="bui-list__description-subtitle"><span
																			class="bui-f-color-constructive">
																			<span>Done!</span>
																		</span></span>
																</div>
																<span class="pps-checklist-action">
																	<a href="{{ url("facilities-services.html") }}"
																		title="Add languages"
																		class="bui-list__item-action bui-link">
																		Add languages
																	</a>
																</span>
															</div>
														</li>
														<li class="bui-list__item">
															<span class="bui-list__icon">
																<svg height="24" role="presentation" width="24"
																	viewBox="0 0 24 24" aria-hidden="true"
																	focusable="false" fill="#BDBDBD"
																	class="bk-icon -streamline-checkmark_empty"
																	color="#BDBDBD">
																	<path
																		d="M22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
																	</path>
																</svg>
															</span>
															<div class="bui-list__body">
																<div class="bui-list__description"><span
																		class="bui-list__description-title">
																		Add at least 4 photos per room
																	</span> <span
																		class="bui-list__description-subtitle"><span>
																			1 rooms have less than four photos.
																		</span></span></div> <span
																	class="pps-checklist-action">
																	<a href="{{ url("photos.html") }}" title="Add more photos"
																		class="bui-list__item-action bui-link">
																		Add more photos
																	</a>
																</span>
															</div>
														</li>
														<li class="bui-list__item">
															<span role="presentation" class="bui-list__icon">
																<svg height="24" width="24" role="presentation"
																	fill="#008009" focusable="false" aria-hidden="true"
																	viewBox="0 0 128 128"
																	class="bk-icon -streamline-checkmark_selected"
																	color="#008009">
																	<path
																		d="M56.62 93.54a4 4 0 0 1-2.83-1.18L28.4 67a4 4 0 1 1 5.65-5.65l22.13 22.1 33-44a4 4 0 1 1 6.4 4.8L59.82 91.94a4.06 4.06 0 0 1-2.92 1.59zM128 64c0-35.346-28.654-64-64-64C28.654 0 0 28.654 0 64c0 35.346 28.654 64 64 64 35.33-.039 63.961-28.67 64-64zm-8 0c0 30.928-25.072 56-56 56S8 94.928 8 64 33.072 8 64 8c30.914.033 55.967 25.086 56 56z">
																	</path>
																</svg>
															</span>
															<div class="bui-list__body">
																<div class="bui-list__description"><span
																		class="bui-list__description-title">
																		Add high quality photos for all of your rooms
																	</span> <span
																		class="bui-list__description-subtitle"><span
																			class="bui-f-color-constructive"><span>Done!</span>
																		</span></span>
																</div>
																<span class="pps-checklist-action">
																	<a href="{{ url("photos.html") }}" title="Upload new photos"
																		class="bui-list__item-action bui-link">
																		Upload new photos
																	</a>
																</span>
															</div>
														</li>
														<li class="bui-list__item">
															<span role="presentation" class="bui-list__icon"><svg
																	viewBox="0 0 128 128" fill="#008009"
																	aria-hidden="true" focusable="false"
																	role="presentation" width="24" height="24"
																	class="bk-icon -streamline-checkmark_selected"
																	color="#008009">
																	<path
																		d="M56.62 93.54a4 4 0 0 1-2.83-1.18L28.4 67a4 4 0 1 1 5.65-5.65l22.13 22.1 33-44a4 4 0 1 1 6.4 4.8L59.82 91.94a4.06 4.06 0 0 1-2.92 1.59zM128 64c0-35.346-28.654-64-64-64C28.654 0 0 28.654 0 64c0 35.346 28.654 64 64 64 35.33-.039 63.961-28.67 64-64zm-8 0c0 30.928-25.072 56-56 56S8 94.928 8 64 33.072 8 64 8c30.914.033 55.967 25.086 56 56z">
																	</path>
																</svg></span>
															<div class="bui-list__body">
																<div class="bui-list__description"><span
																		class="bui-list__description-title">
																		Specify bed sizes for each room
																	</span> <span
																		class="bui-list__description-subtitle"><span
																			class="bui-f-color-constructive"><span>Done!</span></span></span>
																</div> <span class="pps-checklist-action">
																	<a href="{{ url("room-details.html") }}" title="Add bed sizes"
																		class="bui-list__item-action bui-link">
																		Add bed sizes
																	</a></span>
															</div>
														</li>
														<li class="bui-list__item">
															<span role="presentation" class="bui-list__icon"><svg
																	viewBox="0 0 24 24" aria-hidden="true"
																	focusable="false" fill="#BDBDBD" role="presentation"
																	width="24" height="24"
																	class="bk-icon -streamline-checkmark_empty"
																	color="#BDBDBD">
																	<path
																		d="M22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
																	</path>
																</svg></span>
															<div class="bui-list__body">
																<div class="bui-list__description"><span
																		class="bui-list__description-title">
																		Specify the room sizes
																	</span> <span
																		class="bui-list__description-subtitle"><span>
																			You have 1 room with an unspecified size.
																		</span></span></div> <span
																	class="pps-checklist-action">
																	<a href="{{ url("room-details.html") }}" title="Add room sizes"
																		class="bui-list__item-action bui-link">
																		Add room sizes
																	</a>
																</span>
															</div>
														</li>
														<li class="bui-list__item"><span role="presentation"
																class="bui-list__icon"><svg role="presentation"
																	width="24" viewBox="0 0 24 24" focusable="false"
																	aria-hidden="true" fill="#BDBDBD" height="24"
																	class="bk-icon -streamline-checkmark_empty"
																	color="#BDBDBD">
																	<path
																		d="M22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
																	</path>
																</svg></span>
															<div class="bui-list__body">
																<div class="bui-list__description"><span
																		class="bui-list__description-title">
																		Tell guests more about the nearby area
																	</span> <span
																		class="bui-list__description-subtitle"><span>
																			Please add at least one thing that's in your
																			surrounding area
																		</span></span></div> <span
																	class="pps-checklist-action">
																	<a href="{{ url("#") }}"
																		title="Add details about the nearby area"
																		class="bui-list__item-action bui-link">
																		Add details about the nearby area
																	</a>
																</span>
															</div>
														</li>
														<li class="bui-list__item"><span class="bui-list__icon"><svg
																	height="24" fill="#BDBDBD" aria-hidden="true"
																	focusable="false" viewBox="0 0 24 24" width="24"
																	role="presentation"
																	class="bk-icon -streamline-checkmark_empty"
																	color="#BDBDBD">
																	<path
																		d="M22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
																	</path>
																</svg></span>
															<div class="bui-list__body">
																<div class="bui-list__description"><span
																		class="bui-list__description-title">
																		Add directions to your property
																	</span> <span
																		class="bui-list__description-subtitle"><span>
																			Help guests find their way to your property
																			by adding directions
																		</span></span></div> <span
																	class="pps-checklist-action">
																	<a href="{{ url("#") }}" title="Add directions to your property"
																		class="bui-list__item-action bui-link">
																		Add directions to your property
																	</a></span>
															</div>
														</li>
														<li class="bui-list__item"><span role="presentation"
																class="bui-list__icon"><svg focusable="false"
																	aria-hidden="true" fill="#BDBDBD"
																	viewBox="0 0 24 24" width="24" role="presentation"
																	height="24"
																	class="bk-icon -streamline-checkmark_empty"
																	color="#BDBDBD">
																	<path
																		d="M22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
																	</path>
																</svg></span>
															<div class="bui-list__body">
																<div class="bui-list__description"><span
																		class="bui-list__description-title">
																		Add swimming pool information
																	</span> <span
																		class="bui-list__description-subtitle"><span>
																			Let guests know about how great your
																			swimming pool is
																		</span></span></div> <span
																	class="pps-checklist-action">
																	<a href="{{ url("#") }}" title="Add swimming pool details"
																		class="bui-list__item-action bui-link">
																		Add swimming pool details
																	</a></span>
															</div>
														</li>
														<li class="bui-list__item"><span role="presentation"
																class="bui-list__icon"><svg viewBox="0 0 24 24"
																	fill="#BDBDBD" aria-hidden="true" focusable="false"
																	role="presentation" width="24" height="24"
																	class="bk-icon -streamline-checkmark_empty"
																	color="#BDBDBD">
																	<path
																		d="M22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
																	</path>
																</svg></span>
															<div class="bui-list__body">
																<div class="bui-list__description"><span
																		class="bui-list__description-title">
																		Add restaurant information
																	</span> <span
																		class="bui-list__description-subtitle"><span>
																			Let guests know about your restaurant
																		</span></span></div> <span
																	class="pps-checklist-action">
																	<a href="{{ url("#") }}" title="Add restaurant details"
																		class="bui-list__item-action bui-link">
																		Add restaurant details
																	</a></span>
															</div>
														</li>
														<li class="bui-list__item"><span role="presentation"
																class="bui-list__icon"><svg height="24" fill="#008009"
																	aria-hidden="true" focusable="false"
																	viewBox="0 0 128 128" width="24" role="presentation"
																	class="bk-icon -streamline-checkmark_selected"
																	color="#008009">
																	<path
																		d="M56.62 93.54a4 4 0 0 1-2.83-1.18L28.4 67a4 4 0 1 1 5.65-5.65l22.13 22.1 33-44a4 4 0 1 1 6.4 4.8L59.82 91.94a4.06 4.06 0 0 1-2.92 1.59zM128 64c0-35.346-28.654-64-64-64C28.654 0 0 28.654 0 64c0 35.346 28.654 64 64 64 35.33-.039 63.961-28.67 64-64zm-8 0c0 30.928-25.072 56-56 56S8 94.928 8 64 33.072 8 64 8c30.914.033 55.967 25.086 56 56z">
																	</path>
																</svg></span>
															<div class="bui-list__body">
																<div class="bui-list__description"><span
																		class="bui-list__description-title">
																		Add room amenities for your rooms
																	</span> <span
																		class="bui-list__description-subtitle"><span
																			class="bui-f-color-constructive"><span>Done!</span></span></span>
																</div> <span class="pps-checklist-action">
																	<a href="{{ url("#") }}" title="Add room amenities"
																		class="bui-list__item-action bui-link">
																		Add room amenities
																	</a></span>
															</div>
														</li>
														<li class="bui-list__item"><span role="presentation"
																class="bui-list__icon"><svg height="24" fill="#BDBDBD"
																	aria-hidden="true" focusable="false"
																	viewBox="0 0 24 24" width="24" role="presentation"
																	class="bk-icon -streamline-checkmark_empty"
																	color="#BDBDBD">
																	<path
																		d="M22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
																	</path>
																</svg></span>
															<div class="bui-list__body">
																<div class="bui-list__description"><span
																		class="bui-list__description-title">
																		Add the most popular amenities
																	</span> <span
																		class="bui-list__description-subtitle"><span>
																			Get more bookings by telling guests about
																			your amenities
																		</span></span></div> <span
																	class="pps-checklist-action">
																	<a href="{{ url("#") }}" title="Add top amenities"
																		class="bui-list__item-action bui-link">
																		Add top amenities
																	</a></span>
															</div>
														</li>
														<li class="bui-list__item">
															<span role="presentation"
																class="bui-list__icon"><svg height="24" width="24"
																	role="presentation" focusable="false"
																	aria-hidden="true" fill="#BDBDBD"
																	viewBox="0 0 24 24"
																	class="bk-icon -streamline-checkmark_empty"
																	color="#BDBDBD">
																	<path
																		d="M22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
																	</path>
																</svg></span>
															<div class="bui-list__body">
																<div class="bui-list__description">
																	<span
																		class="bui-list__description-title">
																		Answer questions about your top facilities
																	</span> <span
																		class="bui-list__description-subtitle"><span>
																			Attract more guests by telling them what you
																			offer
																		</span></span></div> <span
																	class="pps-checklist-action">
																	<a href="{{ url("#") }}" title="Answer questions"
																		class="bui-list__item-action bui-link">
																		Answer questions
																	</a></span>
															</div>
														</li>
														<li class="bui-list__item">
															<span role="presentation"
																class="bui-list__icon"><svg height="24" fill="#BDBDBD"
																	aria-hidden="true" focusable="false"
																	viewBox="0 0 24 24" width="24" role="presentation"
																	class="bk-icon -streamline-checkmark_empty"
																	color="#BDBDBD">
																	<path
																		d="M22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
																	</path>
																</svg></span>
															<div class="bui-list__body">
																<div class="bui-list__description"><span
																		class="bui-list__description-title">
																		Add bathroom photos
																	</span> <span
																		class="bui-list__description-subtitle"><span>
																			You have 1 room missing bathroom photos
																		</span></span></div> <span
																	class="pps-checklist-action">
																	<a href="{{ url("photos.html") }}" title="Add bathroom photos "
																		class="bui-list__item-action bui-link">
																		Add bathroom photos
																	</a></span>
															</div>
														</li>
													</ul>

												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</main>
@endsection
@section('jquery')
	<!-- ===================== Required Js File Links ===================== -->
	<!-- jquery js  -->
	<script src="{{ asset("/hotel-admin/assets/js/jquery-1.12.4.min.js") }}"></script>
	<!-- bootstrap js  -->
	<script src="{{ asset("/hotel-admin/assets/js/bootstrap.bundle.min.js") }}"></script>
	<!-- custom Js  -->
	<script src="{{ asset("/hotel-admin/assets/js/script.js") }}"></script>
@endsection
