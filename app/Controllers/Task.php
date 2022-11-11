<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Task extends BaseController
{
    protected $taskModel;
    public function __construct()
    {
        $this->taskModel = new TaskModel();
    }
    public function index()
    {
        // $task = $this->taskModel->findAll();
        $data = [
            'title' => 'Task Note',
            'task' => $this->taskModel->getTask()
        ];




        return view('task/index', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Task',
            'task' => $this->taskModel->getTask($id)
        ];
        return view('task/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create Task',
            // 'validation' => \Config\Services::validation()
        ];
        return view('task/create', $data);
    }

    public function save()
    {
        $this->taskModel->save(
            [
                'title' => $this->request->getVar('title'),
                'description' => $this->request->getVar('description'),
                'course' => $this->request->getVar('course'),
                'meeting' => $this->request->getVar('meeting'),
                'deadlineDate' => $this->request->getVar('deadlineDate'),
                'deadlineTime' => $this->request->getVar('deadlineTime'),
                'doingBy' => $this->request->getVar('doingBy'),
                'media' => $this->request->getVar('media'),
                // 'isDone'=>$this->request->getVar('isDone'),
            ]
        );
        session()->setFlashdata('Message', 'Task Successfully Added!');
        return redirect()->to('/task');
    }

    public function delete($id)
    {
        $this->taskModel->delete($id);
        return redirect()->to('/task');
    }

    public function update($id)

    {
        $isDone = "true";
        $this->taskModel->save(
            [
                'id' => $id,
                'isDone' => $isDone
            ]
        );
        return redirect()->to('/task');
    }
}
