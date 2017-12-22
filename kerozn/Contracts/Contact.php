<?php namespace Kerozn\Contracts;
 
interface ContactContract {
	/*
	 * Send message to 
	 * 
	*/
	public function send($object, $to);
}