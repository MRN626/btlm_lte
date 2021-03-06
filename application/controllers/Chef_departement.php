<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Chef_departement extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Chef_departement_model');
    } 

    /*
     * Listing of chef_departement
     */
    function index()
    {
        $data['chef_departement'] = $this->Chef_departement_model->get_all_chef_departement();
        
        $data['_view'] = 'chef_departement/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new chef_departement
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('NOM_COMPLET','NOM COMPLET','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'NOM_COMPLET' => $this->input->post('NOM_COMPLET'),
				'SIGNATURE_CHEF_DEP' => $this->input->post('SIGNATURE_CHEF_DEP'),
				'DATE_CREATION' => $this->input->post('DATE_CREATION'),
				'DATE_MODIFICATION' => $this->input->post('DATE_MODIFICATION'),
				'DATE_SUPPRESSION' => $this->input->post('DATE_SUPPRESSION'),
            );
            
            $chef_departement_id = $this->Chef_departement_model->add_chef_departement($params);
            redirect('chef_departement/index');
        }
        else
        {            
            $data['_view'] = 'chef_departement/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a chef_departement
     */
    function edit($ID)
    {   
        // check if the chef_departement exists before trying to edit it
        $data['chef_departement'] = $this->Chef_departement_model->get_chef_departement($ID);
        
        if(isset($data['chef_departement']['ID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('NOM_COMPLET','NOM COMPLET','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'NOM_COMPLET' => $this->input->post('NOM_COMPLET'),
					'SIGNATURE_CHEF_DEP' => $this->input->post('SIGNATURE_CHEF_DEP'),
					'DATE_CREATION' => $this->input->post('DATE_CREATION'),
					'DATE_MODIFICATION' => $this->input->post('DATE_MODIFICATION'),
					'DATE_SUPPRESSION' => $this->input->post('DATE_SUPPRESSION'),
                );

                $this->Chef_departement_model->update_chef_departement($ID,$params);            
                redirect('chef_departement/index');
            }
            else
            {
                $data['_view'] = 'chef_departement/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The chef_departement you are trying to edit does not exist.');
    } 

    /*
     * Deleting chef_departement
     */
    function remove($ID)
    {
        $chef_departement = $this->Chef_departement_model->get_chef_departement($ID);

        // check if the chef_departement exists before trying to delete it
        if(isset($chef_departement['ID']))
        {
            $this->Chef_departement_model->delete_chef_departement($ID);
            redirect('chef_departement/index');
        }
        else
            show_error('The chef_departement you are trying to delete does not exist.');
    }
    
}
