<?php

trait closures {
	public function __call($function, $arguements) {
		if (is_callable($this->$function)) {
			return call_user_func_array($this->$function, $arguements);
		}
	}
}
