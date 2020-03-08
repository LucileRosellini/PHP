<?php


class Validate
{
    public function testForeachStep1($file)
    {
        foreach ($file as $line) {
            if (strpos($line, 'foreach') !== false) {
                return true;
            }
        }

        return false;
    }

    public function testForeachStep2($file)
    {
        $previous = $this->testForeachStep1($file);
        $return1  = false;
        $return2  = false;

        foreach ($file as $line) {
            if (strpos($line, 'author') !== false) {
                $return1 = true;
            }
            if (strpos($line, 'title') !== false) {
                $return2 = true;
            }
        }

        return $previous && $return1 && $return2;
    }
}
