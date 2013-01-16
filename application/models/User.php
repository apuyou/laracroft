<?php

class User extends Eloquent {
    function songs()
    {
        return $this->has_many_and_belongs_to('Song')->with('playcount');
    }
}
