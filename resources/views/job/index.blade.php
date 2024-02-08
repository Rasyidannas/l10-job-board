{{-- this will call layout.blade.php in component --}}
<x-layout>
   @foreach ($jobs as $job)
       <div>{{ $job->title }}</div>
   @endforeach
</x-layout>