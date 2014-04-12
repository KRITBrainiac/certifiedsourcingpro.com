<?php

require_once('NingObject.php');

class NingPhoto extends NingObject {

    protected $objectKey = 'Photo';

    protected $extraFields = array(
        'title',
        'description',
        'url',
        'imageUrl',
        'imageId',
        'imageWidth',
        'imageHeight',
        'imageRotation',
        'featureTime',
        'slug',
        'tagNames',
        'categoryNames',
        'author.fullName',
        'author.url',
        'author.iconUrl'
        );

}