<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// mendapatkan catagori berdasarkan idpost

if (!function_exists('get_category'))
	{
	/**
	 * Get category by post id
	 * @param string $idpost
	 * @return mixed
	 */
	function get_category($idpost)
		{
		$CI = & get_instance();
		$CI->load->model('category_model', 'categories');
		return $CI->categories->get_by_idpost($idpost);
		}
	}

// mendapatkan semua katagori

if (!function_exists('get_categories'))
	{
	/**
	 * Get all the categories
	 * @return mixed
	 */
	function get_categories()
		{
		$CI = & get_instance();
		$CI->load->model('category_model', 'categories');
		return $CI->categories->get_all();
		}
	}

// mendapatkan tag berdasarkan id

if (!function_exists('get_tags'))
	{
	/**
	 * Get tags by post id
	 * @param string $idpost
	 * @return mixed
	 */
	function get_tags($idpost)
		{
		$CI = & get_instance();
		$CI->load->model('tag_model', 'tags');
		return $CI->tags->get_by_idpost($idpost);
		}
	}

// mendapatkan semua post dengan limit

if (!function_exists('get_posts'))
	{
	/**
	 * Get the list of post
	 * @param int $count
	 * @return mixed list of post or bool
	 */
	function get_posts($count = 5)
		{
		$CI = & get_instance();
		$CI->load->model('post_model', 'posts');
		return $CI->posts->get_posts($count);
		}
	}

if (!function_exists('time_ago'))
	{
	function time_ago($date)
		{
		$is_valid = is_date_time_valid($date);
		if ($is_valid)
			{
			$timestamp = strtotime($date);
			$difference = time() - $timestamp;
			$periods = array(
				"sec",
				"min",
				"hour",
				"day",
				"week",
				"month",
				"years",
				"decade"
			);
			$lengths = array(
				"60",
				"60",
				"24",
				"7",
				"4.35",
				"12",
				"10"
			);
			if ($difference > 0)
				{ // this was in the past time
				$ending = "ago";
				}
			  else
				{ // this was in the future time
				$difference = - $difference;
				$ending = "to go";
				}

			for ($j = 0; $difference >= $lengths[$j]; $j++) $difference/= $lengths[$j];
			$difference = round($difference);
			if ($difference != 1) $periods[$j].= "s";
			$text = "$difference $periods[$j] $ending";
			return $text;
			}
		  else
			{
			return 'Date Time must be in "yyyy-mm-dd hh:mm:ss" format';
			}
		}
	}

if (!function_exists('is_date_time_valid'))
	{
	function is_date_time_valid($date)
		{
		if (date('Y-m-d H:i:s', strtotime($date)) == $date)
			{
			return TRUE;
			}
		  else
			{
			return FALSE;
			}
		}
	}

/*

$date = '2014-04-10 14:20:15';
echo time_ago($date);

3 months ago

$date = '2014-07-20 14:20:15';
echo time_ago($date);

3 weeks to go
*/
if (!function_exists('generateSlug'))
	{
function generateSlug($phrase, $maxLength)
{ 
    $result = strtolower($phrase);

    $result = preg_replace("/[^a-z0-9\s-]/", "", $result);
    $result = trim(preg_replace("/[\s-]+/", " ", $result));
    $result = trim(substr($result, 0, $maxLength));
    $result = preg_replace("/\s/", "-", $result);

    return $result;
}
}