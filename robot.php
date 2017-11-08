<?php

namespace strategie;

abstract class Robot {
    private $action;
    private $communication;

    public function __contruct(Action $action,Communication $communication) {
        $this->action = $action;
        $this->communiquer = $communication;
    }

    public function actionner() {
        $this->action->doAction;
    }

    public function communiquer() {
        $this->action->doCommunication;
    }
}

?>