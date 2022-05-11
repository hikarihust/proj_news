<?php

namespace App\Helpers;


class Feed
{
    public static function read($itemsRss)
    {
        $result = [];
        foreach ($itemsRss as $value) {
            if (Feed::checkSourceLink($value['source'], $value['link'])) {
                switch ($value['source']) {
                    case 'vnexpress':
                        $data = Feed::readVNExpress($value['link']);
                        break;
                case 'tuoitre':
                    $data = Feed::readTuoiTre($value['link']);
                    break;
                }
                $result = array_merge_recursive($result, $data);
            }
        }
        return $result;
    }

    public static function checkSourceLink($source, $link)
    {
        $sourceFromLink = explode('.', parse_url($link, PHP_URL_HOST))[0];
        return ($source == $sourceFromLink);
    }

    public static function readVNExpress($link) // name
    {
        try {
            $data = simplexml_load_file($link, "SimpleXMLElement", LIBXML_NOCDATA);
            $data = json_encode($data);
            $data = json_decode($data, TRUE);
            $data = $data['channel']['item'];

            foreach ($data as $key => $value) {
                unset($data[$key]['guid']);
                $tmp1 = [];
                $tmp2 = [];

                preg_match('/src="(.+)"/i', $value['description'], $tmp1);
                $pattern = '.+br>(.+)';
                preg_match('/' . $pattern . '/', $value['description'], $tmp2);

                $data[$key]['description'] = $tmp2[1] ?? $value['description'];
                $data[$key]['thumb'] = $tmp1[1] ?? '';
            }
            return $data;
        } catch (\Throwable $th) {
            return [];
        }
    }

    public static function readTuoiTre($link) // name
    {
        try {
            $data = simplexml_load_file($link, "SimpleXMLElement", LIBXML_NOCDATA);
            $data = json_encode($data);
            $data = json_decode($data, TRUE);
            $data = $data['channel']['item'];

            foreach ($data as $key => $value) {
                unset($data[$key]['guid']);
                $tmp1 = [];
                $tmp2 = [];

                preg_match('/src="(.+)"/i', $value['description'], $tmp1);
                preg_match('/.+<\/a>(.+)/', $value['description'], $tmp2);

                $data[$key]['description'] = $tmp2[1] ?? $value['description'];
                $data[$key]['thumb'] = $tmp1[1] ?? '';
            }
            return $data;
        } catch (\Throwable $th) {
            return [];
        }
    }
}
