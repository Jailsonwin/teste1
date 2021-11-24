<?php

namespace App\Controllers;
use App\Models\EquipeModel;
use CodeIgniter\Controller;

class EquipeController extends BaseController
{
    // show equipes list
    public function index(){
        $equipeModel = new EquipeModel();
        $data['equipes'] = $equipeModel->orderBy('id', 'DESC')->findAll();
        return view('equipe_view', $data);
    }

    // show add equipe form
    public function create(){
        return view('add_equipe');
    }
 
    // insert data into database
    public function store() {
       $equipeModel = new EquipeModel();
       /*
       $data = [
           'name' => c,
           'description'  => $this->request->getVar('description'),
           'users_id'  => $this->request->getVar('users_id'),
       ];
       */
      $data['name'] = $this->request->getVar('name');
      $data['description'] = $this->request->getVar('description');
      $data['users_id'] = $this->request->getVar('description');
       var_dump($this->request->getVar('name'));
       $equipeModel->insert($data);
       return $this->response->redirect(site_url('/equipes-list'));
    }

    // show single equipe
    public function singleEquipe($id = null){
        $equipeModel = new EquipeModel();
        $data['equipe_obj'] = $equipeModel->where('id', $id)->first();
        return view('edit_equipe', $data);
    }

    // update equipe data
    public function update(){
        $equipeModel = new EquipeModel();
        $id = $this->request->getVar('id');
        $data=[];
        $data ['name']=$this->request->getVar('name');
        $data ['description']=$this->request->getVar('description');
        $data ['users_id']=$this->request->getVar('users_id');
        var_dump($data);
        //$data = [
        //    'name' => $this->request->getVar('name'),
        //    'description'  => $this->request->getVar('description'),
        //    'users_id'  => $this->request->getVar('users_id'),
        //];
        //dd($this->request->getVar('users_id'));
        $equipeModel->update($id, $data);
        return $this->response->redirect(site_url('/equipes-list'));
    }
 
    // delete equipe
    public function delete($id = null){
        $equipeModel = new EquipeModel();
        $data['equipe'] = $equipeModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/equipes-list'));
    }    
}
