<?php
// Controller/CommentsContorller.php
class CommentsController extends AppController {

    public $components = array('RequestHandler');

    public function add() {
        $return = false;
        if ($this->request->data) {
            $return = $this->Comment->save($this->request->data);
        }

        if ($this->RequestHandler->isAjax()) {
            // return error or result as json
        }

        // fallback in case of direct access
        $this->redirect($this->referer());
    }
    $response = $this->requestAction('/comments/add/comment:New comment/id:3');

$comments = $this->requestAction('/comments/latest');

}
?>