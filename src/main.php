<?php

namespace {

	use CatPaw\CatPaw;
	use CatPaw\Configs\MainConfiguration;
	use CatPaw\Tools\Helpers\Route;

	function main(MainConfiguration $config): Generator {
		yield Route::get("/hello-world", fn() => "hello world");
		yield CatPaw::start($config);
	}
}