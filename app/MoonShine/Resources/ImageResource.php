<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\AdImage;
use Illuminate\Database\Eloquent\Model;


use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;


class ImageResource extends ModelResource
{
    protected string $model = AdImage::class;

    protected string $title = 'Images';

    public string $column = 'name';


    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
//                Image::make('name')->disk('public'),
                Image::make('name', 'name')
                    ->dir('/') // Директория где будут хранится файлы в storage (по умолчанию /)
                    ->disk('public') // Filesystems disk
                    ->allowedExtensions(['jpg', 'gif', 'png'])
            ]),
        ];
    }

    /**
     * @param Image $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
