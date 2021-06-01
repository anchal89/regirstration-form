<?php

namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class PostsTable extends Table
{
    public function initialize(array $config): void
    {
      $this->addBehavior('Timestamp', [
         'events' => [
            'Model.beforeSave' => [
              'created' => 'new',
              'updated' => 'always'
            ]
         ]
      ]);
    }

    public function validationDefault(Validator $validator): Validator {

      $validator
         ->notEmptyString('title')
         ->notEmptyString('description')
         
         );
         return $validator;
	}

}