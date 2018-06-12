<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2016, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['form_validation_required']		= '{field} harus diisi.';
$lang['form_validation_isset']			= '{field} harus memiliki nilai.';
$lang['form_validation_valid_email']		= '{field} harus berisi alamat email.';
$lang['form_validation_valid_emails']		= '{field} field must contain all valid email addresses.';
$lang['form_validation_valid_url']		= '{field} field must contain a valid URL.';
$lang['form_validation_valid_ip']		= '{field} field must contain a valid IP.';
$lang['form_validation_min_length']		= '{field} harus memiliki minimal {param} karakter.';
$lang['form_validation_max_length']		= 'Panjang karakter {field} maksimal {param} karakter.';
$lang['form_validation_exact_length']		= '{field} field must be exactly {param} characters in length.';
$lang['form_validation_alpha']			= '{field} hanya boleh berisi karakter alpabet.';
$lang['form_validation_alpha_numeric']		= '{field} hanya boleh berisi karakter alpabet dan angka.';
$lang['form_validation_alpha_numeric_spaces']	= '{field} hanya boleh berisi karakter alpabet, angka dan spasi.';
$lang['form_validation_alpha_dash']		= '{field} hanya boleh berisi karakter alpabet, angka, garis bawah, and garis miring.';
$lang['form_validation_numeric']		= '{field} hanya boleh berisi angka.';
$lang['form_validation_is_numeric']		= '{field} field must contain only numeric characters.';
$lang['form_validation_integer']		= '{field} hanya boleh berisi bilangan bulat.';
$lang['form_validation_regex_match']		= '{field} field is not in the correct format.';
$lang['form_validation_matches']		= '{field} field does not match {param} field.';
$lang['form_validation_differs']		= '{field} field must differ from {param} field.';
$lang['form_validation_is_unique'] 		= '{field} harus bernilai unik.';
$lang['form_validation_is_natural']		= '{field} field must only contain digits.';
$lang['form_validation_is_natural_no_zero']	= '{field} field must only contain digits and must be greater than zero.';
$lang['form_validation_decimal']		= '{field} field must contain a decimal number.';
$lang['form_validation_less_than']		= '{field} field must contain a number less than {param}.';
$lang['form_validation_less_than_equal_to']	= '{field} field must contain a number less than or equal to {param}.';
$lang['form_validation_greater_than']		= '{field} field must contain a number greater than {param}.';
$lang['form_validation_greater_than_equal_to']	= '{field} field must contain a number greater than or equal to {param}.';
$lang['form_validation_error_message_not_set']	= 'Unable to access an error message corresponding to your field name {field}.';
$lang['form_validation_in_list']		= '{field} field must be one of: {param}.';
