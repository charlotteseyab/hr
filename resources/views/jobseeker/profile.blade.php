<x-app-layout>
    <div class="max-w-2xl mx-auto py-10">
        <h2 class="text-2xl font-bold mb-6">Complete Your Profile</h2>
        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
        @endif
        @if($errors->any())
            <div class="mb-4 p-3 bg-red-100 text-red-800 rounded">
                <ul class="list-disc pl-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('jobseeker.profile.update') }}" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div>
                <label class="block font-medium mb-1">Name</label>
                <input type="text" name="name" value="{{ old('name', $user->name) }}" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label class="block font-medium mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label class="block font-medium mb-1">Upload CV (PDF, DOC, DOCX)</label>
                <input type="file" name="cv" accept=".pdf,.doc,.docx" class="w-full border rounded p-2">
                @if($user->cv)
                    <a href="{{ Storage::url($user->cv) }}" target="_blank" class="text-blue-600 text-sm mt-1 inline-block">View current CV</a>
                @endif
            </div>
            <div>
                <label class="block font-medium mb-1">Upload Certificates (PDF, JPG, PNG, multiple)</label>
                <input type="file" name="certificates[]" multiple accept=".pdf,.jpg,.jpeg,.png" class="w-full border rounded p-2">
                @if($user->certificates && is_array($user->certificates))
                    <div class="mt-1 space-y-1">
                        @foreach($user->certificates as $cert)
                            <a href="{{ Storage::url($cert) }}" target="_blank" class="text-blue-600 text-sm block">View certificate</a>
                        @endforeach
                    </div>
                @endif
            </div>
            <div>
                <label class="block font-medium mb-1">Experience Level</label>
                <select name="experience_level" class="w-full border rounded p-2" required>
                    <option value="">Select experience level</option>
                    @foreach($experienceLevels as $level)
                        <option value="{{ $level }}" {{ old('experience_level', $user->experience_level) == $level ? 'selected' : '' }}>{{ $level }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block font-medium mb-1">Specialities <span class="text-xs text-gray-500">(Select at least 5)</span></label>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                    @foreach($specialities as $spec)
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="specialities[]" value="{{ $spec }}" 
                                {{ (collect(old('specialities', $user->specialities ?? []))->contains($spec)) ? 'checked' : '' }}>
                            <span>{{ $spec }}</span>
                        </label>
                    @endforeach
                </div>
            </div>
            <div>
                <label class="block font-medium mb-1">Level of Education</label>
                <select name="education_level" class="w-full border rounded p-2" required>
                    <option value="">Select education level</option>
                    @foreach($educationLevels as $level)
                        <option value="{{ $level }}" {{ old('education_level', $user->education_level) == $level ? 'selected' : '' }}>{{ $level }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Save Profile</button>
            </div>
        </form>
    </div>
</x-app-layout> 