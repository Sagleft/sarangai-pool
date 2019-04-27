<?php
	namespace Sarangai;
	
	class AppRender {
		function twigRender($data) {
			$loader = new \Twig_Loader_Filesystem(__DIR__ . '/../template/');
			$twig = new \Twig_Environment($loader, array(
				'cache'       => __DIR__ . '/../cache',
				'auto_reload' => true
			));
			exit($twig->render($data['tag'].".tmpl", ['page' => $data]));
		}
	}
	