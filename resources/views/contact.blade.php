<section>

  <x-toggle-button />

  <x-menu-modal />

  <x-connections />

  <div class="wrap">

    <x-main-navigation />

    <div
      class="uni-contact uk-section uk-section-large@m uk-panel uk-section-2xlarge uk-padding-2xlarge-bottom uk-panel uk-overflow-hidden dark:uk-background-gray-100">

      <header class="sm:mt-20 uni-page-header">
        <div class="uk-container">
          <h1 class="heading uk-h2 uk-h1@m uk-text-capitalize uk-text-center@m">
            Contact Me
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

                <header class="mb-6 uk-card uk-card-small uk-card-large@m">

                  <h2 class="mb-2 text-3xl sm:text-center">What are you interested in?</h2>

                  <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-center sm:gap-4">

                    <label class="flex items-center gap-2">
                      <input
                        type="radio"
                        v-model="data.needQuote"
                        class="text-purple-600 bg-gray-100 border-gray-300 size-6 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                        :value="false" />

                      <span>I have a question.</span>
                    </label>

                    <label class="flex items-center gap-2">
                      <input
                        type="radio"
                        v-model="data.needQuote"
                        class="text-green-600 bg-gray-100 border-gray-300 size-6 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                        :value="true" />

                      <span>I need a quote.</span>
                    </label>

                  </div>

                </header>

                <div
                  class="uk-card uk-card-small uk-card-large@m uk-card-default uk-card-border uk-radius-medium uk-radius-large@m uk-position-z-index dark:uk-background-white-5">

                  <x-splade-form
                    :action="route('get-quote')"
                    class="gap-6 uk-grid uk-grid-xsmall uk-child-width-1-1"
                    data-uk-grid
                    v-if="data.needQuote">

                    <div class="uk-form-controls">
                      <input
                        v-model="form.full_name"
                        class="rounded-lg uk-input uk-form-large uk-text-bold"
                        type="text" placeholder="Your full name">

                      <x-splade-errors>
                        <p
                          class="text-sm font-semibold text-rose-600"
                          v-if="errors.has('full_name')"
                          v-text="errors.first('full_name')" />
                      </x-splade-errors>
                    </div>

                    <div class="uk-form-controls">
                      <input
                        v-model="form.email"
                        class="rounded-lg uk-input uk-form-large uk-text-bold"
                        type="email" placeholder="Your email">

                      <x-splade-errors>
                        <p
                          class="text-sm font-semibold text-rose-600"
                          v-if="errors.has('email')"
                          v-text="errors.first('email')" />
                      </x-splade-errors>
                    </div>

                    <div class="uk-form-controls">
                      <input
                        v-model="form.phone"
                        class="rounded-lg uk-input uk-form-large uk-text-bold"
                        type="tel" placeholder="Your mobile number">

                      <x-splade-errors>
                        <p
                          class="text-sm font-semibold text-rose-600"
                          v-if="errors.has('phone')"
                          v-text="errors.first('phone')" />
                      </x-splade-errors>
                    </div>

                    <div class="uk-form-controls">
                      <input
                        v-model="form.project_title"
                        class="rounded-lg uk-input uk-form-large uk-text-bold"
                        type="text" placeholder="What will I work on?">

                      <x-splade-errors>
                        <p
                          class="text-sm font-semibold text-rose-600"
                          v-if="errors.has('project_title')"
                          v-text="errors.first('project_title')" />
                      </x-splade-errors>
                    </div>

                    <div class="uk-form-controls">
                      <input
                        v-model="form.budget"
                        class="rounded-lg uk-input uk-form-large uk-text-bold"
                        type="text" placeholder="What's your budget">

                      <x-splade-errors>
                        <p
                          class="text-sm font-semibold text-rose-600"
                          v-if="errors.has('budget')"
                          v-text="errors.first('budget')" />
                      </x-splade-errors>
                    </div>

                    <div class="uk-form-controls">
                      <x-splade-textarea
                        name="description"
                        class="rounded-lg uk-text-bold"
                        placeholder="Describe your project a bit thorough."
                        autosize
                        rows="5" />
                    </div>

                    <div class="uk-form-controls uk-flex-center">

                      <button
                        type="submit"
                        class="uk-button uk-button-large uk-button-gradient uk-width-small@m uk-margin-auto">
                        Get a quote
                      </button>

                    </div>

                  </x-splade-form>

                  <x-splade-form
                    :action="route('ask-me')"
                    class="gap-6 uk-grid uk-grid-xsmall uk-child-width-1-1"
                    data-uk-grid
                    v-else>

                    <div class="uk-form-controls">
                      <input
                        v-model="form.full_name"
                        class="rounded-lg uk-input uk-text-bold uk-form-large"
                        type="text" placeholder="Enter your fullname">

                      <x-splade-errors>
                        <p
                          v-if="errors.has('full_name')"
                          v-text="errors.first('full_name')"
                          class="mt-1 text-sm text-rose-500" />
                      </x-splade-errors>

                    </div>

                    <div class="uk-form-controls">
                      <input
                        v-model="form.email"
                        class="rounded-lg uk-input uk-text-bold uk-form-large"
                        type="email" placeholder="Enter your email address">

                      <x-splade-errors>

                        <p
                          v-if="errors.has('email')"
                          v-text="errors.first('email')"
                          class="mt-1 text-sm text-rose-500" />

                      </x-splade-errors>

                    </div>

                    <div class="uk-form-controls">
                      <input
                        v-model="form.subject"
                        class="rounded-lg uk-input uk-text-bold uk-form-large"
                        type="text" placeholder="What's your question about?">

                      <x-splade-errors>

                        <p
                          v-if="errors.has('subject')"
                          v-text="errors.first('subject')"
                          class="mt-1 text-sm text-rose-500" />

                      </x-splade-errors>
                    </div>

                    <div class="uk-form-controls">
                      <textarea
                        class="rounded-lg uk-textarea uk-padding uk-height-xsmall uk-text-bold"
                        rows="5" v-model="form.message"
                        placeholder="Type your question"></textarea>

                      <x-splade-errors>

                        <p
                          v-if="errors.has('message')"
                          v-text="errors.first('message')"
                          class="mt-1 text-sm text-rose-500" />

                      </x-splade-errors>
                    </div>

                    <div class="uk-form-controls">

                      <button
                        type="submit"
                        class="uk-button uk-button-large uk-button-gradient uk-width-small@m uk-margin-auto">
                        <x-tabler-send class="size-6" />
                        <span>Ask me</span>
                      </button>

                    </div>

                  </x-splade-form>

                </div>

              </div>

              <div>

                <div class="uk-card uk-card-small uk-card-large@m">

                  <div class="uk-grid uk-child-width-1-2@m mb-6" data-uk-grid>

                    <div class="uk-panel">

                      <h2 class="uk-h5 uk-h4@m">Got a suggestion?</h2>

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
