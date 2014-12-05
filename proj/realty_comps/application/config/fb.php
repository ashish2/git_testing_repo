<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
|
| URL to your CodeIgniter root. Typically this will be your base URL,
| WITH a trailing slash:
|
|	http://example.com/
|
| If this is not set then CodeIgniter will guess the protocol, domain and
| path to your installation.
|
*/
$config['appId']	= '486040541424813';


/*
|--------------------------------------------------------------------------
| Index File
|--------------------------------------------------------------------------
|
| Typically this will be your index.php file, unless you've renamed it to
| something else. If you are using mod_rewrite to remove the page set this
| variable so that it is blank.
|
*/
$config['secret'] = '749e5acf15c560e4b29fad2bc2c329b0';
$config['cookie'] = true;
$config['oauth'] = true;
// $config['version'] = "v2.2";

$config['fileUpload'] = false; // optional
$config['allowSignedRequest'] = false; // optional, but should be set to false for non-canvas apps
$config['allow_get_array'] = true;



$config['userId'] = 653776779;
$config['user'] = (string) '{"id":"653776779","bio":"Diagonally opposite, \r\nElliptically centered, \r\nHyperbolically cornered & \r\nParabolically paranormal, \r\n\'puter programmer.","education":[{"school":{"id":"192565277439534","name":"St. Xaviers High School. Borivali"},"type":"High School","year":{"id":"144503378895008","name":"1999"}},{"concentration":[{"id":"153881114665017","name":"BCom"}],"school":{"id":"139045782779212","name":"Thakur College of Science and Commerce"},"type":"College","year":{"id":"113125125403208","name":"2004"}},{"concentration":[{"id":"211538778871129","name":"B.com."}],"school":{"id":"111950378821457","name":"University of Mumbai"},"type":"College","year":{"id":"113125125403208","name":"2004"}}],"email":"vickyojha2@yahoo.com","favorite_athletes":[{"id":"118306468218564","name":"MS Dhoni"},{"id":"118306468218564","name":"MS Dhoni"},{"id":"344128252278047","name":"Sachin Tendulkar"},{"id":"104079549629041","name":"Kapil Dev"},{"id":"143990758963830","name":"Harbhajan Singh"},{"id":"108122792548976","name":"Yuvraj Singh"},{"id":"130561483625985","name":"Virender Sehwag"},{"id":"108366005857999","name":"V. V. S. Laxman"},{"id":"105542016147046","name":"Anil Kumble"},{"id":"274037442721248","name":"\u318dOragraphy\u318d"},{"id":"186676354713214","name":"James Rodriguez Oficial"},{"id":"148456285190063","name":"Neymar Jr."},{"id":"100787839962234","name":"Saina Nehwal"},{"id":"424236687653827","name":"Yogeshwar Dutt"},{"id":"158303327548614","name":"Kimi Raikk\u00f6nen"},{"id":"160605194088444","name":"MC Mary Kom"},{"id":"103777309661294","name":"Wasim Akram"},{"id":"108054862555292","name":"Rahul Dravid"},{"id":"8750412375","name":"Anil Kumble"}],"favorite_teams":[{"id":"110315722325192","name":"Indian Cricket Team"},{"id":"198358615428","name":"Mumbai Indians"},{"id":"190313434323691","name":"Indian Cricket Team"},{"id":"109251365767393","name":"India national women\'s cricket team"},{"id":"149756715038769","name":"Kings XI Punjab"}],"first_name":"Ashish","gender":"male","hometown":{"id":"106306812739694","name":"Jaipur, Rajasthan"},"last_name":"Ojha","link":"https:\/\/www.facebook.com\/ashishojha2","location":{"id":"114759761873412","name":"Mumbai, Maharashtra, India"},"locale":"en_US","name":"Ashish Ojha","religion":"Jedi","sports":[{"id":"103992339636529","name":"Cricket"}],"timezone":5.5,"updated_time":"2014-10-08T19:32:52+0000","username":"ashishojha2","verified":true,"work":[{"employer":{"id":"1428981044026103","name":"not employed"},"position":{"id":"142458169280057","name":"not employed"},"start_date":"0000-00"}]}';
$config['post'] = (string) '{"data":[{"id":"653776779_10152401993816780","from":{"id":"653776779","name":"Ashish Ojha"},"story":"Ashish Ojha and Urvi Parikh are now friends.","story_tags":{"0":[{"id":"653776779","name":"Ashish Ojha","offset":0,"length":11,"type":"user"}],"16":[{"id":"675297099","name":"Urvi Parikh","offset":16,"length":11,"type":"user"}]},"actions":[{"name":"Comment","link":"https:\/\/www.facebook.com\/653776779\/posts\/10152401993816780"}],"privacy":{"value":""},"type":"status","status_type":"approved_friend","created_time":"2014-11-29T14:05:57+0000","updated_time":"2014-11-29T14:05:57+0000"}],"paging":{"previous":"https:\/\/graph.facebook.com\/v1.0\/653776779\/feed?since=1417269957&limit=25&__previous=1","next":"https:\/\/graph.facebook.com\/v1.0\/653776779\/feed?limit=25&until=1417269956"}}';

