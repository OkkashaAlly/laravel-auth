<?php

namespace App\Http\Controllers;

use App\Models\Preference;
use Illuminate\Http\Request;

class PreferenceController extends Controller
{
    // Create Preference Method ================================
    public function createPreference(Request $request)
    {
        // return $request->all();
        $validatedData = $request->validate([
            'sources' => 'max:55',
            'categories' => 'max:55',
            'countries' => 'max:55',
            'languages' => 'max:55',
            'sortBy' => 'max:55',
            'user_id' => 'max:55'
        ]);

        // link to the user model
        $validatedData['user_id'] = auth()->id;
        
        $preference = Preference::create($validatedData);
        
        return $preference;
    }
}
