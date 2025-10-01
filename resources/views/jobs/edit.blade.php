<x-layout>
    <x-slot:heading>Edit Job</x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH') 
</form>
<form method="POST" action="/jobs/{{ $job->id }}" class="mt-4">
        @csrf
        @method('DELETE')
        <button type="submit" class="text-red-600">Delete</button>
    </form>
</x-layout>

<form method="POST" action="/jobs">
@csrf
<div class="space-y-12">
<div class="border-b border-gray-900/10 pb-12">
<h2 class="text-base font-semibold leading-7 text-gray-900">Create a New
Job</h2>
<p class="mt-1 text-sm leading-6 text-gray-600">We just need a handful of
details from you.</p>
<div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
<div class="sm:col-span-4">
<label for="title">Title</label>
        <input type="text" name="title" value="{{ old('title', $job->title) }}">
        @error('title')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
<div class="mt-2">
<div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300
focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600
sm:max-w-md">
<input type="text" name="title" id="title" class="block flex-1 border-0
bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0
sm:text-sm sm:leading-6" placeholder="Shift Leader">
</div>
</div>
</div>
<div class="sm:col-span-4">
 <label for="salary">Salary</label>
        <input type="text" name="salary" value="{{ old('salary', $job->salary) }}">
        @error('salary')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
<div class="mt-2">
<div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300
focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600
sm:max-w-md">
<input type="text" name="salary" id="salary" class="block flex-1
border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400
focus:ring-0 sm:text-sm sm:leading-6" placeholder="$50,000 Per Year">
</div>
</div>
</div>
</div>
</div>
</div>
<div class="mt-6 flex items-center justify-end gap-x-6">
<button type="button" class="text-sm font-semibold leading-6
text-gray-900">Cancel</button>
<button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Update</button>
</div>
</form>