<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class PageIn extends Model
{
    use HasFactory;

    protected $table = 'page_ins';

    protected $fillable = [
        'icon',
        'image',
        'title_ru',
        'title_uz',
        'content_ru',
        'content_uz'
    ];

    public static function uploadIcon($request): ?string
    {
        if ($request->hasFile('icon')) {

            self::checkDirectory();

            $request->file('icon')
                ->move(
                    public_path() . '/upload/icon/' . date('d-m-Y'),
                    $request->file('icon')->getClientOriginalName()
                );
            return '/upload/icon/' . date('d-m-Y') . '/' . $request->file('icon')->getClientOriginalName();
        }

        return null;
    }

    public static function updateIcon($request, $page_in): string
    {
        if ($request->hasFile('icon')) {
            if (File::exists(public_path() . $page_in->icon)) {
                File::delete(public_path() . $page_in->icon);
            }

            self::checkDirectory();

            $request->file('icon')
                ->move(
                    public_path() . '/upload/icon/' . date('d-m-Y'),
                    $request->file('icon')->getClientOriginalName()
                );
            return '/upload/icon/' . date('d-m-Y') . '/' . $request->file('icon')->getClientOriginalName();
        }

        return $page_in->icon;
    }


    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/page_in/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/page_in/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $page_in): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $page_in->image)) {
                File::delete(public_path() . $page_in->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/page_in/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/page_in/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $page_in->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/page_in/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/page_in/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
