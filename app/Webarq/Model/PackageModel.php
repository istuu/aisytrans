<?php

namespace App\Webarq\Model;


use Webarq\Model\AbstractListingModel;

class PackageModel extends AbstractListingModel
{
    protected $table = 'packages';

    public function categories(){
        return $this->belongsTo('App\Webarq\Model\CategoryModel','category_id');
    }

    public function locations(){
        return $this->belongsTo('App\Webarq\Model\LocationModel','location_id');
    }
}
