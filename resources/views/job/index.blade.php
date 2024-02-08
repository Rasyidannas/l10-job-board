{{-- this will call layout.blade.php in component --}}
<x-layout>
   @foreach ($jobs as $job)
       <x-card class="mb-4">
         <div class="mb-4 flex justify-between">
            <h2 class="text-lg font-medium">{{ $job->title }}</h2>
            <div class=" text-slate-500">${{ number_format($job->salary) }}</div>
         </div>

         <div class="mb-4 flex justify-between text-sm text-slate-500 items-center">
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
         <p class="text-sm text-slate-500">{!! nl2br(e($job->description)) !!}</p>
       </x-card>
   @endforeach
</x-layout>