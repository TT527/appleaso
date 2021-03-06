<?php
!defined('QAPP') AND exit('Forbidden');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="verifyownership" content="737abc342dbb7e4b8ca880db5f37006d"/>
    <meta name="description" content="{{z(描述)}}"/>
    <meta name="keywords" content="{{z(关键词)}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <link rel="stylesheet" href="{{getCss(font-awesome.min)}}">
    <link rel="shortcut icon" href="{{getImg(favicon)}}">
    <link rel="apple-touch-icon" href="{{getImg(apple-touch-icon)}}">
    <link rel="apple-touch-icon" sizes="72x72"
          href="{{getImg(apple-touch-icon-72x72)}}">
    <link rel="apple-touch-icon" sizes="114x114"
          href="{{getImg(apple-touch-icon-114x114)}}">
    <link rel="stylesheet" href="{{getCss(niceCountryInput)}}">
    <link rel="stylesheet" href="{{getCss(bootstrap)}}">
    <title>search</title>
</head>
<body>


<div class="warpper-first">
    <div class="menu">
        <img src="{{z(logo图片)}}" alt="" class="logo">
        <ul class="center-menu">
            <li><a href="/" class="a-enter" style="text-decoration: none;">HOME</a></li>
            <li><a href="/news" class="a-enter" style="text-decoration: none;">NEWS</a></li>
            <li><a href="" class="home" style="text-decoration: none;">SEARCH</a></li>
            <li><a href="/contact" class="a-enter" style="text-decoration: none;">CONTACT</a></li>
        </ul>
    </div>
</div>

<div class="warpper-search">
    <div class="two-center">
        <div style="width: 300px;" id="testinput" data-selectedcountry="US"
             data-showspecial="false"
             data-showflags="true" data-i18nall="All selected"
             data-i18nnofilter="No selection"
             data-i18nfilter="Filter" data-onchangecallback="onChangeCallback">
        </div>
        <div class="input-group col-lg-2" style="margin-top: 8px!important;">
            <input type="text" id="term" class="form-control " placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button" onclick="Search()"> <span
                            class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
              </span>
        </div>
    </div>
</div>


<div class="warpper-two" style="margin-top: 10px">
    <div class="two-left">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">
                <img alt="Brand" width="20" height="20" src="{{getImg(apple)}}">
                <b>Search Result</b>
            </div>
            <div class="panel-body" style="text-align: center">
                <b id="result">Search Result</b>
            </div>
            <!-- Table -->
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Application</th>
                    <th>Genre</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <div id="load" class="load hidden" style="margin-left: 200px"><img src="<?php echo getAny("img/load.gif") ?>"/>
        </div>
    </div>
    <div class="two-right">
        <div class="list-group">
            <span style="font-size: 20px;font-weight: bold;color:#00b38a"><b>I</b></span>
            <label style="font-size: 20px;margin-left: 3px" for="">Search keywords</label>
            <ul class="list-group" id="listkey">
                <a href="#" class="list-group-item active">
                    Key word
                    <span style="float: right">Search Index</span>
                </a>

                <!--list key-->
            </ul>
        </div>

    </div>
</div>

</body>
<script src="{{getJs(niceCountryInput)}}"></script>
<script src="{{getJs(jquery.min)}}"></script>
<script src="{{getJs(bootstrap.min)}}"></script>
<script src="{{getJs(json2html.min)}}"></script>
<script src="{{getJs(jquery.json2html.min)}}"></script>
<style>
    * {
        margin: 0px;
        padding: 0px;
    }


    .warpper-two {
        height: 800px;
        width: 1100px;
        margin: 0 auto;
        /*border: solid 1px green;*/
    }

    .warpper-two .two-left {
        float: left;
        height: 800px;
        width: 600px;
        /*border: brown 1px solid;*/
    }

    .warpper-two .two-right {
        float: right;
        height: 400px;
        width: 340px;
        /*border: black 1px solid;*/
        margin-right: 50px;
    }

    * {
        margin: 0px;
        padding: 0px;
        font-family: Arial;
    }

    ul, ol {
        list-style: none;
    }

    .center-menu li {
        float: left;
        margin-left: 70px;
    }

    a {
        color: #000;
        font-weight: 400;
        font-size: 15px;
        text-decoration: none;
        padding-bottom: 20px;
    }

    a:hover {
        color: #2D7BA7;
    }

    .warpper-first {
        width: 100%;
        height: 80px;
    }

    .warpper-first .menu {
        width: 1100px;
        height: 60px;
        margin: 0 auto;
        margin-top: 20px;
        border-bottom: #ccc solid 1px;
    }

    .warpper-first .menu .logo {
        margin-top: 10px;
        margin-left: 80px;
        float: left;
    }

    .warpper-first .menu .home {
        color: #2D7BA7;
        border-bottom: 1px solid #2D7BA7;
    }

    .warpper-first .menu .center-menu {
        margin-left: 250px;
        line-height: 63px;
        width: 700px;
        height: 60px;
    }

    .niceCountryInputMenuDropdownContent {
        z-index: 999;
        position: absolute;
        background: white;
        width: 374px;
    }

    .niceCountryInputMenuDropdownContent {
        width: 300px;
    }

    .warpper-search {
        width: 100%;
        height: 60px;
        margin-bottom: 26px;
    }

    .warpper-search .two-center {
        width: 1100px;
        height: 60px;
        margin: 0 auto;
    }

    #testinput {
        float: left;
        margin-right: 20px;
    }

    .niceCountryInputMenuDefaultText {
        line-height: 34.4px;
        height: 34.4px;
    }

    .niceCountryInputMenuDropdown {
        margin-top: 7px;
    }

    .input-group {
        width: 280px;
        padding-top: 3px;

    }

    #testinput > div.niceCountryInputMenu > span > a > a > span {
        display: inline-block;
        width: 200px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .niceCountryInputMenuCountryFlag {
        margin-top: 10px;
        float: left;
    }

    #listkey > li > span:nth-child(2) {
        display: inline-block;
        width: 220px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }


    body > div.warpper-two > div.two-left > div > table > tbody { /*表格中的数据*/

    }
