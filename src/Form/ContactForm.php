<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContactForm
 *
 * @author Leonardo
 */

namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

class ContactForm extends Form {

    //put your code here
    protected function _buildSchema(Schema $schema) {
        return $schema->addField('name', 'string')
                        ->addField('email', ['type' => 'string'])
                        ->addField('body', ['type' => 'text']);
    }

    protected function _buildValidator(Validator $validator) {
        return $validator->add('name', 'length', [
                    'rule' => ['minLength', 10],
                    'message' => 'A name is required'
                ])->add('email', 'format', [
                    'rule' => 'email',
                    'message' => 'A valid email address is required',
        ]);
    }

    protected function _execute(array $data) {
        // Send an email.

        switch (TRUE) {
            case empty($data['first-name']):
                return 'Campo nome obrigatório.';
            case empty($data['last-name']):
                return 'Campo último nome obrigatório.';
            case empty($data['birthdate']):
                return 'Campo nascimento obrigatório.';
            case empty($data['gender']):
                return 'Campo sexo obrigatório.';
            case empty($data['mail']):
                return 'Campo e-mail obrigatório.';
            case empty($data['accept']):
                return 'Campo aceite obrigatório.';
            default:
                break;
        }
        return 'true';
    }

}
