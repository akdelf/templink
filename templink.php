<?php

	class templink {

		static function add($link) {

			$secfile = 'templink/'.md5($link.date('d.m.yH:i:s'));
			file_put_contents(SITEPATH.$secfile, $link);

			return $secfile; //полученная ссылка
		
		}


		/**
		* возвращаем ссылку если не истекло время
		*/
		static function load($file, $time = 3600) {
		
			if (!)

			if (!file_exists(FCACHE))
				templink::err404();
		


			if ((filemtime(FCACHE) + $time) < $_SERVER['REQUEST_TIME'])){
				unlink($file); //delete old file
				templink::err404();
			}

			$filesize = filesize($file);



		}	


		
		/**
		* not found file
		*/
		static function err404() {
			header ( 'HTTP/1.1 404 Not Found' );
    		die();
		}


		static function ftype(){
			switch( $mimetype ) {
    			case 'pdf' : $ctype = 'application/pdf'; break;
    			case 'zip' : $ctype = 'application/zip'; break;
    			case 'doc' : $ctype = 'application/msword'; break;
    			case 'xls' : $ctype = 'application/vnd.ms-excel'; break;
    			case 'gif' : $ctype = 'image/gif'; break;
    			case 'png' : $ctype = 'image/png'; break;
    			case 'jpeg':
    			case 'jpg' : $ctype = 'image/jpg'; break;
    			case 'mp3' : $ctype = 'audio/mpeg'; break;
    			case 'wav' : $ctype = 'audio/x-wav'; break;
    			case 'mpeg':
    			case 'mpg' :
    			case 'mpe' : $ctype = 'video/mpeg'; break;
    			case 'mov' : $ctype = 'video/quicktime'; break;
    			case 'avi' : $ctype = 'video/x-msvideo'; break;
    			default    : $ctype = 'application/octet-stream';
  			}
		}


		
	}

