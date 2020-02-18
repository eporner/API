# [Eporner](https://www.eporner.com/)

Eporner is one of the largest adult video HD porn tube. It has over 3.000.000 videos with qualities up to 4K.

## [API v2](https://www.eporner.com/api/v2/)

We have published our API for webmasters who want to publish our videos on their sites. Our API is RESTfull, return results in JSON or XML and should be really simple to implement. We also prepared some examples in PHP to make it easiest for you.

### Quick start
All API calls must be made using HTTP GET to the following endpoint:

```https://www.eporner.com/api/v2/video/METHOD/```

Where METHOD can be:

```search```

Allow you to get video list matching your criteria. Please note that list will be paginated with no more than 1000 per page. To get more results you will have to make consecutive calls to the next pages.

```id```

Allow you to get information about one specific video identified by id. It can be also used to check if given video is still alive.

```removed```

Return list of all removed video ids.




### Full documentation

Your can find full documentation of each of our API calls and responses on the official [Eporner API Documentation](https://www.eporner.com/api/v2/)

### PHP Examples

Example #1: Fetch latest 50 videos videos tagged as anal:

Source code:
https://github.com/eporner/API/blob/master/examples/php_example_1.php


Example #2: Fetch all videos with big thumbnails ordered by most popular:

Source code:
https://github.com/eporner/API/blob/master/examples/php_example_2.php


Example #3: Fetch information about single video by id:

Source code:
https://github.com/eporner/API/blob/master/examples/php_example_3.php


#### Enjoy coding !