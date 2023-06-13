<?php
class TextInput
{
    public $result = '';

    public function add($text)
    {
        $this->result = $this->result . $text;
    }

    public function getValue()
    {
        return $this->result;
    }
}

class NumericInput extends TextInput
{
    public function add($text)
    {
        $new_input = preg_replace('/\D/', '', $text);
        $this->result = $this->result . $new_input;
    }
}

$input = new NumericInput();
$input->add('b');
$input->add('3');
echo $input->getValue();
