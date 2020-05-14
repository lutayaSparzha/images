<?php

namespace frontend\models\events;

use yii\base\Event;
use frontend\models\User;
use frontend\models\Post;

/**
 * Description of PostCreatedEvent
 *
 * @author K55VD
 */
class PostCreatedEvent extends Event
{
    
    /**
     * @var User
     */
    public $user;
    
    /**
     *
     * @var Post 
     */
    public $post;
    
    public function getUser()
    {
        return $this->user;
    }
    
    public function getPost()
    {
        return $this->post;
    }
}
