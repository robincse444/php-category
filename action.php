<?php
require_once 'vendor/autoload.php';

use \App\classes\Newspaper;
use \App\classes\Newspapers;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'all-news')
    {
        $newspaper = new Newspaper();
        $newspapers = $newspaper->newspaper();
        $newspaper = new Newspapers();
        $newspapers = $newspaper->index();
        include 'pages/allNews.php';
    }
    elseif ($_GET['pages'] == 'newspaper-newspapers')
    {
        $newspaper = new Newspaper();
        $newspapers = $newspaper->newspaper();
        $newspaper = new Newspapers();
        $newspapers = $newspaper->shortNewspapers($_GET['news_id']);
        include 'pages/allNews.php';
    }
    elseif ($_GET['pages'] == 'news-details')
    {
        $newspaper = new Newspaper();
        $newspapers = $newspaper->newspaper();
        $newspaper = new Newspapers();
        $newsDetails = $newspaper->getNewsDetails($_GET['news_id']);
//        print_r($productDetails);
//        exit();
        include 'pages/newsDetails.php';
    }

}

