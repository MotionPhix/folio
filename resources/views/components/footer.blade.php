{{-- <footer class="uni-footer uk-section uk-section-xlarge@m uk-panel">
  <div class="uk-position-cover uk-background-cover uk-visible@m" data-src="assets/images/footer-bg.png" data-uk-img></div>
  <div class="uk-container">
    <div class="uk-panel">
      <div class="uk-grid uk-flex-center uk-text-center" data-uk-grid>
        <div class="uk-width-large@m">
          <div class="uk-panel uk-position-z-index">
            <x-social-links />
          </div>
        </div>
      </div>

      <div class="uk-panel uk-text-small uk-margin-medium-top">
        <div class="uk-grid uk-child-width-1-1@m uk-flex-center uk-text-center" data-uk-grid>
          <div>
            <ul class="uk-subnav uk-text-muted uk-flex-center">
              <li><a href="privacy.html">Privacy</a></li>
              <li><a href="terms.html">Terms of use</a></li>
            </ul>
          </div>

          <div>
            <p class="uk-text-muted">
              © {{ date('Y') }} <strong>{{ config('app.name') }}</strong>. All rights reserved.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer> --}}


<footer class="uni-footer uk-section uk-section-xlarge@m uk-border-top">
  <div class="uk-container">
    <div class="uk-panel uk-position-z-index">
      <div class="uk-grid" data-uk-grid>
        <div class="uk-width-expand@m">
          <div class="uk-panel uk-width-medium@m">

            <x-splade-link
              href="{{ route('home') }}"
              class="flex items-center gap-2">

              <x-application-logo class="size-12 sm:size-20" />

              <h3 class="text-4xl font-bold sm:text-6xl">ultrashots</h3>

            </x-splade-link>

            <p class="uk-margin-medium@m my-4">
              Subscribe to stay up to date with my latest work and drops.
            </p>

            <x-social-links size="uk-icon-large@m" />

          </div>

        </div>

        <div class="uk-width-2-5@m">

          <div class="uk-grid" data-uk-grid>

            <div class="uk-width-1-2 uk-width-expand@m">

              <ul
                class="uk-list"
                data-uk-scrollspy-nav="closest: li; scroll: true; offset: 40">

                <li><a href="#uni_about">About me</a></li>

                <li><a href="#uni_team">Recent work</a></li>

                <li><a href="#uni_roadmap">Roadmap</a></li>

              </ul>

            </div>

            <div class="uk-width-1-2 uk-width-expand@m">

              <ul
                class="uk-list"
                data-uk-scrollspy-nav="closest: li; scroll: true; offset: 40">

                <li><a href="#uni_newsletter">Drops!</a></li>

                <li><a href="#uni_faq">FAQs</a></li>

                <li>

                  <x-splade-link href="/contact-me">
                    Get in touch
                  </x-splade-link>

                </li>

              </ul>

            </div>

          </div>

        </div>

      </div>

      <div class="uk-panel uk-text-small uk-margin-medium-top uk-margin-2xlarge-top@m">
        <div class="uk-grid uk-child-width-auto@m uk-flex-between" data-uk-grid>
          <div>
            <ul class="uk-subnav uk-subnav-small">
              {{-- <li><a href="privacy.html">Privacy policy</a></li> --}}
              {{-- <li><a href="terms.html">Terms of use</a></li> --}}
              <li>
               {{-- class="uk-margin-xlarge-left" --}}
                <a href="#" data-uk-totop data-uk-scroll>
                  <i class="uk-icon uk-icon-small unicon-chevron-up"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="uk-flex-first@m">
            <p>
              © {{ date('Y') }} <strong>{{ config('app.name') }}</strong>. All rights reserved.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

