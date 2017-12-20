<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->library(array('session', 'pagination', 'form_validation', 'email'));
        $this->load->helper(array('html', 'text', 'string', 'form', 'url'));
		// $this->load->model('front_model');
		
		$timezone = "Asia/Calcutta";
		if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
	}
	
	function index()
	{
        /*
		if($this->uri->segment(1))
		{			
			$section_name = '';
			$section_name = $this->db->query("select section_name from category where section_name = '".$this->uri->segment(1)."'")->row()->section_name;
			$category_slug = '';
			$category_slug = $this->db->query("select category_slug from category where category_slug = '".$this->uri->segment(1)."'")->row()->category_slug;
			$essay_slug = '';
			$essay_slug = $this->db->query("select essay_slug from essay where essay_slug = '".$this->uri->segment(1)."'")->row()->essay_slug;
			if($this->uri->segment(1) == $section_name)
			{
				$data['meta_title'] = 'Section Title';	
				$data['meta_keywords'] = 'Section Keywords';
				$data['meta_description'] = 'Section Description';
				$data['categories'] = $this->front_model->categories();
				$this->load->view('section', $data);
			}
			elseif($this->uri->segment(1) == $category_slug)
			{
				$table_name = 'category';
				$slug = $category_slug;
				$data['meta_title'] = $this->front_model->meta_title($table_name, $slug);	
				$data['meta_keywords'] = $this->front_model->meta_metakeywords($table_name, $slug);
				$data['meta_description'] = $this->front_model->meta_metadesc($table_name, $slug);
				$data['essays'] = $this->front_model->essays();
				$data['latestessays'] = $this->front_model->latestessay();
				$this->load->view('category', $data);
			}
			elseif($this->uri->segment(1) == $essay_slug)
			{
				$table_name = 'essay';
				$slug = $essay_slug;
				$data['meta_title'] = $this->front_model->meta_title($table_name, $slug);	
				$data['meta_keywords'] = $this->front_model->meta_metakeywords($table_name, $slug);
				$data['meta_description'] = $this->front_model->meta_metadesc($table_name, $slug);
				$data['essay_results'] = $this->front_model->essayresult();
				$data['related_essays'] = $this->front_model->relatedessay();
				$this->load->view('essay', $data);
			}
			elseif($this->uri->segment(1) == 'about-us')
			{
				$data['meta_title'] = 'Essay Title';	
				$data['meta_keywords'] = 'Essay Keywords';
				$data['meta_description'] = 'Essay Description';
				$this->load->view('aboutus', $data);
			}
			elseif($this->uri->segment(1) == 'advertise')
			{
				$data['meta_title'] = 'Essay Title';	
				$data['meta_keywords'] = 'Essay Keywords';
				$data['meta_description'] = 'Essay Description';
				$this->load->view('advertise', $data);
			}
			elseif($this->uri->segment(1) == 'privacy-policy')
			{
				$data['meta_title'] = 'Essay Title';	
				$data['meta_keywords'] = 'Essay Keywords';
				$data['meta_description'] = 'Essay Description';
				$this->load->view('privacy-policy', $data);
			}
			elseif($this->uri->segment(1) == 'terms-use')
			{
				$data['meta_title'] = 'Essay Title';	
				$data['meta_keywords'] = 'Essay Keywords';
				$data['meta_description'] = 'Essay Description';
				$this->load->view('terms-use', $data);
			}
			elseif($this->uri->segment(1) == 'sitemap.xml')
			{
				$posts = $this->front_model->allessaylist();
				
				foreach($posts as $post)
				{
					$essay_slug = $post->essay_slug;
					$item = array(
						"loc" => site_url($essay_slug),
						// ISO 8601 format - date("c") requires PHP5
						"lastmod" => date("c", strtotime($post->essay_mdate)),
						"changefreq" => "always",
						"priority" => "0.5"
					);
					
					$this->sitemaps->add_item($item);
				}
				
				// file name may change due to compression
				$file_name = $this->sitemaps->build("sitemap.xml");
		
				$reponses = $this->sitemaps->ping(site_url($file_name));
				
				// Debug by printing out the requests and status code responses
				// print_r($reponses);
		
				redirect(site_url($file_name));	
			}
			else
			{
				$data['meta_title'] = '404 Error';	
				$data['meta_keywords'] = '404 Error';
				$data['meta_description'] = '404 Error';
				$this->load->view('my404', $data);
			}
		}
		else
		{
			$data['reports'] = $this->front_model->reports();
			$data['summaries'] = $this->front_model->summaries();
			$data['technologies'] = $this->front_model->technologies();
			$data['meta_title'] = 'Read Essay Title';	
			$data['meta_keywords'] = 'Read Essay Keywords';
			$data['meta_description'] = 'Read Essay Description';
			$this->load->view('home', $data);
        }
        */
        // $this->load->view('home', $data);
        $this->load->view('home');
	}
}
?>