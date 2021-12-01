<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class PhotoHandleService {

    private $config;

    public function config($config)
    {
        $this->config = $config;
    }


    public function handlePhoto(Request $request, Model $model, $mode = 'create')
    {
        if ($request->delete_photo) {
            $this->deleteOldPhoto($model);
            $model->photo = null;
            return;
        }

        if ($request->file($this->config.'_photo')) {
            $photo = $request->file($this->config.'_photo');
            $photoName = rand(10000000, 99999999);
            $photExt = $photo->getClientOriginalExtension();
            $photoName = $photoName.'.'.$photExt;
            $destinationPath = public_path() . '/img/'.$this->config;
            $photo->move($destinationPath, $photoName);
            if ('edit' == $mode && $model->photo) {
                $this->deleteOldPhoto($model);
            }
            $model->photo = asset('img/'.$this->config.'/'.$photoName);
        }
    }

    public function deleteOldPhoto(Model $model)
    {
        $oldPhoto = $model->photo;
        if (null === $oldPhoto) {
            return;
        }
        $oldPhoto = str_replace(asset(''), '', $oldPhoto);
        $oldPhoto = public_path() . '/'.$oldPhoto;
        if (file_exists($oldPhoto)) {
            unlink($oldPhoto);
        }
    }

}