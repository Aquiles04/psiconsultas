<?php

class Documento extends AppModel {
   
		public $name = 'Documento';
		// public $actsAs = array(
		// 			'FileUpload.FileUpload' => array(
		// 				'fields' => array('name' => 'file_name', 'type' => 'file_type', 'size' => 'file_size'),
		// 				'allowedTypes' => array('pdf' => array('application/pdf')),
		// 			)
		// 		);

		// public function beforeSave($options = array())
		// {
		//     if(!empty($this->data['Documento']['nome']['name'])) {
		//         $this->data['Documento']['nome'] = $this->upload($this->data['Model']['nome']);
		//     } else {
		//         unset($this->data['Documento']['nome']);
		//     }
		// }
}
