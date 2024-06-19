
<header class="uni-header uk-position-top">

  <div
    class="uni-header-navbar"
    data-uk-sticky="top: 70; show-on-up: false; animation: uk-animation-slide-top">

    <div class="uk-container">

      <nav class="uk-navbar uk-navbar-container uk-navbar-transparent" data-uk-navbar>

        <div class="uk-navbar-top">

          <div class="uk-navbar-left uk-flex-1@m">

            <ul
              class="uk-navbar-nav dark:uk-text-gray-10 uk-visible@m"
              data-uk-scrollspy-nav="closest: li; scroll: true; offset: 40"
              data-uk-navbar-bound>

              <li><a href="#uni_minting">Expertise</a></li>

              <li><a href="#uni_about">About Me</a></li>

              <li><a href="#uni_roadmap">Roadmap</a></li>

            </ul>

          </div>

          <div class="uk-navbar-center">

            <x-splade-link
              class="dark:text-gray-100 uk-logo uk-navbar-item"
              href="{{ route('home') }}">

              <x-application-logo class="w-12 h-12" />

            </x-splade-link>

          </div>

          <div class="uk-navbar-right uk-flex-1 uk-flex-right">

            <div class="uk-navbar-item uk-visible@m">

              <x-social-links />

            </div>

            <div class="uk-navbar-item uk-hidden@m">

              <a href="#uni_mobile_menu" data-uk-toggle>

                <x-tabler-menu class="size-7" />

              </a>

            </div>

          </div>

        </div>

      </nav>

    </div>

  </div>

</header>
