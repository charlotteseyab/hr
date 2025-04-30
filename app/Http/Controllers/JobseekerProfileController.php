<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class JobseekerProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('jobseeker.profile', [
            'user' => $user,
            'specialities' => $this->getSpecialities(),
            'educationLevels' => $this->getEducationLevels(),
            'experienceLevels' => $this->getExperienceLevels(),
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'cv' => ['nullable', 'file', 'mimes:pdf,doc,docx', 'max:2048'],
            'certificates.*' => ['nullable', 'file', 'mimes:pdf,jpg,jpeg,png', 'max:2048'],
            'experience_level' => ['required', Rule::in($this->getExperienceLevels())],
            'specialities' => ['required', 'array', 'min:5'],
            'specialities.*' => ['string'],
            'education_level' => ['required', Rule::in($this->getEducationLevels())],
        ]);

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->experience_level = $validated['experience_level'];
        $user->education_level = $validated['education_level'];
        $user->specialities = $validated['specialities'];

        // Handle CV upload
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cvs', 'public');
            $user->cv = $cvPath;
        }
        // Handle certificates upload
        if ($request->hasFile('certificates')) {
            $certPaths = [];
            foreach ($request->file('certificates') as $cert) {
                $certPaths[] = $cert->store('certificates', 'public');
            }
            $user->certificates = $certPaths;
        }
        $user->save();

        return redirect()->route('jobseeker.profile.show')->with('success', 'Profile updated successfully!');
    }

    private function getSpecialities()
    {
        return [
            'Web Development', 'Mobile Development', 'UI/UX Design', 'Project Management',
            'Data Analysis', 'Machine Learning', 'DevOps', 'QA Testing', 'Digital Marketing',
            'Content Writing', 'Cybersecurity', 'Cloud Computing', 'Database Management',
            'Network Engineering', 'Business Analysis', 'Product Management', 'Sales',
            'Customer Support', 'Graphic Design', 'SEO',
        ];
    }

    private function getEducationLevels()
    {
        return [
            'High School', 'Diploma', 'Bachelor\'s', 'Master\'s', 'PhD',
        ];
    }

    private function getExperienceLevels()
    {
        return [
            'Entry', 'Mid', 'Senior', 'Lead',
        ];
    }
} 