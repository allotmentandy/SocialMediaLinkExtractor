<?php
namespace allotmentandy\socialmedialinkextractor;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SocialMediaLinkExtractorController extends Controller
{
    public function countLinks($array)
    {
        return sizeof($array);
    }

    public function getTwitter($array)
    {
        foreach ($array as $link) {
            if (strpos($link, "http://twitter.com/intent/") != false) {
                continue;
            }
            if (strpos($link, "http://twitter.com/i/") != false) {
                continue;
            }
            if ($link == "http://www.twitter.com/") {
                continue;
            }
            if ($link == "http://www.twitter.com/twitter") {
                continue;
            }
            if (strpos($link, "/status/") != false) {
                continue;
            }
            if (strpos($link, "?") != false) {
                continue;
            }
            if (substr($link, 0, 4) != "http") {
                continue;
            }



            if (strpos($link, "twitter.com") !== false) {
                return $link;
            }
        }
    }

    public function getFacebook($array)
    {
        foreach ($array as $link) {
            if (substr($link, 0, 4) != "http") {
                continue;
            }

            if (strpos($link, "facebook.com") !== false) {
                return $link;
            }
        }
    }

    public function getInstagram($array)
    {
        foreach ($array as $link) {
            if (substr($link, 0, 4) != "http") {
                continue;
            }
            if (strpos($link, "instagram.com") !== false) {
                return $link;
            }
        }
    }

    public function getYoutube($array)
    {
        foreach ($array as $link) {
            if (substr($link, 0, 4) != "http") {
                continue;
            }
            if (strpos($link, "youtube.com") !== false) {
                return $link;
            }
        }
    }

    public function getLinkedin($array)
    {
        foreach ($array as $link) {
            if (substr($link, 0, 4) != "http") {
                continue;
            }
            if (strpos($link, "linkedin.com") !== false) {
                return $link;
            }
        }
    }

    public function getGoogle($array)
    {
        foreach ($array as $link) {
            if (substr($link, 0, 4) != "http") {
                continue;
            }
            if (strpos($link, "plus.google.com") !== false) {
                return $link;
            }
        }
    }

    public function getPinterest($array)
    {
        foreach ($array as $link) {
            if (substr($link, 0, 4) != "http") {
                continue;
            }
            if (strpos($link, "pinterest.com") !== false) {
                return $link;
            }
        }
    }

    public function getGithub($array)
    {
        foreach ($array as $link) {
            if (substr($link, 0, 4) != "http") {
                continue;
            }
            if (strpos($link, "github.com") !== false) {
                return $link;
            }
        }
    }

    public function getFlickr($array)
    {
        foreach ($array as $link) {
            if (substr($link, 0, 4) != "http") {
                continue;
            }
            if (strpos($link, "flickr.com") !== false) {
                return $link;
            }
        }
    }

    public function getTumblr($array)
    {
        foreach ($array as $link) {
            if (substr($link, 0, 4) != "http") {
                continue;
            }
            if (strpos($link, "tumblr.com") !== false) {
                return $link;
            }
        }
    }
}
