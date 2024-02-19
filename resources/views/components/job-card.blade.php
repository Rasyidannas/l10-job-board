<x-card class="mb-4">
    <div class="flex justify-between mb-4">
       <h2 class="text-lg font-medium">{{ $job->title }}</h2>
       <div class=" text-slate-500">${{ number_format($job->salary) }}</div>
    </div>

    <div class="flex items-center justify-between mb-4 text-sm text-slate-500">
       <div class="flex gap-4">
          <div>Company Name</div>
          <div>{{ $job->location }}</div>
       </div>
       <div class="flex gap-1 text-xs">
          <x-tag>{{ Str::ucfirst($job->experience) }}</x-tag>
          <x-tag>{{ $job->category }}</x-tag>
       </div>
    </div>

    {{-- sign of !! this for nl2br not show as text and sign e for save from XSS/html entities --}}
    <p class="mb-4 text-sm text-slate-500">{!! nl2br(e($job->description)) !!}</p>

    {{ $slot }}
</x-card>