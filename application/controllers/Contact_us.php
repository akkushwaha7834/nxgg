<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Contact_us extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Contact_us_model', 'Contact_us_model');
        $this->load->helper('url');
        $this->load->library('email');
    }

    public function submit_form()
    {
        if ($this->input->post()) {
            $page_data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'message' => $this->input->post('message'),
            );
            $result = $this->Contact_us_model->contact_submit_data($page_data);
            $mail_data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'message' => $this->input->post('message'),
            );
            // $welcome_message = $this->load->view('frontend/mail/welcome-mail', $mail_data, TRUE);
            if ($result == TRUE) {
                $this->email->from('lilysharma0016@gmail.com', 'FXCareers');
                $this->email->to($this->input->post('email'));
                $this->email->subject('Join our free demo session');
                $this->email->message('Hello');
            } else {
                ?>
                <script type="text/javascript">
                    alert("Please select your booking date for demo session");
                    window.location.href = "<?php echo base_url('demo'); ?>";
                </script>
                <?php
            }
            if ($this->email->send()) {

                ?>
                <script type="text/javascript">
                    alert("Thankyou for contacting us.");

                    window.location.href = "<?php echo base_url(); ?>";
                </script>
                <?php
                exit;
                redirect(base_url());

            } else {
                echo $this->email->print_debugger();
                die;
            }

        }
    }
}