@props(['size' => 'uk-icon-medium@m'])

<ul
  class="uk-subnav uk-subnav-small uk-text-gray-70" {{ $attributes->only(['class']) }}>
  <li>
    <a href="https://twitter.com/_motionplus">
      <x-tabler-brand-x class="w-7 h-7 {{ $size }}" />
    </a>
  </li>

  <li>
    <a href="https://facebook.com/ultrashotz">
      <x-tabler-brand-meta class="w-8 h-8 {{ $size }}" />
    </a>
  </li>

  <li>
    <a href="https://linkedin.com/in/ultrashots">
      <x-tabler-brand-linkedin class="w-7 h-7 {{ $size }}" />
    </a>
  </li>
</ul>
