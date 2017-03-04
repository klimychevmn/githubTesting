<?php

namespace App;

class Parser
{
    public function getXmlId($url)
    {
        $firstPos = strpos($url, '/', 1);
        $lastPos = strpos($url, '?');
        $xmlId = (($lastPos !== false)
            ? substr($url, $firstPos + 1, $lastPos - $firstPos - 1)
            : substr($url, $firstPos + 1)
        );

        if ($xmlId[strlen($xmlId)-1] == '/') {
            $xmlId = substr($xmlId, 0, strlen($xmlId)-1);
        }
        return $xmlId;
    }

    public function getParentXmlId($url)
    {
        $xmlId = $this->getXmlId($url);
        return substr($xmlId, 0, strrpos($xmlId, '/'));
    }
}
