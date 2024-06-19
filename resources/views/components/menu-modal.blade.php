<div
  id="uni_mobile_menu"
  class="uni-mobile-menu uk-offcanvas"
  data-uk-offcanvas="mode: push; overlay: true; flip: true; selPanel: .uk-offcanvas-bar-panel;">

  <div class="uk-offcanvas-bar-panel uk-panel dark:uk-background-gray-100">
    <div
      class="uni-mobile-menu-wrap uk-flex-column uk-flex-between"
      data-uk-height-viewport="offset-bottom: true;">

      <div class="uni-mobile-menu-content">

        <header class="uk-card uk-card-2xsmall flex items-center justify-between">

          <div class="uk-flex-1">
            <button
              aria-label="Close Menu"
              class="uk-offcanvas-close uk-button" type="button">
              <x-tabler-arrow-left class="size-7" />
            </button>
          </div>

          <div>
            <h5 class="uk-h5 uk-text-uppercase uk-margin-remove">Navigation</h5>
          </div>

          <div class="uk-flex-1"></div>

        </header>

        <hr class="uk-margin-remove">

        <div class="uk-card uk-card-small">

          <div class="uk-panel">

            <ul class="uk-nav uk-nav-default">

              <li class="uk-nav-header">Menu</li>

              <li>
                <x-splade-link href="{{ route('home') }}">
                  Home
                </x-splade-link>
              </li>

              <li>
                <x-splade-link href="{{ route('portfolio') }}">
                  Portfolio
                </x-splade-link>
              </li>

              <li>
                <x-splade-link href="{{ route('contact.me') }}">
                  Contact
                </x-splade-link>
              </li>

              <li class="uk-nav-header">Content &amp; Privacy</li>

              <li><a href="terms.html">Terms of use</a></li>

              <li><a href="privact.html">Privacy Policy</a></li>

            </ul>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>
