<?php
/**
 * Created by PhpStorm.
 * User: HOME
 * Date: 22.06.2018
 * Time: 10:05
 */

namespace App;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;


class UploadResource
{
    /*
     * Get path to upload file
     *
     * @return string
     */
    public static function pathToPreview($product){

        $img = Image::make(public_path() . '/images/product-foto-main/' . $product['img_path'])->resize(200, 300);
        $img->basename = $img->filename . '_W-200_' . ' H-200' . '.jpg';
        $pathToPreview =  $img->basename;
        $productPathPreview = str_replace(' ', '_', $product['model']);
        if (!file_exists(public_path('/images/product/preview/' . $productPathPreview))) {
            mkdir(public_path('/images/product/preview/' . $productPathPreview), 777, true);
        }
        $img->save(public_path('/images/product/preview/' . $productPathPreview . '/' . $img->basename));

        return $pathToPreview;
    }
}