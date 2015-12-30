<?php namespace Petfinder\Prefectures;

class Prefectures
{

    
/**
         * $prefecture object.
         */
        protected $prefecture;


    /**
     * Initialize prefectures facade.
     *
     * @param type \Petfinder\Prefectures\Interfaces\PrefecturesRepositoryInterface $prefectures
     * @return none
     *
     */    public function __construct(
\Petfinder\Prefectures\Interfaces\PrefectureRepositoryInterface $prefecture, NULL)
    {
        
$this->prefecture     = $prefecture;

    }

    /**
     * Returns count of prefectures
     *
     * @param array $filter
     *
     * @return integer
     */
    public function count()
    {
        return  0;
    }

}
