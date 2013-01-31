<?php
App::uses('AppModel', 'Model');
/**
 * Layout Model
 *
 * @property User $User
 * @property Category $Category
 */
class Layout extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'user_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Preencha o campo com o título do Layout',
				//'allowEmpty' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'filename' => array(
				'extension' => array(
					'rule' => array('extension', array('jpg', 'gif', 'png', 'jpeg')),
					'message' => "Imagens somente no formato JPG, GIF ou PNG"
					),
				'filesize' => array(
					'rule' => array('filesize', "<=", "3MB"),
					'message' => 'Somente imagens com no máximo 3MB'
					)
				)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Category' => array(
			'className' => 'Category',
			'joinTable' => 'layouts_categories',
			'foreignKey' => 'layout_id',
			'associationForeignKey' => 'category_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

	function beforeSave()
	{
		$destination = WWW_ROOT . DS . 'img' . DS . 'upload' . DS;

		if(!is_dir($destination))
		{
			mkdir($destination);
		}

		$f = $this->data['Layout']['filename'];
		$filename = time() . $f['name'];

		if(is_uploaded_file($f['tmp_name']))
		{
			if(move_uploaded_file($f['tmp_name'], $destination . $filename))
			{
				$this->data['Layout']['filename'] = $filename;
				$this->data['Layout']['filesize'] = $f['size'];
				$this->data['Layout']['mimetype'] = $f['type'];

				$thumb = imagecreatetruecolor(220, 220);
				$source = imagecreatefromjpeg($destination.$filename);
				$tamanho = getimagesize($destination.$filename);
				imagecopyresampled($thumb, $source, 0, 0, 0, 0, 220, 220, $tamanho[0], $tamanho[1]);
				imagejpeg($thumb, $destination . DS . 'thumbs' . DS . $filename);
				return true;
			}
		}
		return false;
	}
}
