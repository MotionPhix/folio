<section>

  <x-toggle-button />

  <x-menu-modal />

  <x-connections />

  <div class="wrap">

    <x-main-navigation />

    <div
      class="uni-contact uk-section uk-section-large@m uk-panel uk-section-2xlarge uk-padding-2xlarge-bottom uk-panel uk-overflow-hidden dark:uk-background-gray-100">

      <header class="mt-20 uni-page-header">
        <div class="uk-container">
          <h1 class="heading uk-h3 uk-h1@m uk-text-capitalize uk-text-center">
            Contact
          </h1>
        </div>
      </header>

      <x-splade-data
        local-storage
        remember="contact-form"
        default="{ needQuote: false }">

        <div class="uk-margin-top uk-margin-large-top@m">

          <div class="uk-container uk-container-xsmall">

            <div class="uk-grid uk-child-width-1-1" data-uk-grid>

              <div>

                <header class="mb-6">

                  <h2 class="text-3xl">What are you interested in?</h2>

                  <div class="flex items-center gap-4">

                    <button @click="data.needQuote = false">
                      <x-splade-radio
                        v-model="data.needQuote"
                        label="I have a question."
                        value="data.needQuote" />
                    </button>

                    <button @click="data.needQuote = true">
                      <x-splade-radio
                        v-model="data.needQuote"
                        label="I need a quote."
                        value="data.needQuote" />
                    </button>

                  </div>

                </header>

                <div
                  class="uk-card uk-card-small uk-card-large@m uk-card-default uk-card-border uk-radius-medium uk-radius-large@m uk-position-z-index dark:uk-background-white-5">

                  <x-splade-form
                    action="?"
                    class="gap-6 uk-grid uk-grid-xsmall uk-child-width-1-1"
                    data-uk-grid
                    v-if="data.needQuote">

                    {{-- <div class="uk-form-controls">
                      <input v-model="form.name" class="rounded-lg uk-input uk-form-medium uk-text-bold" type="text" placeholder="Name">
                    </div> --}}

                    {{-- <div class="uk-form-controls">
                      <input
                        v-model="form.email"
                        class="rounded-lg uk-input uk-form-medium uk-text-bold"
                        type="email" placeholder="Email">
                    </div> --}}

                    {{-- <div class="uk-form-controls">
                      <input
                        v-model="form.subject"
                        class="rounded-lg uk-input uk-form-medium uk-text-bold"
                        type="text" placeholder="Subject">
                    </div> --}}

                    <div class="uk-form-controls">
                      <textarea
                        class="rounded-lg uk-textarea uk-padding uk-height-xsmall uk-text-bold"
                        rows="5" placeholder="Describe your project a bit thorough"></textarea>
                    </div>

                    <div class="uk-form-controls uk-flex-center">

                      <button
                        type="submit"
                        class="uk-button uk-button-gradient uk-width-small@m uk-margin-auto">
                        Send message
                      </button>

                    </div>

                  </x-splade-form>

                  <x-splade-form
                    action=""
                    class="gap-6 uk-grid uk-grid-xsmall uk-child-width-1-1"
                    data-uk-grid
                    v-else>

                    <div class="uk-form-controls">
                      <input v-model="form.name" class="rounded-lg uk-input uk-form-medium uk-text-bold" type="text" placeholder="Name">
                    </div>

                    <div class="uk-form-controls">
                      <input
                        v-model="form.email"
                        class="rounded-lg uk-input uk-form-medium uk-text-bold"
                        type="email" placeholder="Email">
                    </div>

                    <div class="uk-form-controls">
                      <input
                        v-model="form.subject"
                        class="rounded-lg uk-input uk-form-medium uk-text-bold"
                        type="text" placeholder="Subject">
                    </div>

                    <div class="uk-form-controls">
                      <textarea
                        class="rounded-lg uk-textarea uk-padding uk-height-xsmall uk-text-bold"
                        rows="5" placeholder="Type your message"></textarea>
                    </div>

                    <div class="uk-form-controls uk-flex-center">

                      <button
                        type="submit"
                        class="uk-button uk-button-gradient uk-width-small@m uk-margin-auto">
                        Send message
                      </button>

                    </div>

                  </x-splade-form>

                </div>

              </div>

              <div>

                <div class="uk-card uk-card-small uk-card-large@m">

                  <div class="uk-grid uk-child-width-1-2@m mb-6" data-uk-grid>

                    <div class="uk-panel">

                      <h2 class="uk-h5 uk-h4@m">Got a question?</h2>

                      <p>
                        You can reach me via the following phone number or email address. Don't forget
                        to check me out on social media, and show some love. Cheerio!
                      </p>

                    </div>

                    <div class="self-end uk-panel">

                      <ul class="uk-list">
                        <li>
                          <a href="tel:+265-888-166-911" class="uk-link-reset">
                            <x-tabler-phone-call class="h-7 w-7" />
                            <span>+265 888 166 911</span>
                          </a>
                        </li>

                        <li>
                          <a href="mailto:support@ultrashots.net" class="uk-link-reset">
                            <x-tabler-mail class="w-7 h-7" />
                            <span>support@ultrashots.net</span>
                          </a>
                        </li>
                      </ul>

                    </div>

                  </div>

                  <x-social-links class="uk-margin-top uk-text-gray-70 dark:uk-text-gray-40" />

                </div>

              </div>

            </div>

          </div>

        </div>

      </x-splade-data>

    </div>

  </div>

  <x-footer />

</section>
