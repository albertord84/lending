<?php

namespace follows\cls {
    
    /**
     * class Followed
     * 
     */
    class Followed {
        /** Aggregations: */
        /** Compositions: */
        /*         * * Attributes: ** */

        /**
         * 
         * @access protected
         */
        protected $id;

        /**
         * 
         * @access protected
         */
        protected $followed_id;

        /**
         * 
         * @access protected
         */
        protected $client_id;

        /**
         * 
         * @access protected
         */
        protected $reference_id;

        /**
         * 
         * @access protected
         */
        protected $requested;

        /**
         * 
         * @access protected
         */
        protected $date;

        /**
         * 
         * @access protected
         */
        protected $unfollowed;

        /**
         * 
         *
         * @return Followed
         * @access public
         */
        public function add_followed() {
            
        }

// end of member function add_followed

        /**
         * 
         *
         * @return bool
         * @access public
         */
        public function unfollow() {
            
        }

// end of member function unfollow
        
        function __set($name, $value) {
            if (method_exists($this, $name)) {
                $this->$name($value);
            } else {
                // Getter/Setter not defined so set as property of object
                $this->$name = $value;
            }
        }

        function __get($name) {
            if (method_exists($this, $name)) {
                return $this->$name();
            } elseif (property_exists($this, $name)) {
                // Getter/Setter not defined so return property if it exists
                return $this->$name;
            }
            return null;
        }

 // end of generic setter an getter definition
        
    }

    // end of Followed
}

?>
