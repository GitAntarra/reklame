<?php
class Pages {
                //ci instance
    private $CI;
    //template Data
    var $template_data = array();

    public function __construct() 
    {
        $this->CI =& get_instance();
    }

    function set($content_area, $value)
    {
        $this->template_data[$content_area] = $value;
    }

    function load($view_content = null, $view_data = array(), $view_css = null , $view_js = null , $return = FALSE)
    {
        $content_folder = explode("/",$view_content);
        $number = count($content_folder)-2;

        $str_folder = '';
        for($i = $number; $i >= 0; $i--){
            $str_folder = $content_folder[$i].'/'.$str_folder;
        }

        if(!$view_css){
            // $views_css = $str_folder."css.php";
        }else{
            $views_css = $str_folder."".$view_css;
        }
        
        if(!$view_js){
            // $views_js = $content_folder[0]."/".$content_folder[1]."/js.php";
        }else{
            $views_js = $str_folder."".$view_js;
        }

        if ($view_css)
        {
            $this->set('css' , $this->CI->load->view($views_css, $view_data, TRUE));
        }
        if ($view_js)
        {
            $this->set('js' , $this->CI->load->view($views_js, $view_data, TRUE));
        } 

        if($view_content)
        {
            $this->set('content' , $this->CI->load->view($view_content, $view_data, TRUE));
        }

        $this->CI->load->view('template/index', $this->template_data);
    }
                               
}
?>