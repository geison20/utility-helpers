<?php 

namespace geissonmachado\Helpers;

abstract class String {


	public function rdString($len = 15)
	{
		return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $len);
	}

}