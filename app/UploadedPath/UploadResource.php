<?php
/**
 * Created by PhpStorm.
 * User: HOME
 * Date: 22.06.2018
 * Time: 10:05
 */

namespace App;

use Illuminate\Http\Request;


class UploadResource
{
    public static function pathToUpload(Request $request)
    {

        $file = $request->file('path');
        $mimeType = $file->getMimeType();
        $user_email = ($request->email);

        if ($mimeType == 'image/jpeg') {
            return $pathToUpload = '/resource/' . $user_email . '/images/';
        } else {
            return 'error.';
        }
    }
}