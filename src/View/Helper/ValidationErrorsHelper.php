<?php

namespace App\View\Helper;

use Cake\View\Helper;

class ValidationErrorsHelper extends Helper
{

    public function array_flatten($array) {
        if (!is_array($array)) {
            return false;
        }
        $result = [];
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $result = array_merge($result, $this->array_flatten($value));
            } else {
                $result[$key] = $value;
            }
        }
        return $result;
    }

    public function flatten_array($arg) {
        return is_array($arg) ? array_reduce($arg, function ($c, $a) { return array_merge($c, $this->flatten_array($a)); }, []) : [$arg];
    }

    public function flatten($array, $prefix = '') {
        $result = [];
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $result += $this->flatten($value, $prefix . $key . '.');
            } else {
                $result[$prefix . $key] = $value;
            }
        }
        return $result;
    }
    public function displayErrors($entity)
    {
        $errors = $entity->getErrors(); // Initialize the $errors variable

        if (empty($errors)) {
            return ''; // Return an empty string if there are no errors
        }

        $myarr = $this->flatten($errors); // Flatten the errors array
        $output = '<div class="alert alert-danger alert-dismissible fade in" role="alert"> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span></button>';

        $i = 0;
        foreach ($myarr as $value) {
            $i++;
            if ($i <= 3) {
                $output .= '<i class="fa fa-exclamation-triangle"></i> ' . h($value) . '<br/>';
            }
        }

        if (count($myarr) > 3) {
            $output .= '<small class="accordion-toggle" data-toggle="collapse" data-target="#demo">
                            more...
                        </small>
                        <div id="demo" class="collapse">';
            $i = 0;
            foreach ($myarr as $value) {
                $i++;
                if ($i > 3) {
                    $output .= '<i class="fa fa-exclamation-triangle"></i> ' . h($value) . '<br/>';
                }
            }
            $output .= '</div>';
        }

        $output .= '</div>';

        return $output;
    }
    public function displayErrorsalt($entity)
    {
        $errors = $entity->getErrors(); // Assuming the entity has a getErrors() method to fetch validation errors

        if (empty($errors)) {
            return '';
        }

        $myarr = $this->flatten($errors);
        $output = '<div class="alert alert-danger alert-dismissible fade in" role="alert"> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span></button>';

        $i = 0;
        foreach ($myarr as $value) {
            $i++;
            if ($i <= 3) {
                $output .= '<i class="fa fa-exclamation-triangle"></i> ' . h($value) . '<br/>';
            }
        }

        if (count($myarr) > 3) {
            $output .= '<small class="accordion-toggle" data-toggle="collapse" data-target="#demo">
                            more...
                        </small>
                        <div id="demo" class="collapse">';
            $i = 0;
            foreach ($myarr as $value) {
                $i++;
                if ($i > 3) {
                    $output .= '<i class="fa fa-exclamation-triangle"></i> ' . h($value) . '<br/>';
                }
            }
            $output .= '</div>';
        }

        $output .= '</div>';

        return $output;
    }
    public function displayErrorsOld($entity)
    {
        if (empty($errors)) {
            return '';
        }

        $myarr = $this->flatten($errors);
        $output = '<div class="alert alert-danger alert-dismissible fade in" role="alert"> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span></button>';

        $i = 0;
        foreach ($myarr as $value) {
            $i++;
            if ($i <= 3) {
                $output .= '<i class="fa fa-exclamation-triangle"></i> ' . h($value) . '<br/>';
            }
        }

        if (count($myarr) > 3) {
            $output .= '<small class="accordion-toggle" data-toggle="collapse" data-target="#demo">
                            more...
                        </small>
                        <div id="demo" class="collapse">';
            $i = 0;
            foreach ($myarr as $value) {
                $i++;
                if ($i > 3) {
                    $output .= '<i class="fa fa-exclamation-triangle"></i> ' . h($value) . '<br/>';
                }
            }
            $output .= '</div>';
        }

        $output .= '</div>';

        return $output;
    }
}
