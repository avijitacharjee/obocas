@extends('hotel-admin/layout')
@section('css-imports')
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">

	<link rel="stylesheet" href="assets/css/style.min.css">
	<link rel="stylesheet" href="assets/css/pages/index.min.css">
@endsection
@section('content')

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
																	@foreach($bookings as $booking)
                                                                    <tr>
																		<td>{{$booking->firstname}}</td>
																		<td>12-02-2022</td>
																		<td>12-02-2022</td>
																		<td>5</td>
																		<td>12-02-2022</td>
																	</tr>
                                                                    @endforeach
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
@endsection
@section('jquery')
@endsection
