<?php
  
  class Home extends CI_Controller
  {
  	
  	public function index(){
  		$this->load->model('Crudmodel');
  		$records = $this->Crudmodel->getRecords();
  		
  		$this->load->view('home',['records'=>$records]);
  	}

  	public function create(){
  		$this->load->view('create');
  	}

  	public function save(){
                $this->form_validation->set_rules('customername', 'customerName', 'required');
                $this->form_validation->set_rules('phone', 'Phone', 'required');
                $this->form_validation->set_rules('address', 'Address', 'required');
                $this->form_validation->set_rules('city', 'City', 'required');
                $this->form_validation->set_rules('order', 'Order', 'required');
                $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

                if ($this->form_validation->run())
                {
                	   $data=$this->input->post();
                       $this->load->model('Crudmodel');
                       if($this->Crudmodel->saveRecord($data)){
                       	$this->session->set_flashdata('response','Record saved Successfully.');
                       }
                       else{
                       	  $this->session->set_flashdata('response','Record Failled to save.');
                       }
                       return redirect('home');
                }
                else
                {
                        $this->load->view('create');
                }
  	}



  	public function edit($record_id){
        $this->load->model('Crudmodel');
        $record=$this->Crudmodel->getAllRecords($record_id);
        $this->load->view('update',['record'=>$record]);
  	}
    
    public function update($record_id){
         $this->form_validation->set_rules('customername', 'customerName', 'required');
                $this->form_validation->set_rules('phone', 'Phone', 'required');
                $this->form_validation->set_rules('address', 'Address', 'required');
                $this->form_validation->set_rules('city', 'City', 'required');
                $this->form_validation->set_rules('order', 'Order', 'required');
                $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

                if ($this->form_validation->run())
                {
                     $data=$this->input->post();
                       $this->load->model('Crudmodel');
                       if($this->Crudmodel->updateRecords($record_id,$data)){
                        $this->session->set_flashdata('response','Record updated Successfully.');
                       }
                       else{
                          $this->session->set_flashdata('response',' Failled to update.');
                       }
                       return redirect('home');
                }
                else
                {
                        $this->load->view('update');
                }
    }


     public function delete($record_id){
        $this->load->model('Crudmodel');
        if($this->Crudmodel->deleteRecord($record_id)){
          $this->session->set_flashdata('response','Record deleted Successfully.');
        }
        else{
           $this->session->set_flashdata('response',' Failled to Delete.');
        }
        return redirect('home');
     }

  }
?>