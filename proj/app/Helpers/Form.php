<?php
namespace App\Helpers;

class Form {
    public static function show ($elements) {
        $xhtml = null;
        foreach ($elements as $element) {
            $xhtml .= self::formGroup($element);
        }

        return $xhtml;
    }

    public static function formGroup ($element, $params = null) {
        $type = isset($element['type']) ? $element['type'] : 'input';
        $xhtml = null;
        switch ($type) {
            case 'input':
                $xhtml .= sprintf(
                    '<div class="form-group">
                            %s
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            %s
                        </div>
                    </div>', $element['label'], $element['element']);
                break;
        }

        return $xhtml;
    }
}
