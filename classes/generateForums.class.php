<?php
    
    /*
    |
    |   Forum-Generator
    |   Class: forum
    |
    */
    
    class Forum {
        public function returnForums($forumID = 0){
            $return = array(
                        array('id'=>"1",'name'=>"Test", 'description'=>"Testforum", 'lastPost'=>0, 'lastPostName'=>"-/-", 'lastPostCreator'=>"-/-", 'subforums'=>
                                array(
                                    array(
                                    'id'=> "2", 'name'=>"SubForum1"
                                    )
                                )
                            )            
                        );
            return $return;
        }
    }