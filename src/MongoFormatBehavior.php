<?php

namespace urmaul\yii2\mongo\formatter;

use MongoDate;
use yii\i18n\Formatter;

/**
 * @property Formatter $owner
 */
class Behavior extends \yii\base\Behavior
{
    /**
     * Formats MongoDate value as date.
     * @param MongoDate $value
     * @param string $format
     */
    public function asMongoDate($value, $format = null)
    {
        return $this->owner->asDate($value->sec, $format);
    }
    
    /**
     * Formats MongoDate value as datetime.
     * @param MongoDate $value
     * @param string $format
     */
    public function asMongoDatetime($value, $format = null)
    {
        return $this->owner->asDatetime($value->sec, $format);
    }
    
    /**
     * Formats MongoDate value as time.
     * @param MongoDate $value
     * @param string $format
     */
    public function asMongoTime($value, $format = null)
    {
        return $this->owner->asTime($value->sec, $format);
    }
}
