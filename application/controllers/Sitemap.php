<?php

class Sitemap extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // We load the url helper to be able to use the base_url() function
        $this->load->helper('url');

        $this->load->model('SitemapModel');

        // Array of some articles for demonstration purposes
    }

    /**
     * Generate a sitemap index file
     * More information about sitemap indexes: http://www.sitemaps.org/protocol.html#index
     */
    public function index() {
        $this->SitemapModel->add(base_url(), NULL, 'monthly', 1);
        $this->SitemapModel->add(base_url('contact'), NULL, 'monthly', 0.9);
        $this->SitemapModel->add(base_url('about-us'), NULL, 'monthly', 0.9);
        $this->SitemapModel->add(base_url('privacy-policy'), NULL, 'monthly', 0.9);
        $this->SitemapModel->add(base_url('maharaja-care'), NULL, 'monthly', 0.9);

        $this->db->where("parent_id", "0");
        $querymenu = $this->db->get('category');
        $categorylistsparent = $querymenu->result_array();
        foreach ($categorylistsparent as $key => $value) {
//            echo $value['category_name'];
            $this->SitemapModel->add(site_url('Product/productList/1/' . $value['id']), NULL, 'monthly', 0.9);
        }


        $this->SitemapModel->output();
    }

    /**
     * Generate a sitemap both based on static urls and an array of urls
     */
    public function general() {
        $sitemap = [
            array('title' => 'INSIGHTS', 'url' => base_url('about-us'), 'suburl' => array()),
            array('title' => 'Gallery', 'url' => base_url('contact'), 'suburl' => array()),
            array('title' => 'Loyalty Program', 'url' => base_url('privacy-policy'), 'suburl' => array()),
            array('title' => 'Review', 'url' => base_url('maharaja-care'), 'suburl' => array()),
        ];
        $this->db->where("parent_id", "0");
        $querymenu = $this->db->get('category');
        $categorylistsparent = $querymenu->result_array();
        foreach ($categorylistsparent as $key => $value) {
//            echo $value['category_name'];
            $temp = array('title' => $value['category_name'], 'url' => bsite_url('Product/productList/1/' . $value['id']), 'suburl' => array());

            array_push($sitemap, $temp);
        }
        $blog = [];


        $data['sitemap'] = $sitemap;
        $this->load->view('Pages/sitemap', $data);
    }

    /**
     * Generate a sitemap only on an array of urls
     */
    public function articles() {

        $this->SitemapModel->output();
    }

}
