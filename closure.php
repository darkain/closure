<?php

trait closures {
	public function __call($function, $arguements) {
		if (isset($this->$function)  &&  is_callable($this->$function)) {
			return call_user_func_array($this->$function, $arguements);
		}
		throw new Exception('Function not found: ' . $function);
	}
}
