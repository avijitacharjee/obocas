<!-- Signin Modal -->
<div class="signin-modal-container d-none singin-popup">
    <div class="basic-modal-container">
        <div class="basic-modal-wrapper">
            <div class="basic-modal-popup-container">
                <div class="basic-modal-popup">
                    <div class="signin-section">
                        <div class="modal-header">
                            <h3 class="modal-title">Sign In</h3>
                            <i class="ficon ficon-16 ficon-x-icon"></i>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="/partner/signin">
                                @csrf
                                <dl class="form-group">
                                    <dt>
                                        <label for="signin-email-input">Email</label>
                                    </dt>
                                    <dd class="email-input-container">
                                        <input type="email" name="email" class="form-control iconable-textinput">
                                    </dd>
                                </dl>
                                <dl class="form-group">
                                    <dt>
                                        <label for="signin-password-input">Password</label>
                                    </dt>
                                    <dd class="password-input-container">
                                        <input type="password" name="password" class="form-control iconable-textinput "
                                            id="signin-password-input">
                                    </dd>
                                    <div class="g-recapcha-c-align">
                                        <div class="g-recaptcha" id="ReCAPTCHA" data-sitekey=""
                                            clientid="0">
                                            <div style="width: 304px; height: 78px;">

                                                <div>
                                                    <iframe title="reCAPTCHA"
                                                        src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdNADUUAAAAANGH0HMtLvII1ckb7lw9awXQ7U1m&amp;co=aHR0cHM6Ly9wYXJ0bmVycy5hZ29kYS5jb206NDQz&amp;hl=en&amp;v=85AXn53af-oJBEtL2o2WpAjZ&amp;size=normal&amp;cb=bic5etgcc360"
                                                        width="304" height="78" role="presentation"
                                                        frameborder="0" scrolling="no"></iframe>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="keep-signin">
                                        <input type="checkbox" checked> Keep me signed in
                                    </div>
                                    <div class="text-right forgot-password">
                                        <div class="forgotpassword-link">
                                            <a href="{{ url("#") }}">Forgot your password? Click here</a>
                                        </div>
                                    </div>
                                </dl>
                                <div class="form-group text-center signin-button-container">
                                    <button type="submit" id="signin-submit-btn"
                                        class="btn btn-primary">Sign In</button>
                                    <div class="terms-of-use">
                                        <span>By logging in, you accept our
                                            <a class="traffic-tracking" href="{{ url("#") }}">Terms of Use</a>, and
                                            <a class="traffic-tracking" href="{{ url("#") }}">Privacy &amp; Cookies
                                                Statement
                                            </a>.
                                        </span>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <ul>
                                        <li>No account yet?</li>
                                        <li>
                                            <a class="btn btn-primary create-account-button"
                                                href="{{ url("/partner/signup") }}">Sign up</a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="presentation-section">
                        <img src="{{ asset("/partner/assets/images/illustration-city-affiliate.png") }}">
                        <div class="presentation-section-text">
                            <h3>Become an affiliate</h3>
                            <p>We're growing fast, and so can your earnings. <br> Join our affiliate program
                                today.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="singin-popup-close">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>

    </div>
</div>
<!-- /Signin Modal -->