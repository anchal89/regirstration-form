<?php

namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\Rule\IsUnique;
use Cake\ORM\RulesChecker;


class UsersTable extends Table
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


    public function buildRules(RulesChecker $rules): RulesChecker {
        $rules->add($rules->isUnique(['email'], 'Email is already exists'));
        $rules->add($rules->isUnique(['username'], 'Usrename is already exists'));
        return $rules;
    }


    public function validationDefault(Validator $validator): Validator {

    $validator
        ->notEmptyString('username')
        ->notEmptyString('email')
        ->requirePresence('email')
        ->add('email', 'validFormat', [
            'rule' => 'email',
            'message' => 'Email must be valid'
        ])
        ->notEmptyString('mobile')
		->requirePresence('mobile')
        ->add('mobile', 'validFormat', 
         'minLength' => [
                'rule' => ['minLength', 10],
                'last' => true,
                'message' => 'mobile minmum 10 digits'
            ],
            'maxLength' => [
                'rule' => ['maxLength', 10],
                'message' => 'mobile minmum 10 digits'
            ]
        ]
		->notEmptyString('country')
		->notEmptyString('state')
		->notEmptyString('city')
		->notEmptyString('comments')
		);
        
        return $validator;
	}

}