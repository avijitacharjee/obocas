<div class="row mb-5">
    <div class="col-md-3 col-sm-12">
        <div class="a5c3ef8268">
            @if ($property->breakfast_included == 'included')
                <div class="_1625d284f">
                    <div class="_a9ad2d05c">Breakfast included</div>
                </div>
            @endif
            <a href="{{ url('/property/'.$property->id) }}" target="_blank">
                <img src="{{ asset('/storage') }}/{{ explode(';', $property->property_images)[0] }}" alt="Images"
                    class="w-100">
            </a>
            <!-- Love Button -->
            <div class="aed6b4fa5f">
                <span class="e36b9d9c39">
                    <button class="b3955c2df2">
                        <span class="_3ae5d40db f2a905ef88 _4de7b1cb8">
                            <svg viewBox="0 0 128 128" width="1em" height="1em">
                                <path
                                    d="M64 112a3.6 3.6 0 0 1-2-.5 138.8 138.8 0 0 1-44.2-38c-10-14.4-10.6-26-9.4-33.2a29 29 0 0 1 22.9-23.7c11.9-2.4 24 2.5 32.7 13a33.7 33.7 0 0 1 32.7-13 29 29 0 0 1 22.8 23.7c1.3 7.2.6 18.8-9.3 33.3-9.1 13.1-24 25.9-44.2 37.9a3.6 3.6 0 0 1-2 .5z">
                                </path>
                            </svg>
                        </span>
                    </button>
                </span>
            </div>
            <!-- Love Button -->
        </div>
    </div>
    <div class="col-md-9 col-sm-12 mt-md-3 mt-sm-4">
        <div class="_84f6fd780 _f98eca565">

            <div class="row">
                <div class="col-8">
                    <div class="_84f6fd780 _d90c09a35">
                        <div class="_29c344764">
                            <div class="_12369ea61">
                                <h3 class="_23bf57b84">
                                    <a href="{{ url('/property') }}/{{ $property->id }}" target="_blank"
                                        class="fb01724e5b">
                                        <div class="fde444d7ef _c445487e2">
                                            {{ $property->property_name }}
                                        </div>
                                        <div class="_c1c7d8954">
                                            window
                                        </div>
                                    </a>
                                </h3>
                                {{-- <div class="d45fac9874">
                                    <span class="e36b9d9c39">
                                        <div class="c84c5d6659">
                                            <div class="_bebcf8d60">
                                                <span
                                                    class="_3ae5d40db _617879812 _6ab38b430">
                                                    <svg
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M23.555 8.729a1.505 1.505 0 0 0-1.406-.98h-6.087a.5.5 0 0 1-.472-.334l-2.185-6.193a1.5 1.5 0 0 0-2.81 0l-.005.016-2.18 6.177a.5.5 0 0 1-.471.334H1.85A1.5 1.5 0 0 0 .887 10.4l5.184 4.3a.5.5 0 0 1 .155.543l-2.178 6.531a1.5 1.5 0 0 0 2.31 1.684l5.346-3.92a.5.5 0 0 1 .591 0l5.344 3.919a1.5 1.5 0 0 0 2.312-1.683l-2.178-6.535a.5.5 0 0 1 .155-.543l5.194-4.306a1.5 1.5 0 0 0 .433-1.661z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span
                                                    class="_3ae5d40db _617879812 _6ab38b430">
                                                    <svg
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M23.555 8.729a1.505 1.505 0 0 0-1.406-.98h-6.087a.5.5 0 0 1-.472-.334l-2.185-6.193a1.5 1.5 0 0 0-2.81 0l-.005.016-2.18 6.177a.5.5 0 0 1-.471.334H1.85A1.5 1.5 0 0 0 .887 10.4l5.184 4.3a.5.5 0 0 1 .155.543l-2.178 6.531a1.5 1.5 0 0 0 2.31 1.684l5.346-3.92a.5.5 0 0 1 .591 0l5.344 3.919a1.5 1.5 0 0 0 2.312-1.683l-2.178-6.535a.5.5 0 0 1 .155-.543l5.194-4.306a1.5 1.5 0 0 0 .433-1.661z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span
                                                    class="_3ae5d40db _617879812 _6ab38b430">
                                                    <svg
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M23.555 8.729a1.505 1.505 0 0 0-1.406-.98h-6.087a.5.5 0 0 1-.472-.334l-2.185-6.193a1.5 1.5 0 0 0-2.81 0l-.005.016-2.18 6.177a.5.5 0 0 1-.471.334H1.85A1.5 1.5 0 0 0 .887 10.4l5.184 4.3a.5.5 0 0 1 .155.543l-2.178 6.531a1.5 1.5 0 0 0 2.31 1.684l5.346-3.92a.5.5 0 0 1 .591 0l5.344 3.919a1.5 1.5 0 0 0 2.312-1.683l-2.178-6.535a.5.5 0 0 1 .155-.543l5.194-4.306a1.5 1.5 0 0 0 .433-1.661z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span
                                                    class="_3ae5d40db _617879812 _6ab38b430">
                                                    <svg
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M23.555 8.729a1.505 1.505 0 0 0-1.406-.98h-6.087a.5.5 0 0 1-.472-.334l-2.185-6.193a1.5 1.5 0 0 0-2.81 0l-.005.016-2.18 6.177a.5.5 0 0 1-.471.334H1.85A1.5 1.5 0 0 0 .887 10.4l5.184 4.3a.5.5 0 0 1 .155.543l-2.178 6.531a1.5 1.5 0 0 0 2.31 1.684l5.346-3.92a.5.5 0 0 1 .591 0l5.344 3.919a1.5 1.5 0 0 0 2.312-1.683l-2.178-6.535a.5.5 0 0 1 .155-.543l5.194-4.306a1.5 1.5 0 0 0 .433-1.661z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <span class="e36b9d9c39">
                                    <span
                                        class="_3ae5d40db a892149490 _5a4763c60 _5a3a8722d b557ea9051">
                                        <svg viewBox="0 0 28.52 16">
                                            <rect width="28.52"
                                                height="16"
                                                fill="#febb02"
                                                rx="1.22"
                                                ry="1.22">
                                            </rect>
                                            <path fill="#fff"
                                                d="M12.27 13.26H6.76V7.43l1.29-3.89c.65-2.27 2.6-1.62 1.95.32l-.65 2.27h4.22a1.19 1.19 0 0 1 1 1.94 1.36 1.36 0 0 1 0 1.95A1.41 1.41 0 0 1 13.9 12s0 1.26-1.63 1.26zm-9.44 0V7.42H6v5.84zm17.36-9.09a2 2 0 0 0-.1.91v1.49h-1.48a2.29 2.29 0 0 0-.92.09.93.93 0 0 0-.38.38 2.29 2.29 0 0 0-.09.92v.09a2.23 2.23 0 0 0 .09.91.87.87 0 0 0 .38.38 2.08 2.08 0 0 0 .92.1h1.48v1.48a2.08 2.08 0 0 0 .1.92.87.87 0 0 0 .38.38 2.23 2.23 0 0 0 .91.09h.1a2.23 2.23 0 0 0 .91-.09.87.87 0 0 0 .38-.38 2.08 2.08 0 0 0 .1-.92V9.44h1.48a2 2 0 0 0 .91-.1.78.78 0 0 0 .38-.34 2 2 0 0 0 .1-.91V8a2.08 2.08 0 0 0-.1-.92.82.82 0 0 0-.38-.38 2.21 2.21 0 0 0-.91-.09H23V5.08a2 2 0 0 0-.1-.91.78.78 0 0 0-.38-.38 2 2 0 0 0-.91-.1h-.1a2 2 0 0 0-.91.1.78.78 0 0 0-.41.38z">
                                            </path>
                                        </svg>
                                    </span>
                                </span>
                                <span class="e36b9d9c39">
                                    <span
                                        class="_4abc4c3d5 ffe1efcb1b _20015f850">
                                        <span>Promoted</span>
                                    </span>
                                </span> --}}
                            </div>
                        </div>
                        <div class="_29c344764">
                            <div class="_cff98816f">
                                <a target="_blank" href="{{ url('/property/'.$property->id) }}"
                                    class="_4310f7077 _45807dae0 _89c03ca2c _f7538b398">
                                    <span>
                                        <span class="af1ddfc958 eba89149fb">{{ $property->city }}</span>
                                        {{-- <span
                                            class="af1ddfc958 eba89149fb">Show
                                            on map</span> --}}
                                    </span>
                                </a>
                                {{-- <span class="af1ddfc958">
                                    <span class="e36b9d9c39">
                                        <span>9.1 km from center</span>
                                    </span>
                                </span> --}}
                            </div>
                        </div>
                        <div class="_29c344764">
                            <div class="_4abc4c3d5 _192b3a196 ee57f184b9">
                                <span class="_3ae5d40db _e806ca064 _4b9c5f3e8">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M21.22 3.37a.75.75 0 00-.6-.59c-4.85-.9-10.6.55-13.37 3.36S3.1 14.39 3.88 19.05L2 21a.75.75 0 000 1 .74.74 0 00.53.22A.71.71 0 003 22l2-1.9a16.94 16.94 0 002.76.23c4.09 0 8.19-1.33 10.35-3.52 2.71-2.81 4.07-8.59 3.11-13.44zM17 15.75c-2.11 2.14-6.59 3.36-10.7 3L16.59 8.47a.75.75 0 000-1.06.77.77 0 00-1.07 0l-10.3 10.3c-.33-3.91.91-8.31 3.1-10.52s7.29-3.63 11.52-3c.67 4.22-.54 9.22-2.84 11.56z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="_2c7126bf4">Travel
                                    Sustainable property</span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-4">
                    <div class="_84f6fd780 a7b7310a00 df42919a5a">
                        <div class="_29c344764">
                            <div class="_84f6fd780 _d90c09a35">
                                <div class="_29c344764"><a
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        data-testid="review-score-link"
                                        href="{{ url('#') }}"
                                        class="_4310f7077 _45807dae0 _ab99fb427 _f7538b398"><span>
                                            <div data-testid="review-score"
                                                class="_0e12d9386 _d81584806 _667470915 _6e13af835 _88c9d425e a6b95f6195 _479ad76cf e18ef83843">
                                                <div aria-label="Scored 9.0 "
                                                    class="_9c5f726ff bd528f9ea6">
                                                    9.0
                                                </div>
                                                <div
                                                    class="_f8ff3180e b8710dea1b">
                                                    <div aria-label="Wonderful"
                                                        class="_9c5f726ff _192b3a196 f1cbb919ef">
                                                        Wonderful
                                                    </div>
                                                    <div
                                                        class="_4abc4c3d5 _1e6021d2f _6e869d6e0">
                                                        9
                                                        reviews
                                                    </div>
                                                </div>
                                            </div>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <!-- Top -->

            <!-- /Top -->
            <div class="row">
                <div class="col-6">
                    <div class="">
                        <span class="_4abc4c3d5 ffe1efcb1b _f3c918a6b _20015f850">
                            <span>Recommended
                                for your group</span>
                        </span>
                        {{-- <div role="none" tabindex="0"
                            class="_b680240d2 _1de3c61eb ea9073ffc9">
                            <div class="_83011992b"><span
                                    class="a9277b5c5c">1×</span>
                            </div>
                            <div class="_371410fad">
                                <div role="link" tabindex="0"
                                    class="_4abc4c3d5">
                                    <span class="_c5d12bf22">Premium
                                        Twin Room</span>
                                </div>
                                <div class="_2075f7b46">
                                    <div class="_4abc4c3d5">
                                        2 twin beds
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div role="none" tabindex="0" class="_b680240d2 _1de3c61eb ea9073ffc9">
                            <div class="_83011992b"><span
                                    class="a9277b5c5c">{{ $property->num_rooms ?? 1 }}×{{ $property->num_rooms > 1 ? 'Rooms' : 'Room' }}
                                </span>
                            </div>
                            <div class="_371410fad">
                                <div role="link" tabindex="0" class="_4abc4c3d5">
                                    <span class="_c5d12bf22">
                                    </span>
                                </div>
                                {{-- <div class="_2075f7b46">
                                    YwO
                                    <div class="_4abc4c3d5">
                                        3 queen beds
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="_84f6fd780  _f98eca565">
                        <div class="_29c344764">
                            <div class="_9b21dfb78">
                                <div class="_84f6fd780 _f98eca565">
                                    <div class="_29c344764">
                                        <div>
                                            {{-- <div
                                                class="_4abc4c3d5 _7ee1c7d14">
                                                26 nights, 4 adults, 2
                                                children
                                            </div> --}}
                                            <div class="c5246b6797 _5aba9d433">
                                                <span
                                                    class="fde444d7ef _e885fdc12">BDT&nbsp;{{ $property->room_price_x_persons }}</span>
                                            </div>
                                            {{-- <div
                                                class="_4abc4c3d5 d8eecffad4">
                                                +BDT&nbsp;{{$property->cot_price}}
                                                and charges
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="_29c344764">
                            <div class="_9af04e659"><span
                                    class="e36b9d9c39"><span
                                        class="_4abc4c3d5 ffe1efcb1b f7c4fe5ac0 e7a9e76a8c">
                                        <span>Earn
                                            BDT&nbsp;57,815
                                            Credits</span>
                                    </span>
                                    <span class="_c1c7d8954">
                                        You’ll
                                        earn
                                        <b class="_141fb08ee">BDT&nbsp;57,815
                                            Credits</b> on
                                        this
                                        booking. It'll be
                                        added to
                                        your Wallet 14 days
                                        after
                                        your
                                        stay.
                                    </span>
                                </span>
                            </div>
                        </div> --}}
                        <div class="_29c344764">
                            <div class="f0b5ba03dc">
                                <a role="button" target="_blank" href="{{ url('/property/'.$property->id) }}"
                                    class="_4310f7077 _ab6816951 _03eb8c30a e33c6840d8 _aa53125bf _c846a17ec"><span
                                        class="_b61fba663">See
                                        availability</span>
                                    <span class="b3378cdefc e54c97f7c7">
                                        <span class="_3ae5d40db _4b9c5f3e8">
                                            <span class="_3ae5d40db _d3dabd65e _4b9c5f3e8">
                                                <svg viewBox="0 0 24 24">
                                                    <path
                                                        d="M9.45 6c.2 0 .39.078.53.22l5 5c.208.206.323.487.32.78a1.1 1.1 0 0 1-.32.78l-5 5a.75.75 0 0 1-1.06 0 .74.74 0 0 1 0-1.06L13.64 12 8.92 7.28a.74.74 0 0 1 0-1.06.73.73 0 0 1 .53-.22zm4.47 5.72zm0 .57z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Buttom-->

            <!-- /Buttom-->

        </div>
    </div>

</div>
