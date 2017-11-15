# [Eporner](https://www.eporner.com/)

Eporner is one of the largest adult video HD porn tube. It has over 1M videos with qualities up to 4K.

## [API](https://www.eporner.com/api/)

We have published our API for webmasters who want to publish our videos on their sites. Our API is based on well-known XML language and should be really simple to implement. We also prepared some examples in PHP to make it easiest for you.

### XML Schema
```
<eporner-data>
<movie>
<id>id of video</id>
<sid>string id of video</id>
<title>title of the video</title>
<keywords>keywords</keywords>
<views># of views</views>
<loc>URL to watch page</loc>
<imgthumb>URL thumbnail with standard preview</imgthumb>
<imgthumb320x240>URL thumbnail with 320x240px preview</imgthumb320x240>
<added>add date (UNIX timestamp)</added>
<added2>add date (YYYY-MM-DD HH:MM format)</added2>
<lenghtsec>lenght of videoin seconds</lenghtsec>
<lenghtmin>lenght of video id MM:SS format</lenghtmin>
<embed>embed code to put player on your website</embedscript>
</movie>
</eporner-data>

```

### XML address

URL scheme looks like this:
```https://www.eporner.com/api_xml/KEYWORDS/NUMBER_OF_VIDEOS```

Where KEYWORDS are the keywords of the videos you like to display eg. "brunette", "teen" OR "all" you you want to display all videos.

NUMBER_OF_VIDEOS is number of videos you would like to display on your site. For example 5, 10, 15, 30

Sample URLs:

```https://www.eporner.com/api_xml/all/5```

```https://www.eporner.com/api_xml/anal/10```

```https://www.eporner.com/api_xml/girlfriend/45```

If you want to get all videos list try this (filesize is over 50MB) :
```https://www.eporner.com/api_xml/all/1000000```

### PHP Examples

List of last 5 videos with thumbnails:

Source code:
https://github.com/eporner/API/blob/master/examples/api_example2.php

Preview:
```https://www.eporner.com/api_example2```



Last 5 videos with embed watch code:

Source code:
https://github.com/eporner/API/blob/master/examples/api_example1.php

Preview:
```https://www.eporner.com/api_example1```

### Popular videos

Popular videos scheme:

```https://www.eporner.com/api_xml/popular/NUMBER_OF_VIDEOS/```


Where NUMBER_OF_VIDEOS is number of videos you would like to display on your site. For example 5, 10, 15, 30. Max for popular videos is 32.

### Advanced URL scheme

Advanced URL scheme:

```https://www.eporner.com/api_xml/KEYWORDS/NUMBER_OF_VIDEOS/START_FROM/ORDER_BY```


Where KEYWORDS are the keywords of the videos you like to display eg. "brunette", "teen" OR "all" you you want to display all videos
NUMBER_OF_VIDEOS is number of videos you would like to display on your site. For example 5, 10, 15, 30
START_FROM is the number of videos you would like to skip from the beginning of list
ORDER_BY is videos sorting. Currently supported "adddate" and "id". Videos sorted by "adddate" will change every database update. Videos sorted by "id" will be always the same.

Sample advanced URLs:

```https://www.eporner.com/api_xml/all/10/0/id```

```https://www.eporner.com/api_xml/all/10/5/id```

```https://www.eporner.com/api_xml/blowjob/5/10/adddate```

```https://www.eporner.com/api_xml/anal/15/0/adddate```


#### Enjoy coding !