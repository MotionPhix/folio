<div id="uni_minting" class="uni-minting uk-section uk-section-xlarge@m uk-panel">
  <div class="uk-container">
    <div class="uk-panel uk-margin-medium-top uk-margin-2xlarge-top@m">
      <img
        class="uk-position-top-left uk-text-secondary" width="16"
        src="assets/images/objects/circle-01.png" alt="Object"
        style="top: -16%; left: 8%">

      <img
        class="uk-position-bottom-right uk-text-primary" width="24"
        src="assets/images/objects/circle-02.png" alt="Object"
        style="bottom: 16%; right: -8%">

      <img
        class="uk-position-bottom-left uk-text-muted" width="28"
        src="assets/images/objects/x.png" alt="Object"
        style="bottom: 16%; left: -8%">

      <div class="uk-grid-medium uk-grid-2xlarge@m uk-flex-middle uk-grid" data-uk-grid>
        <div class="uk-panel uk-width-2-5@m">
          <header class="uk-panel uk-text-center uk-text-left@m">

            <h2 class="uk-h3 uk-h2@m uk-text-capitalize">
              What I Can <br class="sm:hidden" /> <span class="uk-text-gradient">Do for you.</span>
            </h2>

            <img
              class="uk-width-2xsmall uk-margin@m uk-visible@m"
              src="assets/images/divider-01.svg" alt="Divider">

            <p class="uk-text-xlarge@m">
              My main area of expertise where I put my full focus on.
            </p>

          </header>
        </div>

        <div class="uk-panel uk-width-expand@m">
          <div
            class="uk-grid-small uk-grid@m uk-child-width-1-2@m uk-width-2xlarge uk-grid" data-uk-grid="masonry: true;" data-anime="targets: > * > *; opacity:[0, 1]; translateY:[24, 0]; onview: -250; delay: anime.stagger(100);">

            @php

              $menuItems = [
                [
                  'Visual Design',
                  'Mastered principles such as layout and typography, which forms the foundation of creating visually appealing designs.'
                ],

                [
                  'Branding and Identity',
                  'Helping clients establish or refine their brand identity through logos, color schemes, and visual element.'
                ],

                [
                  'User Experience (UX) Design',
                  'Ensuring a seamless and intuitive user interaction, includeing usability, accessibility, and flow of web navigation.'
                ],

                [
                  'Communication and Client Management',
                  'Effectively present designs, manage feedback, set expectations, negotiate contracts, and deliver projects on time and within budget.'
                ],
              ];

              foreach ($menuItems as $key => $menuItem) {
                $title = $menuItem[0];
                $content = $menuItem[1];

            @endphp

              <x-work-card
                :title="$title"
                :content="$content"
                @class([
                  "uk-margin-large-top@m" => $key == 1
                ]) />

            @php

              }

            @endphp

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
