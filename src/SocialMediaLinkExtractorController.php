<?php
namespace allotmentandy\SocialMediaLinkExtractor;

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
            if (strpos($link, "twitter.com") !== false) {
                return $link;
            }
        }
    }

    public function getFacebook($array)
    {
        foreach ($array as $link) {
            if (strpos($link, "facebook.com") !== false) {
                return $link;
            }
        }
    }

    public function getInstagram($array)
    {
        foreach ($array as $link) {
            if (strpos($link, "instagram.com") !== false) {
                return $link;
            }
        }
    }

    public function getYoutube($array)
    {
        foreach ($array as $link) {
            if (strpos($link, "youtube.com") !== false) {
                return $link;
            }
        }
    }

    public function getLinkedin($array)
    {
        foreach ($array as $link) {
            if (strpos($link, "linkedin.com") !== false) {
                return $link;
            }
        }
    }

    public function getGoogle($array)
    {
        foreach ($array as $link) {
            if (strpos($link, "plus.google.com") !== false) {
                return $link;
            }
        }
    }

    public function getPinterest($array)
    {
        foreach ($array as $link) {
            if (strpos($link, "pinterest.com") !== false) {
                return $link;
            }
        }
    }

    public function getGithub($array)
    {
        foreach ($array as $link) {
            if (strpos($link, "github.com") !== false) {
                return $link;
            }
        }
    }

    public function getFlickr($array)
    {
        foreach ($array as $link) {
            if (strpos($link, "flickr.com") !== false) {
                return $link;
            }
        }
    }

    public function getTumblr($array)
    {
        foreach ($array as $link) {
            if (strpos($link, "tumblr.com") !== false) {
                return $link;
            }
        }
    }
}
