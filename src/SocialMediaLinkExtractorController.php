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
            if (strlen($link) > 254) {
                continue;
            }
            if (strpos($link, "http://twitter.com/intent/") != false) {
                continue;
            }
            if (strpos($link, "http://twitter.com/i/") != false) {
                continue;
            }
            if ($link == "http://www.twitter.com/") {
                continue;
            }
            if ($link == "https://twitter.com/") {
                continue;
            }
            if ($link == "http://www.twitter.com") {
                continue;
            }
            if ($link == "http://www.twitter.com/#") {
                continue;
            }
            if ($link == "http://twitter.com/") {
                continue;
            }
            if ($link == "http://twitter.com") {
                continue;
            }
            if ($link == "http://www.twitter.com/twitter") {
                continue;
            }
            if ($link == "https://twitter.com/twitter") {
                continue;
            }
            if ($link == "https://twitter.com/share") {
                continue;
            }
            if ($link == "https://twitter.com") {
                continue;
            }
            if ($link == "https://twitter.com/twitterapi") {
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
            if (strlen($link) > 254) {
                continue;
            }
            if (substr($link, 0, 4) != "http") {
                continue;
            }
            if (strpos($link, "https://www.facebook.com/sharer") != false) {
                continue;
            }
            if ($link == "http://www.facebook.com") {
                continue;
            }
            if ($link == "http://www.facebook.com/") {
                continue;
            }
            if ($link == "https://www.facebook.com") {
                continue;
            }
            if ($link == "https://www.facebook.com/") {
                continue;
            }
            if ($link == "https://facebook.com") {
                continue;
            }
            if ($link == "https://facebook.com/") {
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
            if (strlen($link) > 254) {
                continue;
            }
            if (substr($link, 0, 4) != "http") {
                continue;
            }
            if ($link == "https://instagram.com") {
                continue;
            }
            if ($link == "https://instagram.com/") {
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
            if (strlen($link) > 254) {
                continue;
            }
            if (substr($link, 0, 4) != "http") {
                continue;
            }
            if (strpos($link, "http://www.youtube.com/watch?") != false) {
                continue;
            }
            if ($link == "https://youtube.com") {
                continue;
            }
            if (strpos($link, "https://www.youtube.com/embed/") != false) {
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
            if (strlen($link) > 254) {
                continue;
            }
            if (substr($link, 0, 4) != "http") {
                continue;
            }
            if (strpos($link, "https://www.linkedin.com/shareArticle") != false) {
                continue;
            }
            if ($link == "http://linkedin.com") {
                continue;
            }
            if ($link == "http://www.linkedin.com/") {
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
            if (strlen($link) > 254) {
                continue;
            }
            if (substr($link, 0, 4) != "http") {
                continue;
            }
            if (strpos($link, "https://plus.google.com/share") != false) {
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
            if (strlen($link) > 254) {
                continue;
            }            
            if (substr($link, 0, 4) != "http") {
                continue;
            }
            if (strpos($link, "https://pinterest.com/pin/create/") != false) {
                continue;
            }
            if (strpos($link, "https://www.pinterest.com/pin/create/button/") != false) {
                continue;
            }
            if (strpos($link, "http://pinterest.com/pin/create/") != false) {
                continue;
            }
            if (strpos($link, "https://www.pinterest.com/pin/create") != false) {
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
            if (strlen($link) > 254) {
                continue;
            }            
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
            if (strlen($link) > 254) {
                continue;
            }            
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
            if (strlen($link) > 254) {
                continue;
            }
            if (substr($link, 0, 4) !== "http") {
                continue;
            }
            if (strpos($link, "https://www.tumblr.com/share") !== false) {
                continue;
            }
            if (strpos($link, "http://www.tumblr.com/share/") !== false) {
                continue;
            }
            if (strpos($link, "http://tumblr.com/widgets/share/") !== false) {
                continue;
            }
            if (strpos($link, "http://www.tumblr.com/widgets/share/") !== false) {
                continue;
            }
            if (strpos($link, "tumblr.com") !== false) {
                return $link;
            }
        }
    }

    public function getTiktok($array)
    {
        foreach ($array as $link) {
            if (strlen($link) > 254) {
                continue;
            }
            if (substr($link, 0, 4) != "http") {
                continue;
            }
            if (strpos($link, "tiktok.com") !== false) {
                return $link;
            }
        }
    }





    public function getRss($array)
    {
        foreach ($array as $link) {
            if (substr($link, -4) != ".rss") {
                continue;
            }
            if (substr($link, -5) != ".atom") {
                continue;
            }
            if (substr($link, -4) != ".xml") {
                continue;
            }
            if (substr($link, -5) != "/feed") {
                continue;
            }
            if (substr($link, -6) != "/feed/") {
                continue;
            }
            if (substr($link, -3) != "rss") {
                continue;
            }

            return $link;
        }
    }
}
