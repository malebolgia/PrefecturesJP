<?php

return [
/**
* Provider .
*/
'provider'  => 'petfinder',

/**
* Package .
*/
'package'   => 'prefectures',

/**
* Modules .
*/
'modules'   => [
'prefecture',],


'prefecture' => [
                    'Name'          => 'Prefecture',
                    'name'          => 'prefecture',
                    'table'         => 'prefectures',
                    'model'         => 'Petfinder\Prefectures\Models\Prefecture',
                    'image'         =>
                        [
                        'xs'        => ['width' =>'60',     'height' =>'45'],
                        'sm'        => ['width' =>'100',    'height' =>'75'],
                        'md'        => ['width' =>'460',    'height' =>'345'],
                        'lg'        => ['width' =>'800',    'height' =>'600'],
                        'xl'        => ['width' =>'1000',   'height' =>'750'],
                        ],

                    'fillable'          =>  ['user_id', 'id',            'title',            'status',            'deleted',            'created_at',            'updated_at',],
                    'listfields'        =>  ['id', 'id',            'title',            'status',            'deleted',            'created_at',            'updated_at',],
                    'translatable'      =>  ['id',            'title',            'status',            'deleted',            'created_at',            'updated_at',],

                    'upload-folder'     =>  '/uploads/prefectures/prefecture',
                    'uploadable'        =>  [
                                                'single' => [],
                                                'multiple' => []
                                            ],
                ],


];
