<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $theme   = 'Ganjuran';
    public $layout   = 'default';

    public $components = array(
    	'DebugKit.Toolbar',
    	'Session',
		'Auth' => array(
		            'loginAction' => array('controller'=>'users','action'=>'login', 'admin'=>false),
		            'loginRedirect' => array( 
		                'controller' => 'users',
		                'action' => 'dashboard',
		                'admin' => true
		            ),
		            'logoutRedirect' => array( 
		                'controller' => 'users',
		                'action' => 'login',
		                'admin'=> false  // add this so that admin actions get ignored
		            ),
		            'authError' => 'Access Denied',
		            'authenticate' => array(
		                'Form' => array(
		                    'passwordHasher' => 'Blowfish'
		                )
		            ),
		            'authorize' => array('Controller')
		        )    	
		    );

    public function beforeFilter() {
        // Auth will block all entries with admin prefix unless the user is authenticated
        if(isset($this->request->prefix) && ($this->request->prefix == 'admin')){
           if($this->Auth->loggedIn()){
                $this->Auth->allow();
                $this->layout = 'dashboard';
            }else{
                $this->Auth->deny();
                //$this->layout = 'front';
            }
        }else{
            $this->Auth->allow();
            //$this->layout = 'front';
        }
    }

    public function isAuthorized($user = null) {
        // Everyone is authorized to see that front pages. However, some admin pages require you to be an admin to have access
        if(isset($this->request->prefix) && ($this->request->prefix == 'admin')){
            if($this->Auth->loggedIn()){
                if($this->Auth->user('role') == 'administrator'){
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }
        return true;
    }

    public function uploadFiles($folder, $formdata,$itemId = null) {
      // setup dir names absolute and relative
      $folder_url = WWW_ROOT.$folder;
      $rel_url = $folder;
      
      // create the folder if it does not exist
      if(!is_dir($folder_url)) {
        mkdir($folder_url);
      }
        
      // if itemId is set create an item folder
      if($itemId) {
        // set new absolute folder
        $folder_url = WWW_ROOT.$folder.'/'.$itemId; 
        // set new relative folder
        $rel_url = $folder.'/'.$itemId;
        // create directory
        if(!is_dir($folder_url)) {
          mkdir($folder_url);
        }
      }
      
      // list of permitted file types, this is only images but documents can be added
      $permitted = array(
          'image/gif','image/jpeg','image/pjpeg','image/png',   //images
          'application/msword','application/rtf','application/vnd.ms-excel','application/vnd.ms-powerpoint', //text document
          'application/pdf','application/vnd.oasis.opendocument.text','application/vnd.oasis.opendocument.spreadsheet',   //document
          'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
          'application/zip','application/x-rar-compressed',     //archive
          'text/plain' //txt
          );
      

      // debug($formdata);
      // loop through and deal with the files
      //foreach($formdata as $file) {
        //debug($file);
        // replace spaces with underscores
        //$filename = str_replace(array(' ','-'), '_', $formdata['name']);
        $file = $formdata['name'];
        $file_extension = substr($file, strrpos($file, '.')+1);
        $filename = md5($formdata['name']).'.'.$file_extension;

        // assume filetype is false
        $typeOK = false;
        // check filetype is ok
        foreach($permitted as $type) {
          if($type == $formdata['type']) {
            $typeOK = true;
            break;
          }
        }
        
        // if file type ok upload the file
        if($typeOK) {
          // switch based on error code
          switch($formdata['error']) {
            case 0:
              // check filename already exists
              if(!file_exists($folder_url.'/'.$filename)) {
                // create full filename
                $full_url = $folder_url.'/'.$filename;
                $url = $rel_url.'/'.$filename;
                // upload the file
                $success = move_uploaded_file($formdata['tmp_name'], $url);
              } else {
                // create unique filename and upload file
                ini_set('date.timezone', 'Europe/London');
                $now = date('YmdHis');
                $filename = $now.$filename;
                $full_url = $folder_url.'/'.$filename;
                $url = $rel_url.'/'.$filename;
                $success = move_uploaded_file($formdata['tmp_name'], $url);
              }
              // if upload was successful
              if($success) {
                // save the url of the file
                $result['urls'][] = $url;
                $result['filename'] = $filename;

                //cropping image
                // $targ_w = $targ_h = 150;
                // $jpeg_quality = 90;

                // $src = $url;
                // $img_r = imagecreatefromjpeg($src);
                // $dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

                // imagecopyresampled($dst_r,$img_r,0,0,50,50,
                // $targ_w,$targ_h,100,200);
                // imagejpeg($dst_r,$rel_url.'/'.$filename,$jpeg_quality);


              } else {
                $result['errors'][] = "Error uploaded $filename. Please try again.";
              }
              break;
            case 3:
              // an error occured
              $result['errors'][] = "Error uploading $filename. Please try again.";
              break;
            default:
              // an error occured
              $result['errors'][] = "System error uploading $filename. Contact webmaster.";
              break;
          }
        } elseif($formdata['error'] == 4) {
          // no file was selected for upload
          $result['nofiles'][] = "No file Selected";
        } else {
          // unacceptable file type
          $result['errors'][] = "$filename cannot be uploaded. Acceptable file types: gif, jpg, png.";
        }
      //}
    return $result;
    }

}
