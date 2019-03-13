<?php
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');
        $siteLang = $ci->session->userdata('site_lang');
        if ($siteLang) {
            $ci->lang->load(array('home','login','clinicfilter','clinicprofile','doctor','doctorfilter','doctorprofile','hospitalfilter','hospitalprofile','medicalfilter','medicalprofile','search','about','booking','hospital','patient','terms'),$siteLang);
        } else {
             $ci->lang->load(array('home','login','clinicfilter','clinicprofile','doctor','doctorfilter','doctorprofile','hospitalfilter','hospitalprofile','medicalfilter','medicalprofile','search','about','booking','hospital','patient','terms'),'english');
        }
    }
}