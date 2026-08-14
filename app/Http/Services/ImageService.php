<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ImageService {
    // resize, qulity, convert image

    public function uploadImage(array $data, string $oldImage = null) {
        $file      = $data['img'];
        $imageName = uniqid() . '.webp';

        $oriPath  = storage_path('app/public/back/');
        $thumbPath = storage_path('app/public/back/thumbnail/');

        if (!file_exists($oriPath) || !file_exists($thumbPath)) {
        mkdir($oriPath, 0755, true);
        mkdir($thumbPath, 0755, true);
        } elseif (!file_exists($oriPath) || !file_exists($thumbPath)) {

        }

        $intervention = new ImageManager(new Driver);

        //  generate main image
        $intervention->read($file)->scale(width: 900)->toWebp(100)->save($oriPath . $imageName);
        $intervention->read($file)->scale(width: 300)->toWebp(100)->save($thumbPath . $imageName);

        // delete oldImage
        if ($oldImage) {
            Storage::disk('public')->delete([
                'back/' . $oldImage,
                'thumbnail/' . $oldImage
            ]);
        }

        $data['img'] = $imageName;

        return $data['img'];
    }
}
