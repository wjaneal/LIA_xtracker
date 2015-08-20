<?php namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class StudentsForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('slname', 'text')
            ->add('sfname', 'text')
            ->add('snname', 'text')
            ->add('country', 'text')
            ->add('gender', 'text')
            ->add('account_name', 'text')
            ->add('encrypt_pass', 'text')
            ->add('picture_location', 'text')
            ->add('student_email_1', 'text')
            ->add('flanguage', 'text')
            ->add('immigration', 'select')
            ->add('canada_doe', 'text')
            ->add('lia_doe', 'text')
            ->add('dob', 'text')
            ->add('assessment_date', 'text')
            ->add('education_note', 'text')
            ->add('translator', 'text')
            ->add('trans_relationship', 'text')
            ->add('career', 'text')
            ->add('recommendations', 'text')
            ->add('agentid', 'select')
            ->add('last_login', 'text')
            ->add('parent1', 'select')
            ->add('parent2', 'select')
            ->add('grade', 'select')
            ->add('address', 'text')
            ->add('city', 'text')
            ->add('postalcode', 'text')
            ->add('phone', 'text');
    }
}