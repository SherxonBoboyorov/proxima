<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Efficiency extends Model
{
    use HasFactory;

    protected $table = 'efficiencies';

    protected $fillable = [
        'icon',
        'image',
        'title_ru',
        'title_uz',
        'content_ru',
        'content_uz',
        'statistic_ru',
        'statistic_uz',
        'statistic_content_ru',
        'statistic_content_uz'
    ];


    public static function uploadIcon($request): ?string
    {
        if ($request->hasFile('icon')) {

            self::checkDirectory();

            $request->file('icon')
                ->move(
                    public_path() . '/upload/efficiencyicon/' . date('d-m-Y'),
                    $request->file('icon')->getClientOriginalName()
                );
            return '/upload/efficiencyicon/' . date('d-m-Y') . '/' . $request->file('icon')->getClientOriginalName();
        }

        return null;
    }

    public static function updateIcon($request, $efficiency): string
    {
        if ($request->hasFile('icon')) {
            if (File::exists(public_path() . $efficiency->icon)) {
                File::delete(public_path() . $efficiency->icon);
            }

            self::checkDirectory();

            $request->file('icon')
                ->move(
                    public_path() . '/upload/efficiencyicon/' . date('d-m-Y'),
                    $request->file('icon')->getClientOriginalName()
                );
            return '/upload/efficiencyicon/' . date('d-m-Y') . '/' . $request->file('icon')->getClientOriginalName();
        }

        return $efficiency->icon;
    }


    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/efficiency/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/efficiency/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $efficiency): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $efficiency->image)) {
                File::delete(public_path() . $efficiency->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/efficiency/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/efficiency/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $efficiency->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/efficiency/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/efficiency/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
