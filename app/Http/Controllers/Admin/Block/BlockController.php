<?php

namespace App\Http\Controllers\Admin\Block;

use App\Http\Controllers\Controller;
use App\Models\Block\BlockFour;
use App\Models\Block\BlockOne;
use App\Models\Block\BlockThree;
use App\Models\Block\BlockTwo;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\View\View;

class BlockController extends Controller
{
    public function blockOne(): View
    {
        $blockOne = BlockOne::query()->find(1);

        return view('admin.block.blockone', compact('blockOne'));
    }

    public function blockFour(): View
    {
        $blockFour = BlockFour::query()->find(1);

        return view('admin.block.blockfour', compact('blockFour'));
    }

    public function blockTwo(): View
    {
        $blockTwo = BlockTwo::query()->find(1);

        return view('admin.block.blocktwo', compact('blockTwo'));
    }

    public function blockThree(): View
    {
        $blockThree = BlockThree::query()->find(1);

        return view('admin.block.blockthree', compact('blockThree'));
    }

    public function updateBlockThree(Request $request, $id)
    {
        $data = $request->validate([
            'title_ru' => 'required',
            'title_ro' => 'required',
            'description_ru' => 'required',
            'description_ro' => 'required',
            'photo' => 'nullable',
        ]);


        $blockThree = BlockThree::query()->findOrFail($id);

        $row = [
            'title' => [
                'ru' => $data['title_ru'],
                'ro' => $data['title_ro'],
            ],
            'description' => [
                'ru' => $data['description_ru'],
                'ro' => $data['description_ro'],
            ],
            'photo' => $this->uploadPhoto($request->photo) ?? $blockThree->photo
        ];


        $blockThree->update($row);

        return redirect()->back()->with('success', 'Успех');
    }


    public function updateBlockTwo(Request $request, $id)
    {
        $data = $request->validate([
            'title_ru' => 'required',
            'title_ro' => 'required',
            'description_2_ru' => 'required',
            'description_2_ro' => 'required',
            'description_1_ru' => 'required',
            'description_1_ro' => 'required',
            'description_3_ru' => 'required',
            'description_3_ro' => 'required',
            'preview_title_2_ru' => 'required',
            'preview_title_2_ro' => 'required',
            'preview_title_1_ru' => 'required',
            'preview_title_1_ro' => 'required',
            'preview_title_3_ru' => 'required',
            'preview_title_3_ro' => 'required',
        ]);


        $blockTwo = BlockTwo::query()->findOrFail($id);

        $row = [
            'title' => [
                'ru' => $data['title_ru'],
                'ro' => $data['title_ro'],
            ],
            'description_1' => [
                'ru' => $data['description_1_ru'],
                'ro' => $data['description_1_ro'],
            ],
            'description_2' => [
                'ru' => $data['description_2_ru'],
                'ro' => $data['description_2_ro'],
            ],
            'description_3' => [
                'ru' => $data['description_3_ru'],
                'ro' => $data['description_3_ro'],
            ],

            'preview_title_1' => [
                'ru' => $data['preview_title_1_ru'],
                'ro' => $data['preview_title_1_ro'],
            ],

            'preview_title_2' => [
                'ru' => $data['preview_title_2_ru'],
                'ro' => $data['preview_title_2_ro'],
            ],

            'preview_title_3' => [
                'ru' => $data['preview_title_3_ru'],
                'ro' => $data['preview_title_3_ro'],
            ],

        ];

        $blockTwo->update($row);

        return redirect()->back()->with('success', 'Успех');
    }

    public function updateBlockOne(Request $request, $id)
    {
        $data = $request->validate([
            'title_ru' => 'required',
            'title_ro' => 'required',
            'description_ru' => 'required',
            'description_ro' => 'required',
            'button_ru' => 'required',
            'button_ro' => 'required',
            'photo' => 'nullable',
        ]);


        $blockOne = BlockOne::query()->findOrFail($id);

        $row = [
            'title' => [
                'ru' => $data['title_ru'],
                'ro' => $data['title_ro'],
            ],
            'description' => [
                'ru' => $data['description_ru'],
                'ro' => $data['description_ro'],
            ],
            'button' => [
                'ru' => $data['button_ru'],
                'ro' => $data['button_ro'],
            ],
            'photo' => $this->uploadPhoto($request->photo) ?? $blockOne->photo
        ];


        $blockOne->update($row);

        return redirect()->back()->with('success', 'Успех');

    }


    public function updateBlockFour(Request $request, $id)
    {
        $data = $request->validate([
            'title_ru' => 'required',
            'title_ro' => 'required',
            'description_ru' => 'required',
            'description_ro' => 'required',
            'button_ru' => 'required',
            'button_ro' => 'required',
            'photo' => 'nullable',
        ]);


        $blockFour = BlockFour::query()->findOrFail($id);

        $row = [
            'title' => [
                'ru' => $data['title_ru'],
                'ro' => $data['title_ro'],
            ],
            'description' => [
                'ru' => $data['description_ru'],
                'ro' => $data['description_ro'],
            ],
            'button' => [
                'ru' => $data['button_ru'],
                'ro' => $data['button_ro'],
            ],
            'photo' => $this->uploadPhoto($request->photo) ?? $blockFour->photo
        ];


        $blockFour->update($row);

        return redirect()->back()->with('success', 'Успех');

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
