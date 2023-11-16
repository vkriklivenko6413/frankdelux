<?php

namespace App\Http\Controllers\Admin\Card;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\CardDescription;
use App\Models\CardGallery;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Validation\Rule;
use Ramsey\Collection\Collection;

class CardController extends Controller
{
    public function list()
    {
        $cards = Card::query()->orderBy('integer')->get();

        return view('admin.card.list', compact('cards'));
    }


    public function moveDown($id)
    {
        $card = Card::find($id);

        // Найти следующую запись с меньшим значением integer
        $nextCard = Card::where('integer', '>', $card->integer)
            ->orderBy('integer')
            ->first();

        if ($nextCard) {
            // Поменять местами значения integer текущей и следующей записей
            $tempInteger = $card->integer;
            $card->integer = $nextCard->integer;
            $nextCard->integer = $tempInteger;

            $card->save();
            $nextCard->save();
        }

        return redirect()->back();


    }

    public function moveUp($id)
    {
        $card = Card::find($id);

        // Найти предыдущую запись с большим значением integer
        $prevCard = Card::where('integer', '<', $card->integer)
            ->orderByDesc('integer') // Используйте orderByDesc для упорядочивания в убывающем порядке
            ->first();

        if ($prevCard) {
            // Поменять местами значения integer текущей и предыдущей записей
            $tempInteger = $card->integer;
            $card->integer = $prevCard->integer;
            $prevCard->integer = $tempInteger;

            $card->save();
            $prevCard->save();
        }

        return redirect()->back();
    }


    public function create()
    {
        return view('admin.card.create');
    }

    public function edit($id)
    {
        $card = Card::query()
            ->with([
                'galleries',
            ])
            ->findOrFail($id);

        $cardFields = $card->descriptions;

        // compact('card', 'cardFields')

        return view('admin.card.edit', [
            'card' => $card,
        ]);
    }

    public function change(Request $request, Card $card)
    {
        $data = $request->validate([
            'preview_photo' => 'nullable|file|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'photos' => ['sometimes', 'nullable', 'array'],
            'photos.*' => 'required|file|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'title' => ['sometimes', 'nullable', 'array'],
            'title.*' => ['nullable', 'string'],
            'description' => ['sometimes', 'nullable', 'array'],
            'description.*' => ['nullable', 'string'],
            'remove_images' => ['sometimes', 'nullable', 'array'],
            'remove_images.*' => [
                'required',
                'string',
                Rule::exists('card_galleries', 'photo')
                    ->where('card_id', $card->id),
            ],
        ]);


        if ($preview = $request->file('preview_photo')) {
            $previewPhotoFilename = $preview->store('public/card');
            $previewPhotoFilename = str_replace('public/card' . '/', '', $previewPhotoFilename);

            $data['preview_photo'] = $previewPhotoFilename;
        }

        $card
            ->update(
                collect($data)
                    ->except('card', 'photos')
                    ->toArray(),
            );

        $photos = collect($data['photos'] ?? []);

        if ($photos->isNotEmpty()) {
            $photos
                ->each(function (UploadedFile $file) use ($card): void {
                    $photo = $file->store('public/card');
                    $photo = str_replace('public/card' . '/', '', $photo);

                    $card
                        ->galleries()
                        ->create([
                            'photo' => $photo,
                        ]);
                });
        }

        if (! empty($data['remove_images'])) {
            $card
                ->galleries()
                ->whereIn('photo',  $data['remove_images'])
                ->delete();
        }


        return redirect()->back()->with('success', 'Карточка успешно обновлена');
    }

    public function copy(Card $card): RedirectResponse
    {
        $newCard = $card
            ->replicate();

        $newCard->save();

        $card->load([
            'galleries',
            'descriptions'
        ]);

        $card
            ->galleries
            ->each(function (CardGallery $gallery) use ($newCard): void {
                $newCard
                    ->galleries()
                    ->create([
                        'photo' => $gallery->photo,
                    ]);
            });

        $card
            ->descriptions
            ->each(function (CardDescription $description) use ($newCard): void {
                $newCard
                    ->descriptions()
                    ->create([
                        'title' => $description->title,
                        'description' => $description->description,
                        'size' => $description->size,
                    ]);
            });

        return redirect()
            ->route('admin.card.edit', $newCard->id)
            ->with('success', 'Новая карточка готова к редактированию!');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'preview_photo' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'title_ru' => 'required',
            'title_uk' => 'required',
            'description_ru' => 'required',
            'description_uk' => 'required',
            'photos' => 'required',
        ]);



        $previewPhotoFilename = $request->preview_photo->store('public/card');
        $previewPhotoFilename = str_replace('public/card' . '/', '', $previewPhotoFilename);

        $data['preview_photo'] = $previewPhotoFilename;
        $data['integer'] = rand(000,999);

        $data['title'] = [
            'ru' => $data['title_ru'],
            'ro' => $data['title_uk']
        ];

        $data['description'] = [
            'ru' => $data['description_ru'],
            'ro' => $data['description_uk']
        ];

        $card = Card::query()->create($data);

        if ($request->hasFile('photos')) {
            $data = [];

            foreach ($request->file('photos') as $photo) {
                $photoPath = $photo->store('public/card');
                $photoFilename = str_replace('public/card/', '', $photoPath);

                $data[] = ['photo' => $photoFilename];
            }

            $card->galleries()->createMany($data);
        }

        return redirect()->back()->with('success', 'Карточка успешно создана');
    }

    public function delete($id)
    {
        Card::query()->where('id', $id)->delete();

        return redirect()->back()->with('success', 'Карточка успешно удалена');
    }


    public function cardActiveStatus($id)
    {
        $card = Card::where('id', $id)->firstOrFail();

        $card->update(['active' => !$card->active]);

        return response()->json(['status' => 'success']);
    }

    public function cardDisableStatus($id)
    {
        $card = Card::where('id', $id)->firstOrFail();

        $card->update(['disable' => !$card->disable]);

        return response()->json(['status' => 'success']);
    }

}
