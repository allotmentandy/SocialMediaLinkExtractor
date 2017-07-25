# SMLE - Social Media Link Extractor (smile) :)

My first package!

The idea is to create a nice easy way to extract the social media links from an array of links. For use in my webspider

## to install

add 

composer require allotmentandy/socialmedialinkextractor


## to use with laravel

```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use allotmentandy\SocialMediaLinkExtractor\SocialMediaLinkExtractorController;

class HomeController extends Controller
{
    public function index()
    {
        $smle = new SocialMediaLinkExtractorController;
        $linkArray = ["http", "http2", "http://twitter.com/andy", "http://www.twitter.com/londiniumcom", "http://www.facebook.com"];
        echo $smle->countLinks($linkArray);
        echo "<hr>";
        echo $smle->getTwitter($linkArray);
        echo "<hr>";
        echo $smle->getFacebook($linkArray);
    }
}
```



### original idea from here

https://github.com/fluquid/extract-social-media/blob/master/src/extract_social_media/__init__.py


### Followed this tutorial for the basics of the package

https://medium.com/laravelapps/laravel-package-development-step-by-step-guide-743d9e5e076e
