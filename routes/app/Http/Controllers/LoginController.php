<?php


namespace App\Http\Controllers;

use App\Models\UserFile;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Show Login Form
    public function showLoginForm()
    {
        return view('login');
    }

    // Process Login
    public function processLogin(Request $request)
    {
        // Hardcoded Credentials
        $email = 'sshelke2001@gmail.com';
        $password = '1234567';

        // Validate Input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Check Credentials
        if ($request->email == $email && $request->password == $password) {
            return redirect()->route('upload.form');
        }

        // Invalid Credentials
        return back()->withErrors(['Invalid email or password']);
    }

    // Show File Upload Form
    public function showUploadForm()
    {
        return view('upload');
    }

    // Process File Upload
    
    public function processFileUpload(Request $request)
    {
        // Validate Form Input
        $request->validate([
            'user_data' => 'required|string',
            'file' => 'required|file|max:2048', // Max file size is 2MB
        ]);
    
        // Store File
        if ($request->file('file')->isValid()) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName, 'public');
    
            // Save to Database
            UserFile::create([
                'user_data' => $request->user_data,
                'file_name' => $fileName,
                'file_path' => $filePath,
            ]);
    
            return back()->with('success', 'File uploaded successfully!');
        }
    
        return back()->withErrors(['File upload failed']);
    }

}