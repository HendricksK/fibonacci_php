<?php

/*
Number Validation trait, 
functions for validating numbers
Author: Kurvin
*/

trait numberValidator {

	/*
	Returns true/false
	Accepts single argument,
	checks if argument is fibonacci
	*/
	public function isFibonacci($number) {
		return $this->isSquare( intval( (5*$number*$number) + 4) ) && $this->isSquare( intval( (5*$number*$number) - 4) );
	}

	/*
	Returns true/false
	Accepts single argument
	checks if argument is square
	*/
	public function isSquare($squarableNumber) {
		$squarootValue = sqrt($squarableNumber);
		return (($squarootValue*$squarootValue) == $squarableNumber);
	}

	/*
	Returns true/false
	Accepts single argument
	checks if argument is negative
	*/
	public function isNegativeNumber($possibleNegaviteNumber) {
		return ($possibleNegaviteNumber < 0);
	}
}