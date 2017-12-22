<?php

function get_angle($t)
{
	return (new GetAngle($t))->get();
}

class GetAngle
{
	private $result = "Invalid input";

	public function __construct($t)
	{
		  $t = explode(':', $t);
		  if (isset($t[0], $t[1]) and sizeof($t) === 2) {
			if (is_numeric($t[0]) and is_numeric($t[1])) {
				(($t[0] < 0 or $t[0] > 24 or $t[1] < 0 or $t[1] > 60) and $this->result = 'Invalid input') or 
				(($t[0] > 12) and $t[0] -= 12) xor (($t[0] == 12) and $t[0] = 0) xor (($t[1] == 60) and $t[1] = 0) xor
				$this->result = abs(($t[0]*60-$t[1]*11)/2);
			}
		}
	}
	public function get()
	{
		return $this->result;
	}
}
