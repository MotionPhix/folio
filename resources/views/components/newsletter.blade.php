<div id="uni_newsletter" class="uni-newsletter uk-section uk-section-xlarge@m uk-panel">
  <div class="uk-container">
    <div class="uk-panel uk-flex-center uk-text-center uk-card uk-card-medium uk-card-xlarge@m uk-card-border uk-overflow-hidden uk-box-shadow-xsmall uk-radius-medium uk-radius-large@m dark:uk-background-white-5">
      <img class="uk-position-top-right uk-visible@m" width="24" src="assets/images/objects/x.png" alt="Object" style="top: 16%; right: 24%">
      <img class="uk-position-top-left uk-visible@m" width="16" src="assets/images/objects/circle-01.png" alt="Object" style="top: 16%; left: 8%">
      <img class="uk-position-bottom-right uk-visible@m" width="44" src="assets/images/objects/ethereum-02.png" alt="Object" style="bottom: 16%; right: 8%">
      <img class="uk-position-bottom-left uk-visible@m" width="32" src="assets/images/objects/dcoin.png" alt="Object" style="bottom: 24%; left: 16%">
      <div class="uk-panel uk-position-z-index">

        <h1 class="uk-h3 uk-h1@m uk-margin-remove uk-text-capitalize">
          Never miss <br class="sm:hidden"> <span class="uk-text-gradient">a drop!</span>
        </h1>

        <p class="uk-text-large@m uk-margin-small-top">
          Subscribe to my exclusive price drops & special offers.
        </p>

        <x-splade-form
          :action="route('store_subscriber')"
          class="border-none uk-grid-2xsmall uk-grid uk-child-width-auto@m uk-flex-middle uk-flex-center uk-margin-small-top uk-margin-medium-top@m items-center relative w-full" data-uk-grid>
          <div class="w-full flex flex-col">
            <input type="email"
            v-model="form.email" autocomplete="off"
            class="relative uk-input uk-form-large uk-width-large@m w-full rounded-full"
            placeholder="Your email..">

            <p
              class="absolute left-16 top-16 z-20 text-sm text-red-600 dark:text-red-400"
              v-text="form.errors.email"
              v-if="form.errors" />
          </div>

          <div class="mt-6 sm:mt-0 sm:absolute sm:z-10 sm:right-12">
            <button
              type="submit"
              class="uk-button uk-button-medium uk-button-large@m uk-button-gradient uk-width-1-1">
              Sign up
            </button>
          </div>
        </x-splade-form>

      </div>
    </div>
  </div>
</div>
