<?php
/*
$reg = "/^(http:\/\/)?([^\/]+)/i";
$string = "http://www.php.net/index.html";


// получить имя хоста из URL
preg_match($reg, $string, $matches);
$host = $matches[2];
echo $host;
*/

function expandlinks($links,$URI)
    {

        preg_match("/^[^\?]+/",$URI,$match);

        $match = preg_replace("|/[^\/\.]+\.[^\/\.]+$|","",$match[0]);
        $match = preg_replace("|/$|","",$match);
        $match_part = parse_url($match);
        $match_root =
        $match_part["scheme"]."://".$match_part["host"];

        $search = array(     "|^http://".preg_quote($this->host)."|i",
                            "|^(\/)|i",
                            "|^(?!http://)(?!mailto:)|i",
                            "|/\./|",
                            "|/[^\/]+/\.\./|"
                        );

        $replace = array(    "",
                            $match_root."/",
                            $match."/",
                            "/",
                            "/"
                        );

        $expandedLinks = preg_replace($search,$replace,$links);

        return $expandedLinks;
    }

echo  expandlinks("","<a href='http://mysite.ru/page.php/страница'>");

?>
