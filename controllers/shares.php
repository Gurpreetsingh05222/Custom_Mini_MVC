<?php
class Share extends Controller{
    protected function Index(){
        $viewmodel = new ShareModel();
        $this->ReturnView($viewmodel->Index(), true);
    }
}