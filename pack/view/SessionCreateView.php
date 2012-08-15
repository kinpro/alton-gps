<?php
pload('app.AppView');

/**
 * SessionCreateView View
 *
 * @author Sam-Mauris Yong / mauris@hotmail.sg
 * @copyright Copyright (c) 2012, Sam-Mauris Yong / mauris@hotmail.sg
 * @license http://www.opensource.org/licenses/bsd-license New BSD License
 * @package app.view
 * @since 1.0
 */
class SessionCreateView extends AppView {
    
    protected function create(){
        $this->define('rootUrl', $this->service('config.app')->get('app', 'rootUrl'));        
    }
    
}