<?php
  
class Elevator
{
    public $button = ['1','2','3','4','5','6','7','8','9'];
    public $user;
    
    function action(User $user)
    {
        $this->user = $user;
        
        if ($this->user) {

            if (in_array($this->user->button, $this->button) ) {
                
                if ($this->user->level < $this->user->button) {
                    $this->moveUp($this->user->button);
                } elseif ($this->user->level > $this->user->button) {
                    $this->moveDown($this->user->button);
                } else {
                    echo 'We stand still!';
                    return false;
                }
            } else {
                echo 'There is no such button!';
                return false;
            }
        } else {
            return false;
        }
    }
    
    function moveUp()
    {
        echo 'The evator goes to the ' . $this->user->button . ' th floor! From ' . $this->user->level . ' th level!';
    }
    
    function moveDown()
    {
        echo 'The evator goes down to the ' . $this->user->button . ' th floor! From ' . $this->user->level . ' th level!';
    }
    
}
 
class User
{
    public $button;
    public $level;
    
    function __construct($level)
    {
        $this->level = $level;
    }
    
    function press_button($number, Elevator $elevator)
    {
        $this->button = $number;
        $elevator->action($this);
    }
}
