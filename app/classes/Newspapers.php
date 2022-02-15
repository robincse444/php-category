<?php


namespace App\classes;


class Newspapers
{

    protected $allNews;
    protected $result = [];
    public function index()
    {
        return [
            0=> [
                'id' => 1,
                'news_id' => 1,
                'name' => 'bangladesh',
                'description' => 'Nice news',
                'image' => 'assets/img/h1.jpg'
            ],
            1=> [
                'id' => 2,
                'news_id' => 1,
                'name' => 'bangladesh',
                'description' => 'Nice news',
                'image' => 'assets/img/h2.jpg'
            ],
            2=> [
                'id' => 3,
                'news_id' => 2,
                'name' => 'World',
                'description' => 'Nice news',
                'image' => 'assets/img/h6.jpg'
            ],
            3=> [
                'id' => 3,
                'news_id' => 2,
                'name' => 'World',
                'description' => 'Nice news',
                'image' => 'assets/img/h5.jpg'
            ],
            4=> [
                'id' => 4,
                'news_id' => 3,
                'name' => 'Business',
                'description' => 'Nice news ',
                'image' => 'assets/img/b1.jpg'
            ],
            5=> [
                'id' => 5,
                'news_id' => 3,
                'name' => 'Business',
                'description' => 'Nice news',
                'image' => 'assets/img/b2.jpg'
            ],
        ];
    }

    public function shortNewspapers ($newspapersId)
    {
        $this->allNews = $this->index();

        foreach ($this->allNews as $newspaper)
        {
            if ($newspaper['news_id'] == $newspapersId)
            {
                array_push($this->result, $newspaper);
            }
        }
        return $this->result;
    }
    public function getNewsDetails($newspaperId)
    {
        $this->allNews = $this->index();
        foreach ($this->allNews as $newspaper)
        {
            if ($newspaper['id'] == $newspaperId)
            {
                return $newspaper;
            }
        }
    }

}
