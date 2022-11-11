<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'task';
    protected $useTimestamps = true;
    protected $allowedFields = ['title', 'description', 'course', 'meeting', 'deadlineDate', 'deadlineTime', 'doingBy', 'media', 'isDone'];

    public function getTask($id = false)
    {
        if ($id == false) {
            return $this->select('task.id, task.title, task.description, task.course, task.meeting, task.deadlineDate, task.deadlineTime, task.doingBy, task.media, task.isDone,')->orderBy('deadlineDate', 'ASC')->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}