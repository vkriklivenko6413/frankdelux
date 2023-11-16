<?php

namespace App\Http\Controllers\Admin\Review;

use App\Http\Controllers\Controller;
use App\Models\Block\BlockThree;
use App\Models\Review;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\View\View;

class ReviewController extends Controller
{
    public function list(): View
    {
        $reviews = Review::query()->get();

        return view('admin.review.list', compact('reviews'));
    }

    public function add()
    {
        return view('admin.review.add');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title_ru' => 'required',
            'title_ro' => 'required',
            'description_ru' => 'required',
            'description_ro' => 'required',
            'photo' => 'nullable',
            'rating' => 'required',
            'avatar' => 'required',
        ]);

        $row = [
            'name' => [
                'ru' => $data['title_ru'],
                'ro' => $data['title_ro'],
            ],
            'description' => [
                'ru' => $data['description_ru'],
                'ro' => $data['description_ro'],
            ],
            'photo' => $this->uploadPhoto($request->photo),
            'avatar' => $this->uploadPhoto($request->avatar),
            'rating' => $data['rating']
        ];

        Review::query()->create($row);

        return redirect()->back()->with('success','Успех');
    }

    public function edit($id): View
    {
        $review = Review::query()->where('id','=',$id)->first();

        return view('admin.review.edit', compact('review'));
    }

    public function change($id)
    {

    }

    public function delete($id): RedirectResponse
    {
        Review::query()->where('id','=',$id)->delete();

        return redirect()->back()->with('success','Успех');
    }

    private function uploadPhoto(?UploadedFile $photo): ?string
    {
        if ($photo === null) {
            return null;
        }

        $uploadFolder = 'public/block';

        $previewPhotoFilename = $photo->store($uploadFolder);
        $previewPhotoFilename = str_replace($uploadFolder . '/', '', $previewPhotoFilename);

        return $previewPhotoFilename;
    }
}
