<div x-data="scrollProgress" class=" inset-x-0 top-0 z-50">
        <div class="h-1 bg-blue-500" :style="`width: ${percent}%`"></div>
    </div>
<div
      x-data="scrollProgress"
      class="fixed p inline-flex items-center justify-center overflow-hidden rounded-full bottom-5 left-5"
    >
      <!-- Building a Progress Ring: https://css-tricks.com/building-progress-ring-quickly/ -->
      <svg class="w-20 h-20">
        <circle
          class="text-gray-300"
          stroke-width="5"
          stroke="currentColor"
          fill="transparent"
          r="30"
          cx="40"
          cy="40"
        />
        <circle
          class="text-blue-600"
          stroke-width="5"
          :stroke-dasharray="circumference"
          :stroke-dashoffset="circumference - percent / 100 * circumference"
          stroke-linecap="round"
          stroke="currentColor"
          fill="transparent"
          r="30"
          cx="40"
          cy="40"
        />
      </svg>
      <span class="absolute text-xl text-blue-700" x-text="`${percent}%`"></span>
    </div>
