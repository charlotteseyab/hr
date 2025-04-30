<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        return view('superuser.settings.index', compact('settings'));
    }

    public function create()
    {
        return view('superuser.settings.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'key' => 'required|string|max:255|unique:settings',
            'value' => 'required|string',
            'description' => 'nullable|string',
        ]);

        Setting::create($validated);

        return redirect()->route('superuser.settings.index')
            ->with('success', 'Setting created successfully.');
    }

    public function edit(Setting $setting)
    {
        return view('superuser.settings.edit', compact('setting'));
    }

    public function update(Request $request, Setting $setting)
    {
        $validated = $request->validate([
            'value' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $setting->update($validated);

        return redirect()->route('superuser.settings.index')
            ->with('success', 'Setting updated successfully.');
    }

    public function destroy(Setting $setting)
    {
        $setting->delete();
        return redirect()->route('superuser.settings.index')
            ->with('success', 'Setting deleted successfully.');
    }
} 