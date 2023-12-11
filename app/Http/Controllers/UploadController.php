<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use App\Models\Upload;

class UploadController extends BaseController
{
    public function index()
    {
        $uploads = Upload::where('user_id', $this->getUserId())->get();
        return view('home.index', compact('uploads'));
    }

    public function create()
    {
        return view('upload.create');
    }

    public function store(UploadRequest $request)
    {
        $uploadData = $request->validated();
        $uploadData['user_id'] = $this->getUserId();

        Upload::create($uploadData);

        return $this->redirectWithSuccess('home.index', 'Upload created successfully.');
    }

    public function edit(Upload $upload)
    {
        return view('upload.edit',compact('upload'));
    }

    public function update(UploadRequest $request, Upload $upload)
    {
        $upload->update($request->validated());

        return $this->redirectWithSuccess('home.index','Upload updated successfully');
    }

    public function destroy(Upload $upload)
    {
        $upload->delete();

        return $this->redirectWithSuccess('home.index','upload deleted successfully');
    }
}
