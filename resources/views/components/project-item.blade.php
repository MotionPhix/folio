<div {{ $attributes->only('class') }}>
  <div
    class="uni-artist uk-panel uk-overflow-hidden uk-card uk-card-border uk-card-default uk-radius-medium uk-radius-large@m dark:uk-background-white-5">
    <div
      class="uni-artist-avatar uk-grid uk-grid-collapse uk-child-width-1-1 uk-flex-middle" data-uk-grid>
      <div>
        <div class="uk-panel uk-overflow-hidden">
          <img
            class="uk-cover" src="{{ $project->path }}"
            alt="{{ $project->name }}" data-uk-cover>
          <canvas class="uk-visible@m" width="200" height="300"></canvas>
          <canvas class="uk-hidden@m" width="200" height="260"></canvas>
        </div>
      </div>

      <div>
        <div class="uk-card-xsmall uk-card-small@m uk-text-left">

          <h3 class="uk-h6 uk-h5@m uk-margin-xsmall">
            {{ $project->name }}
          </h3>

        </div>
      </div>
    </div>
  </div>
</div>
