<?php

trait numberValidator {
	public function isFibonacci($number) {
		return $this->isSquare( intval( (5*$number*$number) + 4) ) && $this->isSquare( intval( (5*$number*$number) - 4) );
	}

	public function isSquare($squarableNumber) {
		$squarootValue = sqrt($squarableNumber);
		return (($squarootValue*$squarootValue) == $squarableNumber);
	}
}