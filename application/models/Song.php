<?php

class Song extends Eloquent {
    function users()
    {
        return $this->has_many_and_belongs_to('User')->with('playcount');
    }
}

