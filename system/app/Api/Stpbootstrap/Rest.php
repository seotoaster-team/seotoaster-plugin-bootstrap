<?php
/**
 * Stpservice
 * @author: iamne <eugene@seotoaster.com> Seotoaster core team
 * Date: 8/3/12
 * Time: 4:33 PM
 */
class Api_Stpbootstrap_Rest extends Api_Service_Abstract {

    protected $_accessList = array(
        Tools_Security_Acl::ROLE_SUPERADMIN => array(
            'allow' => array('get')
        )
    );


    /**
     * The get action handles GET requests and receives an 'id' parameter; it
     * should respond with the server resource state of the resource identified
     * by the 'id' value.
     */
    public function getAction() {
        return array('Stpservice' => 'works');
        // TODO: Implement getAction() method.
    }

    /**
     * The post action handles POST requests; it should accept and digest a
     * POSTed resource representation and persist the resource state.
     */
    public function postAction()
    {
        // TODO: Implement postAction() method.
    }

    /**
     * The put action handles PUT requests and receives an 'id' parameter; it
     * should update the server resource state of the resource identified by
     * the 'id' value.
     */
    public function putAction()
    {
        // TODO: Implement putAction() method.
    }

    /**
     * The delete action handles DELETE requests and receives an 'id'
     * parameter; it should update the server resource state of the resource
     * identified by the 'id' value.
     */
    public function deleteAction()
    {
        // TODO: Implement deleteAction() method.
    }


}
