<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';

    protected $fillable = [
        'image',
        'name_ru',
        'name_uz',
        'slug_ru',
        'slug_uz',
        'job_title_ru',
        'job_title_uz',
        'phone',
        'email',
        'description_ru',
        'description_uz',
    ];

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/team/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/team/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $team): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $team->image)) {
                File::delete(public_path() . $team->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/team/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/team/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $team->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/team/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/team/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
