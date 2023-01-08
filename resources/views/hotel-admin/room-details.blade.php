@extends('hotel-admin.layout')
@section('css-imports')
    <link rel="shortcut icon" href="{{ asset("/hotel-admin/assets/images/favicon.png") }}" type="image/png" />
	<!-- Bootstrap v5.0.0-beta3 -->
	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/bootstrap.min.css") }}">
	<!-- font awesome -->
	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/all.min.css") }}">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/style.min.css") }}">

	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/pages/room-details.min.css") }}">
@endsection
@section('content')
		<main id="content" class="main">
			<div class="page-body ">
				<div class="">

					<div class="bui-container bui-container--center">
						<div class="page-header-component-title th__page-header ">
							<div class="row">
								<div class="th__page-header__content col-md-12">
									<h1 class="th__page-header__title">
										Room details
									</h1>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 main-content">
								<div id="main_content_section">
									<div id="room_summaries">
										<div class="row">
                                            @foreach ($rooms as $room)
											<div class="col-xs-12 col-sm-6 col-lg-4">
												<div class="roomcard large-roomcard">
													<div class="roomcard-header"
                                                        @if(isset($room->images))
                                                            style="background: url('{{asset('/storage')}}/{{explode(';',$room->images)[0]}}');"
                                                        @else
														    style="background: url('assets/images/illustrated_bedroom.jpg');"
                                                        @endif
                                                        >
														<div class="roomcard-warning-banner">
															<div class="bui-alert bui-alert--error u-bleed@small"
																role="status"><span class="bui-alert__icon"
																	role="presentation"><svg
																		class="bk-icon -iconset-warning" height="24"
																		width="24" viewBox="0 0 128 128"
																		role="presentation" aria-hidden="true"
																		focusable="false">
																		<path
																			d="M64 8a56 56 0 1 0 56 56A56 56 0 0 0 64 8zm0 91a8 8 0 1 1 8-8 8 8 0 0 1-8 8zm8-61l-5 39h-6l-5-39a8 8 0 1 1 16 0z">
																		</path>
																	</svg></span>
																<div class="bui-alert__description">
																	<p class="bui-alert__text"><strong>Forgot to add
																			a photo?</strong> Add up to 4 to help
																		guests know what to expect</p>
																</div>
															</div>
														</div>
														<div class="roomcard-banner">
															<h2>{{$room->room_name}}</h2>
															<span>({{$room->id}})</span>
														</div>
													</div>
													<div class="roomcard-content">
														<p>
														</p>
														<p>Maximum guests: <b>{{$room->number_of_guests}}</b></p>
														<p></p>

														<p>
															Number of this type: <b>{{$room->number_of_rooms}}</b>
														</p>

														<div class="roomcard-buttons">
															<a href="{{ url("/hotel-admin/edit-room-details") }}"
																class="edit-room btn-default btn">Edit</a>
															<span class="room-photo-uploader-long"
																style="margin-left:3px;">
																<a href="{{ url("#") }}" class="photo_uploader btn btn-primary">
																	<span class="photo_uploader_label">Upload
																		photos</span>

																	<form method="POST" enctype="multipart/form-data"
																		class="photo-uploader-form ">
																		<span class="file-wrap">
																			<input type="file" name="file"
																				accept="image/jpeg,image/png"
																				class="file" multiple="">
																		</span>
																	</form>
																</a>
															</span>
														</div>
													</div>
												</div>
											</div>
                                            @endforeach
											<div class="col-xs-12 col-sm-6 col-lg-8" id="create-new-room-container">
												<div class="row">
													<div class="col-6">
														<a href="{{ url("/hotel-admin/add-room1") }}" id="create-new-room"
															class="create-new-unit large-roomcard">
															Add new room
															{{-- <span class="address-label">
																(at Baridhara, Dhaka, Bangladesh)
															</span> --}}
															<i class="fa-solid fa-plus"></i>
														</a>
													</div>
													{{-- <div class="col-6">
														<a class="create-new-unit" href="{{ url("edit-room-details.html") }}"
															id="create-new-property">
															Create a new property
															<span class="address-label">
																(at a
																different
																address)
															</span>
															<i class="fa-solid fa-plus"></i>
														</a>
													</div> --}}
												</div>
											</div>
											<!--#create-new-room-container-->
										</div>
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
	{{-- <script src="{{ asset("/hotel-admin/assets/js/jquery-1.12.4.min.js") }}"></script>
	<!-- bootstrap js  -->
	<script src="{{ asset("/hotel-admin/assets/js/bootstrap.bundle.min.js") }}"></script>
	<!-- custom Js  -->
	<script src="{{ asset("/hotel-admin/assets/js/script.js") }}"></script> --}}

@endsection
