<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
    public $name = 'Pages';

/**
 * This controller uses Contact model
 *
 * @var array
 */
    public $uses = array('Contact');

/**
 * This controller uses some custom helpers
 *
 * @var array
 */
    public $helpers = array('AjaxForm');

    const COMPANY_EMAIL = "info@centromultisalud.es";
    //const COMPANY_EMAIL = "mancas.91@gmail.com";

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
    public function display() {
        $path = func_get_args();

        $count = count($path);
        if (!$count) {
            $this->redirect('/');
        }
        $page = $subpage = $title_for_layout = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        if (!empty($path[$count - 1])) {
            if ($path[$count - 1] == 'home')
                $title_for_layout = 'Centro Sanitario Multisalud';
            else {
                $title_for_layout = 'Cuadro Sanitario: ' . ucfirst($path[$count-1]);
            }
        }

        $this->set(compact('page', 'subpage', 'title_for_layout'));
        $this->render(implode('/', $path));
    }

    public function contact()
    {
        //Disable the view and the layout
        $this->autoRender = false;

        $json_response = array('ok' => false, 'message' => 'Ocurrió un error inesperado. Intentalo más tarde...');
        if ($this->request->is('ajax')) {
            $this->Contact->set($this->data);
            if ($this->Contact->validates()) {
                $json_response['ok'] = true;
                $json_response['message'] = 'Se ha enviado correctamente tu consulta. Nuestro personal se pondra en contacto contigo. Gracias por confiar en nosotros.';
                $this->_sendEmail($this->data);
            }
        } else {
            $json_response['message'] = 'Ocurrió un error al enviar el mensaje, por favor, intentalo más tarde.';
        }

        $this->response->type('json');

        $json = json_encode($json_response);
        $this->response->body($json);
    }

    private function _sendEmail($data)
    {
        $user = $data['Contact']['email'];
        $name = $data['Contact']['name'];
        $message = $data['Contact']['message'];

        $Email = new CakeEmail(array('log' => true));
        $Email->config('smtp');
        $Email->from(array($user => $name))
            ->to(PagesController::COMPANY_EMAIL)
            ->subject('Contacto')
            ->send($message);
    }
}
