<?php

namespace Vsynch\ActivityTracking\Traits;


trait Trackable
{
    /**
     * Upload a single file in the server
     * and return the random (string) filename if successful and (boolean) false if not
     *
     * @param UploadedFile $file
     * @param null $folder
     * @param string $disk
     * @return false|string
     */
    public function activities()
    {
        return $this->morphMany('Vsynch\ActivityTracking\Models\UserActivity', 'trackable');
    }
}