/* End of file config.php */
/* Location: ./application/config/config.php */


/*
$userID=
653776779

$user = 
Array
(
    [id] => 653776779
    [bio] => Diagonally opposite, 
Elliptically centered, 
Hyperbolically cornered & 
Parabolically paranormal, 
'puter programmer.
    [education] => Array
        (
            [0] => Array
                (
                    [school] => Array
                        (
                            [id] => 192565277439534
                            [name] => St. Xaviers High School. Borivali
                        )

                    [type] => High School
                    [year] => Array
                        (
                            [id] => 144503378895008
                            [name] => 1999
                        )

                )

            [1] => Array
                (
                    [concentration] => Array
                        (
                            [0] => Array
                                (
                                    [id] => 153881114665017
                                    [name] => BCom
                                )

                        )

                    [school] => Array
                        (
                            [id] => 139045782779212
                            [name] => Thakur College of Science and Commerce
                        )

                    [type] => College
                    [year] => Array
                        (
                            [id] => 113125125403208
                            [name] => 2004
                        )

                )

            [2] => Array
                (
                    [concentration] => Array
                        (
                            [0] => Array
                                (
                                    [id] => 211538778871129
                                    [name] => B.com.
                                )

                        )

                    [school] => Array
                        (
                            [id] => 111950378821457
                            [name] => University of Mumbai
                        )

                    [type] => College
                    [year] => Array
                        (
                            [id] => 113125125403208
                            [name] => 2004
                        )

                )

        )

    [email] => vickyojha2@yahoo.com
    [favorite_athletes] => Array
        (
            [0] => Array
                (
                    [id] => 118306468218564
                    [name] => MS Dhoni
                )

            [1] => Array
                (
                    [id] => 118306468218564
                    [name] => MS Dhoni
                )

            [2] => Array
                (
                    [id] => 344128252278047
                    [name] => Sachin Tendulkar
                )

            [3] => Array
                (
                    [id] => 104079549629041
                    [name] => Kapil Dev
                )

            [4] => Array
                (
                    [id] => 143990758963830
                    [name] => Harbhajan Singh
                )

            [5] => Array
                (
                    [id] => 108122792548976
                    [name] => Yuvraj Singh
                )

            [6] => Array
                (
                    [id] => 130561483625985
                    [name] => Virender Sehwag
                )

            [7] => Array
                (
                    [id] => 108366005857999
                    [name] => V. V. S. Laxman
                )

            [8] => Array
                (
                    [id] => 105542016147046
                    [name] => Anil Kumble
                )

            [9] => Array
                (
                    [id] => 274037442721248
                    [name] => ã†Oragraphyã†
                )

            [10] => Array
                (
                    [id] => 186676354713214
                    [name] => James Rodriguez Oficial
                )

            [11] => Array
                (
                    [id] => 148456285190063
                    [name] => Neymar Jr.
                )

            [12] => Array
                (
                    [id] => 100787839962234
                    [name] => Saina Nehwal
                )

            [13] => Array
                (
                    [id] => 424236687653827
                    [name] => Yogeshwar Dutt
                )

            [14] => Array
                (
                    [id] => 158303327548614
                    [name] => Kimi RaikkÃ¶nen
                )

            [15] => Array
                (
                    [id] => 160605194088444
                    [name] => MC Mary Kom
                )

            [16] => Array
                (
                    [id] => 103777309661294
                    [name] => Wasim Akram
                )

            [17] => Array
                (
                    [id] => 108054862555292
                    [name] => Rahul Dravid
                )

            [18] => Array
                (
                    [id] => 8750412375
                    [name] => Anil Kumble
                )

        )

    [favorite_teams] => Array
        (
            [0] => Array
                (
                    [id] => 110315722325192
                    [name] => Indian Cricket Team
                )

            [1] => Array
                (
                    [id] => 198358615428
                    [name] => Mumbai Indians
                )

            [2] => Array
                (
                    [id] => 190313434323691
                    [name] => Indian Cricket Team
                )

            [3] => Array
                (
                    [id] => 109251365767393
                    [name] => India national women's cricket team
                )

            [4] => Array
                (
                    [id] => 149756715038769
                    [name] => Kings XI Punjab
                )

        )

    [first_name] => Ashish
    [gender] => male
    [hometown] => Array
        (
            [id] => 106306812739694
            [name] => Jaipur, Rajasthan
        )

    [last_name] => Ojha
    [link] => https://www.facebook.com/ashishojha2
    [location] => Array
        (
            [id] => 114759761873412
            [name] => Mumbai, Maharashtra, India
        )

    [locale] => en_US
    [name] => Ashish Ojha
    [religion] => Jedi
    [sports] => Array
        (
            [0] => Array
                (
                    [id] => 103992339636529
                    [name] => Cricket
                )

        )

    [timezone] => 5.5
    [updated_time] => 2014-10-08T19:32:52+0000
    [username] => ashishojha2
    [verified] => 1
    [work] => Array
        (
            [0] => Array
                (
                    [employer] => Array
                        (
                            [id] => 1428981044026103
                            [name] => not employed
                        )

                    [position] => Array
                        (
                            [id] => 142458169280057
                            [name] => not employed
                        )

                    [start_date] => 0000-00
                )

        )

)

JSON:
{"id":"653776779","bio":"Diagonally opposite, \r\nElliptically centered, \r\nHyperbolically cornered & \r\nParabolically paranormal, \r\n'puter programmer.","education":[{"school":{"id":"192565277439534","name":"St. Xaviers High School. Borivali"},"type":"High School","year":{"id":"144503378895008","name":"1999"}},{"concentration":[{"id":"153881114665017","name":"BCom"}],"school":{"id":"139045782779212","name":"Thakur College of Science and Commerce"},"type":"College","year":{"id":"113125125403208","name":"2004"}},{"concentration":[{"id":"211538778871129","name":"B.com."}],"school":{"id":"111950378821457","name":"University of Mumbai"},"type":"College","year":{"id":"113125125403208","name":"2004"}}],"email":"vickyojha2@yahoo.com","favorite_athletes":[{"id":"118306468218564","name":"MS Dhoni"},{"id":"118306468218564","name":"MS Dhoni"},{"id":"344128252278047","name":"Sachin Tendulkar"},{"id":"104079549629041","name":"Kapil Dev"},{"id":"143990758963830","name":"Harbhajan Singh"},{"id":"108122792548976","name":"Yuvraj Singh"},{"id":"130561483625985","name":"Virender Sehwag"},{"id":"108366005857999","name":"V. V. S. Laxman"},{"id":"105542016147046","name":"Anil Kumble"},{"id":"274037442721248","name":"\u318dOragraphy\u318d"},{"id":"186676354713214","name":"James Rodriguez Oficial"},{"id":"148456285190063","name":"Neymar Jr."},{"id":"100787839962234","name":"Saina Nehwal"},{"id":"424236687653827","name":"Yogeshwar Dutt"},{"id":"158303327548614","name":"Kimi Raikk\u00f6nen"},{"id":"160605194088444","name":"MC Mary Kom"},{"id":"103777309661294","name":"Wasim Akram"},{"id":"108054862555292","name":"Rahul Dravid"},{"id":"8750412375","name":"Anil Kumble"}],"favorite_teams":[{"id":"110315722325192","name":"Indian Cricket Team"},{"id":"198358615428","name":"Mumbai Indians"},{"id":"190313434323691","name":"Indian Cricket Team"},{"id":"109251365767393","name":"India national women's cricket team"},{"id":"149756715038769","name":"Kings XI Punjab"}],"first_name":"Ashish","gender":"male","hometown":{"id":"106306812739694","name":"Jaipur, Rajasthan"},"last_name":"Ojha","link":"https:\/\/www.facebook.com\/ashishojha2","location":{"id":"114759761873412","name":"Mumbai, Maharashtra, India"},"locale":"en_US","name":"Ashish Ojha","religion":"Jedi","sports":[{"id":"103992339636529","name":"Cricket"}],"timezone":5.5,"updated_time":"2014-10-08T19:32:52+0000","username":"ashishojha2","verified":true,"work":[{"employer":{"id":"1428981044026103","name":"not employed"},"position":{"id":"142458169280057","name":"not employed"},"start_date":"0000-00"}]}


$post = 
Array
(
    [data] => Array
        (
            [0] => Array
                (
                    [id] => 653776779_10152401993816780
                    [from] => Array
                        (
                            [id] => 653776779
                            [name] => Ashish Ojha
                        )

                    [story] => Ashish Ojha and Urvi Parikh are now friends.
                    [story_tags] => Array
                        (
                            [0] => Array
                                (
                                    [0] => Array
                                        (
                                            [id] => 653776779
                                            [name] => Ashish Ojha
                                            [offset] => 0
                                            [length] => 11
                                            [type] => user
                                        )

                                )

                            [16] => Array
                                (
                                    [0] => Array
                                        (
                                            [id] => 675297099
                                            [name] => Urvi Parikh
                                            [offset] => 16
                                            [length] => 11
                                            [type] => user
                                        )

                                )

                        )

                    [actions] => Array
                        (
                            [0] => Array
                                (
                                    [name] => Comment
                                    [link] => https://www.facebook.com/653776779/posts/10152401993816780
                                )

                        )

                    [privacy] => Array
                        (
                            [value] => 
                        )

                    [type] => status
                    [status_type] => approved_friend
                    [created_time] => 2014-11-29T14:05:57+0000
                    [updated_time] => 2014-11-29T14:05:57+0000
                )

        )

    [paging] => Array
        (
            [previous] => https://graph.facebook.com/v1.0/653776779/feed?since=1417269957&limit=25&__previous=1
            [next] => https://graph.facebook.com/v1.0/653776779/feed?limit=25&until=1417269956
        )

)


JSON:
{"data":[{"id":"653776779_10152401993816780","from":{"id":"653776779","name":"Ashish Ojha"},"story":"Ashish Ojha and Urvi Parikh are now friends.","story_tags":{"0":[{"id":"653776779","name":"Ashish Ojha","offset":0,"length":11,"type":"user"}],"16":[{"id":"675297099","name":"Urvi Parikh","offset":16,"length":11,"type":"user"}]},"actions":[{"name":"Comment","link":"https:\/\/www.facebook.com\/653776779\/posts\/10152401993816780"}],"privacy":{"value":""},"type":"status","status_type":"approved_friend","created_time":"2014-11-29T14:05:57+0000","updated_time":"2014-11-29T14:05:57+0000"}],"paging":{"previous":"https:\/\/graph.facebook.com\/v1.0\/653776779\/feed?since=1417269957&limit=25&__previous=1","next":"https:\/\/graph.facebook.com\/v1.0\/653776779\/feed?limit=25&until=1417269956"}}



JSON:
{
  "data": [
    {
      "id": "10152192163781780_10152407725346780", 
      "from": {
        "id": "10152192163781780", 
        "name": "Ashish Ojha"
      }, 
      "story": "Ashish Ojha commented on a photo.", 
      "story_tags": {
        "0": [
          {
            "id": "10152192163781780", 
            "name": "Ashish Ojha", 
            "offset": 0, 
            "length": 11, 
            "type": "user"
          }
        ]
      }, 
      "privacy": {
        "value": ""
      }, 
      "type": "status", 
      "application": {
        "name": "Photos", 
        "id": "2305272732"
      }, 
      "created_time": "2014-12-02T19:53:28+0000", 
      "updated_time": "2014-12-02T19:53:28+0000"
    }, 
    {
      "id": "10152192163781780_10152401992571780", 
      "from": {
        "id": "10152192163781780", 
        "name": "Ashish Ojha"
      }, 
      "story": "Ashish Ojha commented on a link.", 
      "story_tags": {
        "0": [
          {
            "id": "10152192163781780", 
            "name": "Ashish Ojha", 
            "offset": 0, 
            "length": 11, 
            "type": "user"
          }
        ]
      }, 
      "privacy": {
        "value": ""
      }, 
      "type": "status", 
      "application": {
        "name": "Facebook for Android", 
        "namespace": "fbandroid", 
        "id": "350685531728"
      }, 
      "created_time": "2014-11-29T14:04:27+0000", 
      "updated_time": "2014-11-29T14:04:27+0000"
    }, 
    {
      "id": "10152192163781780_10152399464841780", 
      "from": {
        "id": "10152192163781780", 
        "name": "Ashish Ojha"
      }, 
      "story": "Ashish Ojha commented on a photo.", 
      "story_tags": {
        "0": [
          {
            "id": "10152192163781780", 
            "name": "Ashish Ojha", 
            "offset": 0, 
            "length": 11, 
            "type": "user"
          }
        ]
      }, 
      "privacy": {
        "value": ""
      }, 
      "type": "status", 
      "application": {
        "name": "Facebook for iPhone", 
        "namespace": "fbiphone", 
        "id": "6628568379"
      }, 
      "created_time": "2014-11-27T22:56:04+0000", 
      "updated_time": "2014-11-27T22:56:04+0000"
    }
  ], 
  "paging": {
    "previous": "https://graph.facebook.com/v2.0/10152192163781780/feed?limit=25&since=1417550008", 
    "next": "https://graph.facebook.com/v2.0/10152192163781780/feed?limit=25&until=1417128963"
  }
}


*/

