<?php namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class ExpenditureForm extends Form
{
    public function buildForm()
    {
	$departments = [''=>'Select a Department', 0=>'Marketing', 1=>'Academic'];
	#Later: Determine Department ID from Auth
	#Later: Combine Budget Categories Based on Current Year and Auth'd Department
        $this
            ->add('category', 'text')
            ->add('subcategory', 'text')
            ->add('description', 'text')
            ->add('date', 'text')
            ->add('departmentid', 'select',
  		['choices'=>$departments,
                'label'=>'Department ID'
                ])
            ->add('save', 'submit', ['label' => 'Submit Expenditure']);

    }
}
