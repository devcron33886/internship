@props(['selected' => null])

<select {{ $attributes->merge(['class' => 'block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-red-700 focus:border-red-700 sm:text-sm rounded-md']) }}>
    <option value="">Select Department</option>
    @foreach ($departments as $department)
        <option value="{{ $department->id }}" {{ $selected == $department->id ? 'selected' : '' }}>{{ $department->name }}</option>
    @endforeach
</select>
