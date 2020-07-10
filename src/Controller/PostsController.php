<?php
// src/Controller/PostsController.php

namespace App\Controller;
use App\Controller\AppController;

class PostsController extends AppController
{
    public function kalendar()
    {
        $posts = $this->Posts->find('all');
        $this->set(compact('posts'));
    }

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Include the FlashComponent
    }


    public function add()
    {
        $post = $this->Posts->newEntity();
        if ($this->request->is('post')) {
            $post = $this->Posts->patchEntity($post, $this->request->data);
            $post->created = date("Y-m-d H:i:s");
            $post->modified = date("Y-m-d H:i:s");
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('Your post has been saved.'));
                return $this->redirect(['action' => 'kalendar']);
            }
            $this->Flash->error(__('Unable to add your post.'));
        }
        $this->set('post', $post);
    }

    public function edit($id = null)
    {
        $post = $this->Posts->get($id);
        if ($this->request->is(['post','put'])) {
            $post = $this->Posts->patchEntity($post, $this->request->data);
            $post->modified = date("Y-m-d H:i:s");
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('Your post has been updated.'));
                return $this->redirect(['action' => 'kalendar']);
            }
            $this->Flash->error(__('Unable to update your post.'));
        }
        $this->set('post', $post);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $post = $this->Posts->get($id);
        if ($this->Posts->delete($post)) {
            $this->Flash->success(__('The post with id: {0} has been deleted.', h($id)));
            return $this->redirect(['action' => 'kalendar']);
        }
    }

    public function load(){
        $this->loadModel('Events');

        $events = $this->Events->find();

        foreach($events as $result){
            foreach($result as $row)
            {
            $data[] = array(
              'id'   => $row["id"],
              'title'   => $row["title"],
              'detail'   => $row["detail"],
              'start'   => $row["start"],
              'end'   => $row["end"]
             );
            }
        }
        echo json_encode($data);
    }

    public function saveEvent(){
        $this->loadModel('Events');
        $data = $this->request->getQuery();
        // pr($data['start']);
        // pr($data['end']);
        //exit;
        $event = $this->Events->newEntity();
        $event = $this->Events->patchEntity($event, $data);
        //pr($event);exit;
        $this->Events->save($event);
        exit;
    }
}