</style>
<script>
    var news = document.getElementsByClassName('a-enter')[0];
    var contact = document.getElementsByClassName('a-enter')[1];
    var search = document.getElementsByClassName('a-enter')[2];
    news.onmouseenter = function () {
        setTimeout(function () {
            news.style.borderBottom = '1px solid #2D7BA7';
        }, 150);
    };
    news.onmouseleave = function () {
        setTimeout(function () {
            news.style.borderBottom = 'none';
        }, 150)
    };
    contact.onmouseenter = function () {
        setTimeout(function () {
            contact.style.borderBottom = '1px solid #2D7BA7';
        }, 150);
    };
    contact.onmouseleave = function () {
        setTimeout(function () {
            contact.style.borderBottom = 'none';
        }, 150)
    };
    search.onmouseenter = function () {
        setTimeout(function () {
            search.style.borderBottom = '1px solid #2D7BA7';
        }, 150);
    };
    search.onmouseleave = function () {
        setTimeout(function () {
            search.style.borderBottom = 'none';
        }, 150)
    }
</script>
<script>
    document.getElementById('testinput').setAttribute('data-selectedcountry', 'US');

    function onChangeCallback(ctr) {
        console.log("The country was changed: " + ctr);
    }

    $(document).ready(function () {
        new NiceCountryInput($("#testinput")).init();
    });

    var keytemp = {
        "<>": "li", "class": "list-group-item", "html": [
            {"<>": "span", "class": "float-right", "style": "color:#00b38a;float: right", "html": "${hot}"},
            {"<>": "span", "style": "color:#00b38a", "html": "${term}"}
        ]
    };

    var tabletemp2 = {
        "<>": "tr", "html": [
            {"<>": "th", "scope": "row", "html": "${id}", "style": "vertical-align: middle;"},
            {
                "<>": "td", "html": [
                    {
                        "<>": "span",
                        "style": "vertical-align: middle;width:150px;",
                        "html": "${trackName}"
                    }
                ]
            },
            {"<>": "td", "html": "${averageUserRating}", "style": "vertical-align: middle;"}
        ]
    };

    var tabletemp = {
        "<>": "tr", "html": [
            {"<>": "th", "scope": "row", "html": "${id}", "style": "vertical-align: middle;"},
            {
                "<>": "td", "html": [
                    {
                        "<>": "img",
                        "src": "${logo}",
                        "style": "width:52px;height:52px;margin-right:5px;float:left;",
                        "alt": "",
                        "html": ""
                    },
                    {
                        "<>": "div", "style": "float: left;", "html": [
                            {
                                "<>": "a",
                                "href": "${href}",
                                "style": "text-decoration: none;",
                                "target": "_blank",
                                "html": [
                                    {
                                        "<>": "span",
                                        "style": "margin-top:16px;vertical-align: middle;text-overflow: ellipsis;white-space: nowrap;width:150px;overflow: hidden;display: inline-block;",
                                        "html": "${name}"
                                    },
                                    {
                                        "<>": "div",
                                        "style": "font-size:7px;margin-top: 3px;vertical-align: middle;text-overflow: ellipsis;white-space: nowrap;width:150px;overflow: hidden;",
                                        "html": ""
                                    }
                                ]
                            }
                        ]
                    }
                ]
            },
            {"<>": "td", "html": "${genre}", "style": "vertical-align: middle;"}
        ]
    };

    var keyerr = {"term": "Not Found", "hot": 0};
    var taberr = {"id": 1, "trackName": "Not Found", "averageUserRating": 0, "description": "Not Found"};


    function Search() {

        var country = $(".niceCountryInputMenuCountryFlag").data("flagiso");
        var term = $("#term").val();
        $("#result").html("【" + term + "】Search Result");
        $('tbody tr').remove();
        $('#listkey li').remove();
        document.getElementById('testinput').setAttribute('data-selectedcountry', country);
        $('#term').val(term);
        $("#load").removeClass("hidden");
        $.ajax({
                type: 'post',
                url: 'http://localhost:8080/api/search',
                data: {
                    'country': country,
                    'term': term,
                },
                success: function (d) {
                    $("#load").addClass("hidden");
                    if (d.code == '200') {
                        if (d.info == null && d.key != null) {
                            $('tbody').json2html(taberr, tabletemp2);
                            $('#listkey').json2html(d.key, keytemp);
                        } else if (d.key == null && d.info != null) {
                            $('#listkey').json2html(keyerr, keytemp);
                            $('tbody').json2html(d.info, tabletemp);
                        } else if (d.info == null && d.key == null) {
                            $('tbody').json2html(taberr, tabletemp2);
                            $('#listkey').json2html(keyerr, keytemp);
                        } else {
                            $('tbody').json2html(d.info, tabletemp);
                            $('#listkey').json2html(d.key, keytemp);
                        }
                    } else {
                        $('tbody').json2html(taberr, tabletemp2);
                        $('#listkey').json2html(keyerr, keytemp);
                    }
                }
            }
        )
        ;
    }


</script>
</html>
